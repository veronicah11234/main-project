<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tour;
use App\Models\Cart;
use App\Models\CartItem;


class TourController extends Controller {
   
    // public function index()
    // {
    //     // Retrieve the tours data from your database 
    //     $tours = Tour::all(); // Replace `Tour` with your actual model name
    
    //     // Pass the data to the view
    //     return view('admin.addtour', ['tours' => $tour]);
    
        
    // }


public function create(Request $request)
{
    return view('tours.create');
}


public function showTours()
{
    $tours = Tour::all(); // Replace with your actual query to retrieve tours
    return view('admin.add_tour', compact('tours'));
}


public function edit($id)
{
    // Retrieve the selected tour (assuming you are using $id to fetch a specific tour)
    $selectedTour = Tour::find($id);

    // Retrieve the list of all tours
    $tours = Tour::all();

    $selectedTour = Tour::find($id);
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




// public function addTour(Request $request, Tour $tourModel) {
//     $validated_input = $request->validate([
//         'name' => 'required',
//         'description' => 'required',
//         'image' => 'required|image',
//         'price' => 'required|numeric',
//     ]);

//     // Image upload logic
//     if ($request->hasFile('image')) {
//         $fileNametostore = $this->uploadImage($request->file('image'));
//     } else {
//         $fileNametostore = "noimage.jpg";
//     }

//     try {
//         $tour = $tourModel->create([
//             'name' => $request->name,
//             'description' => $request->description,
//             'image' => $fileNametostore,
//             'price' => $request->price,
//         ]);
//         $formData = [
//             'name' => $request->input('name'),
//             'description' => $request->input('description'),
//             'image' => $request->input('image'),
//             'price' => $request->input('price'),
    
//         ];

//         $request->session()->put('tourFormData', $formData);

//         return redirect('/admin/edit')->with("success", 'Tour added successfully');
//     } catch (\Exception $exception) {
//         if ($exception->getCode() === '23000') {
//             // Duplicate entry error
//             return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already in use. Please choose a different email.']);
//         } else {
//             // Other database-related error
//             return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
//         }
//     }
// }

private function uploadImage($image) {
    // Get filename with extension
    $filenamewithext = $image->getClientOriginalName();
    // Get filename only
    $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
    // Get extension
    $extension = $image->getClientOriginalExtension();
    // Filename to store
    $fileNametostore = $filename . '_' . time() . '.' . $extension;
    // Upload the file
    $path = $image->storeAs('public/image', $fileNametostore);

    return $fileNametostore;
}       
       



public function destroy($id)
{
    // Find the tour by ID
    $tour = Tour::find($id);

    // Delete the tour
    $tour->delete();

    return redirect()->route()->with('success', 'Tour deleted successfully');
}


    
    // Add other methods as needed.
}
