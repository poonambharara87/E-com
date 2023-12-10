<?php
use App\Http\Controllers\JsonParseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('/dashboard', function() {
        return view('admin.index');
    });

    Route::get('/product', function() {
        return view('admin.product');
    });

});

Route::get('/add-to-cart', function(){
    return view('addToCart');
});


Route::get('/products', function(){
    return view('products.product');
});

    Route::post('/add_product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit_product', [ProductController::class, 'edit']);
    Route::post('/update_product', [ProductController::class, 'update'])->name('product.update');
   
   //URL SEGMENTS AND 
   
    Route::get('/filter', function(Illuminate\Http\Request $request){
        return redirect()->route('search', ['location' => $request->location, 'sponsor_name' => $request->sponsor_name,
        'expiry' => $request->expiry ])->name('filter');
    });
    // Route::get('/create', [ProductController::class, 'check']);
    // Route::get('/search/location/{location}', [ProductController::class, 'index'])->name('search');
    Route::get('/search/location/{location}/sponsor_name/{sponsor_name}/expiry/{expiry}')->name('search');
    // Route::get('/search/{location}', [ProductController::class, 'search'])->name('search');
   
    //DATATABLE PLUGIN YAJRA
    
    Route::get('/users', [UserController::class, 'index'])->name('admins.index');
   
    Route::get('/json-acess', [JsonParseController::class, 'index']);
    Route::get('mobile-verification', [OTPController::class, 'sent_otp']);
