<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Booking;
class HomeController extends Controller
{
    
    public function index()
    {
        $popularProducts = Product::where('stock',1)->get(); 
        return view('home',compact('popularProducts'));
    }
    public function detail($slug){
        $product = Product::where('slug',$slug)->first();

        $related = Product::all();
        return view ('detail',compact('product','related'));
    }
    public function rooms() {
        $unpopularProducts = Product::all(); 
        return view('rooms',compact('unpopularProducts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date', 
        ]);

        $booking = Booking::create($request->all()); 
        return redirect()->route('booking-success'); 
    }
}
