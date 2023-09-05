<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Import the Booking model

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
            'time' => 'required|time',
            'message' => 'nullable|string',
        ]);

        // Create a new Booking record in the database
        Booking::create($validatedData);

        // Redirect to the booking form with a success message
        return redirect()->route('booking.create')->with('success', 'Booking submitted successfully!');
    }
}