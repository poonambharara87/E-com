<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    

    public function store(Request $request)
    { 
        $imagePath = "";
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products/', 'public');
            $data['image'] = $imagePath;
        }else{
           
        }

        $product = Product::create([
            "name" => $request->name,
            "small_description" => $request->small_description,
            "description" => $request->description,
            "original_price" => $request->original_price,
            "selling_price" => $request->selling_price,
            "image" => $imagePath?$imagePath:"$imagePath",
            "qty" => $request->qty,
            "tax" => $request->tax,
            "status" => $request->status,
            "trending" => $request->trending,
            "meta_title" => $request->meta_title,
            "meta_keywords" => $request->meta_keywords,
            "meta_description" => $request->meta_description,
         ]);

         $product_id = $product->id;
         return "product added!";
    }



    public function check(Request $request)
    {
        return view('products.show');
       
    }
    public function search($location = null)
    {
        return $location;
    }


} 

