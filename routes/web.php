<?php
use App\Http\Controllers\JsonParseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostAjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;
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


    Route::get('/home', [HomeController::class, 'index'])->name('home');

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


    Route::post('/reset-password', [UserController::class, 'reset_password_forgot']);
    Route::post('/forgot-password', [UserController::class, 'forgot-password']);
    Route::post('/add_product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit_product', [ProductController::class, 'edit']);
    Route::post('/update_product', [ProductController::class, 'update'])->name('product.update');
   
   //URL SEGMENTS AND 
 
    Route::get('/create', [ProductController::class, 'check']);
    // Route::get('/search/location/{location}', [ProductController::class, 'index'])->name('search');
    Route::get('/search/location/{location ?}/sponsor_name/{sponsor_name ?}/expiry/{expiry ?}')->name('search');
    // Route::get('/search/{location}', [ProductController::class, 'search'])->name('search');
   


    //DATATABLE PLUGIN YAJRA
    
    Route::get('/users', [UserController::class, 'index'])->name('admins.index');
   
    Route::get('/json-acess', [JsonParseController::class, 'index']);
    Route::get('mobile-verification', [OTPController::class, 'sent_otp']);
    Route::resource('ajaxposts', PostAjaxController::class);

    Route::get('/registration', function(){
        return view('registration');
    });


    //PAYPAL In LARAVEL 
    Route::post('/registration', [AuthController::class, 'register'])->name('register');
    Route::post('paypal/payment', [PaymentController::class, 'payment'])->name('paypal');
    Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal_success');
    Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal_cancel');
    Route::post('users', [UserController::class, 'index'])->name('users');
    Route::get('/login', function(){ return view('login'); });
    Route::post('/login', [AuthController::class, 'login'])->name('login');
