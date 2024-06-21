<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

use App\Models\ImgProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view(' admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();  
        return view ('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images', $fileName);
        $request->merge(['image' => $fileName]);

    try {
        
        $product = Product::create($request->all());
        if ($product && $request->hasFile('photos')) {
            foreach ($request->photos as $key => $value) {
                $fileNames = $value->getClientOriginalName();
                $value->storeAs('public/images', $fileNames);
                ImgProduct::create([
                    'product_id' => $product->id,
                    'image' => $fileNames
                ]);
            }
        }
        } catch (\Throwable $th) {
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
