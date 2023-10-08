<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tour;
use App\Models\Cart;
use App\Models\CartItem;


class TourController extends Controller {
   
    public function index()
    {
        // Retrieve the tours data from your database 
        $tours = Tour::all(); // Replace `Tour` with your actual model name
    
        // Pass the data to the view
        return view('admin.addtour', ['tours' => $tour]);
    
        
    }


public function create(Request $request)
{
    return view('tours.create');
}


public function showTours()
{
    $tours = Tour::all(); // Replace with your actual query to retrieve tours
    return view('admin.addtour', compact('tours'));
}


public function edit($id)
{
    // Retrieve the selected tour (assuming you are using $id to fetch a specific tour)
    $selectedTour = Tour::find($id);

    // Retrieve the list of all tours
    $tours = Tour::all();

    // Pass both $selectedTour and $tours to the view
    return view('admin.edit', compact('selectedTour', 'tours'));
}

public function update(Request $request, $id)
{
    // Find the tour by ID
    $tour = Tour::find($id);

    // Update the tour data based on the form input
    $tour->name = $request->input('name');
    $tour->description = $request->input('description');
    $tour->price = $request->input('price');
    $tour->image = $request->input('images');


    // Save the updated data
    $tour->save();

    return redirect()->route('admin.edit')->with('success', 'Tour updated successfully');
}
    // app/Http/Controllers/TourController.php
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
    // Inside a controller method
    public function showTour($tourId) {
        $tour = Tour::findOrFail($tourId); // Assuming $tourId is the ID of the tour you want to display
        return view('tour.show', ['tour' => $tour]);
    }


    public function nakuruparks($tourId)
{
    // Fetch data from the database based on the $tourId parameter
    $tour = Tour::find($tourId);

    // Check if the data exists before passing it to the view
    if (!$tour) {
        abort(404); // Or handle the case when data is not found
    }

    $tour = Tour::all(); // Fetch all tours

    return view('nakuruparks', ['tour' => $tour, 'tours' => $tour]);
}


// public function nakuruparks($tourId)
// {
//     // Fetch data from the database based on the $tourId parameter
//     $tour = Tour::find($tourId);

//     // Check if the data exists before passing it to the view
//     if (!$tour) {
//         abort(404); // Or handle the case when data is not found
//     }

//     $tours = Tour::all();

//     return view('nakuruparks', ['tour' => $tour, 'tours' => $tours]);
// }


        
        public function Cart(Request $request, $tourId)
        {
            $tour = Tour::find($tourId);
            $tourId = $request->input('tour_id');
        
            if (!$tour) {
                // Handle the case where the tour is not found
                return redirect()->route('tours.index')->with('error', 'Tour not found.');
            }
        
            if ($request->isMethod('post')) {
                // Handle POST request to add a tour to the cart
                $tourId = $request->input('tour_id');
                
                // Add the tour to the user's cart
                // ...
        
                return view('cart', ['cartItems' => $cartItems, 'totalPrice' => $totalPrice]);
            }
            $tourId = $request->input('tour_id');
        
            // Add the tour to the user's cart
            if (auth()->check()) {
                CartItem::create([
                    'user_id' => auth()->user()->id,
                    'tour_id' => $tour->id,
                    'quantity' => 1,
                    'price' => $tour->price,
                ]);
            } else {
                // Handle the case where the user is not authenticated, e.g., show an error message or redirect to login.
            }
        
            return redirect()->back()->with('success', 'Tour added to cart.');
        }
        


public function viewCart()
{
    $cartItems = CartItem::where('user_id', auth()->user()->id)->with('tour')->get();
    $totalPrice = $cartItems->sum(function ($item) {
        return $item->quantity * $item->price;
    });

    $cartItems = // Retrieve your cart items here

// Calculate the total price by iterating through cart items
$totalPrice = 0;
foreach ($cartItems as $item) {
    $totalPrice += $item->quantity * $item->tour->price;
}

// Pass $cartItems and $totalPrice to the view
return view('cart', compact('cartItems', 'totalPrice'));
    // Assuming you have a $cartItems variable containing the cart items
return view('cart', [
    'cartItems' => $cartItems,
    // Other variables you want to pass to the view
]);
    return view('cart', compact('cartItems', 'totalPrice'));
}


public function __construct()
{
    $this->middleware('auth'); // Apply 'auth' middleware to the entire controller
}


public function addToCart(Request $request)
{
    // Get the data sent from the client (image, tourName, price, tourId)
    $image = $request->input('image');
    $tourName = $request->input('name');
    $price = $request->input('price');
    $tourId = $request->input('tour_id');
    
    // Add the item to the cart (you can use Laravel's session for this)
    $cart = session('cart', []);
    
    // Check if the item already exists in the cart based on tourId
    $existingItem = collect($cart)->where('tour_id', $tourId)->first();
    
    if ($existingItem) {
        // If the item already exists, increment its quantity
        $existingItem['quantity'] += 1;
    } else {
        // Otherwise, add a new item to the cart
        $newItem = [
            'image' => $image,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $image,
            'tour_id' => $tourId,
            'quantity' => 1,
        ];
        $cart[] = $newItem;
    }
    // $formData = [
    //     'name' => $request->input('name'),
    //     'description' => $request->input('description'),
    //     'description' => $request->input('description'),
    //     'description' => $request->input('description'),

    //     // Add other form fields as needed
    // ];

    // Save the new tour to the database
    $newTour->save();

    // Set the newlyAddedTour variable
    $newlyAddedTour = $newTour;

    // Redirect to the edit view with the newlyAddedTour data
    return view('admin.edit', ['newlyAddedTour' => $newlyAddedTour]);

    // Store the updated cart in the session
    session(['cart' => $cart]);
    $request->session()->put('tourFormData', $formData);

    // Redirect to the edit page
    return redirect()->route('edit_tour');

    return response()->json(['message' => 'Item added to cart']);
}



public function destroy($id)
{
    // Find the tour by ID
    $tour = Tour::find($id);

    // Delete the tour
    $tour->delete();

    return redirect()->route('admin.edit')->with('success', 'Tour deleted successfully');
}


    
    // Add other methods as needed.
}
