<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    
    public function index()
    {
        $popularProducts = Product::where('stock',1)->get(); 
        return view('home',compact('popularProducts'));
    }
    public function detail($slug){
        $product = Product::where('slug',$slug)->first();
        return view ('detail',compact('product'));
    }
    
}
