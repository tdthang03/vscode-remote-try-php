<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        
        Log::info('Booking request received', dd($request->all()));
        dd('Reached here');

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'res_date' => 'required|date',
            'quantity' => 'required|integer',
        ]);

        Log::info('Validation passed');
        dd('Validation passed');

        $booking = Booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'res_date' => $request->res_date,
            'quantity' => $request->quantity,
        ]);

        Log::info('Booking created', $booking->toArray());
        dd($booking);

        return redirect()->back()->with('success', 'Booking successfully!');
    }
}
