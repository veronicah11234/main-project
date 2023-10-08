<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Tour;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('tour')->get();
        $cartTotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->tour->price;
        });

        return view('cart', compact('cartItems', 'cartTotal'));
    }

    public function addToCart(Request $request, Tour $tour)
    {
        $cartItem = Cart::where('tour_id', $tour->id)->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'tour_id' => $tour->id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.view')->with('success', 'Tour added to cart.');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public'); // Store the image in the 'public/uploads' directory
            $validatedData['image'] = $imagePath;
        }
    
        // Create a new tour record in the database
        Tour::create($validatedData);
    
        // Redirect back with a success message or perform any other desired actions
        return redirect()->back()->with('success', 'Tour added successfully');
    }

    public function showTour($tourId)
    {
        $tour = Tour::findOrFail($tourId); // Assuming $tourId is the ID of the tour you want to display
        return view('tour.show', ['tour' => $tour]);
    }

    public function deleteFromCart(Request $request, Cart $cart)
    {
        $cart->delete();

        return redirect()->route('cart.view')->with('success', 'Tour removed from cart.');
    }

    // Implement the checkout logic if needed
}
