<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Post;
use Illuminate\Http\Request;

class PostAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Post::latest()->get();
        
            return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'"data-original-title="Edit" class=edit btn btn-primary btn-sm editPost">Edit</a>';
                    $btn = $btn. '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'"data-original-title="Delete" class= btn btn-danger btn-sm deletePost">Delete</a>';
                    
                    return $btn;

                  })
                  ->rawColumns(['action'])
                  ->make(true);
                  return view('post_ajax', compact('data'));
        }else{
            $data = Post::latest()->get();
            // $data['name'] = $data->name;
            // $data['decription'] = $data->description;
            return $data;
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
