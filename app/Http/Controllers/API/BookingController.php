<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Stripe\Stripe;
use Stripe\Charge;

class BookingController extends Controller
{

    public function addbooking(Request $request)
    {
        // Retrieve the tours data from your database 
    
        // Pass the data to the view
        return view('admin.addbooking');
    
        
    }

    public function create(Request $request)
    {
        return view('book'); // Display the booking form
        return view('admin.addbooking');

    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'amount' => 'required|numeric', // Updated validation rule for amount
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        // Create a new Booking record in the database
        Booking::create($validatedData);
        Stripe::setApiKey(config('services.stripe.secret'));

        // Set a default amount value if it's not provided in the request
$validatedData['amount'] = $request->input('amount', 0.00);

// Create a new Booking record in the database
Booking::create($validatedData);


    try {
        Charge::create([
            'amount' => $request->input('amount') * 100, // Amount in cents
            'currency' => 'usd', // Currency code
            'source' => $request->input('stripeToken'), // Token from the client-side
            'description' => 'Booking Payment',
        ]);

        // Payment was successful, redirect or show a success message
        return redirect()->route('booking.index')->with('success', 'Payment successful');
    } catch (\Exception $e) {
        // Payment failed, handle the error
        return redirect()->back()->withErrors(['error' => 'Payment failed: ' . $e->getMessage()]);
    }

        // Redirect to the booking form with a success message
        return redirect()->route('booking.create')->with('success', 'Booking submitted successfully!');
    }
}
