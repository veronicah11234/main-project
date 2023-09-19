<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        return view('book'); // Display the booking form
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        // Create a new Booking record in the database
        Booking::create($validatedData);

        // Redirect to the booking form with a success message
        return redirect()->route('booking.create')->with('success', 'Booking submitted successfully!');
    }
}
