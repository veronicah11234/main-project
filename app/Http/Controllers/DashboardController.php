<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;


class DashboardController extends Controller
{
    public function index()
    {
        $tours = Tour::all(); // Retrieve the list of tours
        $tour = null; // Initialize an empty $tour variable (for the form)
    
        return view('tours.index', ['tours' => $tours]);
    }
    
    public function add_tour(Request $request, Tour $tourModel)
    {
        // Validate input
        $validated_input = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'price' => 'required|numeric',
        ]);

        // Image upload logic
        if ($request->hasFile('image')) {
            $fileNametostore = $this->uploadImage($request->file('image'));
        } else {
            $fileNametostore = "noimage.jpg";
        }

        try {
            // Create a new tour
            $tour = $tourModel->create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $fileNametostore,
                'price' => $request->price,
            ]);

            // Handle success
            return redirect()->route('admin.add_tour')->with("success", 'Tour added successfully');
        } catch (\Exception $exception) {
            // Handle errors
            if ($exception->getCode() === '23000') {
                // Duplicate entry error
                return redirect()->route('admin.add_tour')->withInput()->withErrors(['name' => 'Tour name already exists.']);
            } else {
                // Other database-related error
                return redirect()->route('admin.add_tour')->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
            }
        }
    }

    public function dashboard()
{
    $tours = Tour::all(); // Retrieve the list of tours
    return view('admin.dashboard', compact('tours'));
}

public function edit($id = null)
{
    // Retrieve the selected tour
    $selectedTour = Tour::find($id);

    // Retrieve the list of all tours
    $tours = Tour::all();

    // Return the view for editing a tour
    return view('admin.edit_tour', compact('selectedTour', 'tours'));
}
public function show($id)
{
    $tour = Tour::find($id); // Retrieve the tour by its ID
    if (!$tour) {
        abort(404); // Handle the case where the tour is not found
    }

    return view('dashboard', compact('tour'));
}

    public function update(Request $request, $id)
    {
        // Update the tour with the provided data
        $tour = Tour::findOrFail($id);
        $validated_input = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image', // Optional: Image update
            'price' => 'required|numeric',
        ]);
    
        if ($request->hasFile('image')) {
            // Handle image update
            $fileNametostore = $this->uploadImage($request->file('image'));
            $tour->image = $fileNametostore;
        }
    
        // Update tour details
        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->price = $request->price;
        $tour->save();
    
        // Handle success
        return redirect()->route('admin.add_tour')->with("success", 'Tour updated successfully');
    }
    
    public function destroy($id)
{
    // Retrieve the selected tour
    $tour = Tour::find($id);

    if (!$tour) {
        return redirect()->route('admin.dashboard')->with('error', 'Tour not found.');
    }

    // Delete the tour
    $tour->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Tour deleted successfully.');
}

    public function logout(): JsonResponse
    {
        try {
            $user = Auth::user(); // Use Auth facade to get the authenticated user
            if ($user) {
                $user->tokens()->delete();
                Auth::logout(); // Log the user out
    
                // Return a JSON response
                return response()->json(['message' => 'You have logged out.'], 200);
            } else {
                return response()->json(['message' => 'User not found.'], 404);
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage(); // Get the specific error message
            Log::error($errorMessage); // Log the error message for debugging purposes
                return redirect('/admin/edit')->with("success", 'Tour added successfully');

            // Redirect to the home page upon error
            return response()->json(['error' => 'An error occurred. Please try again later.'], 500);
            return redirect('/home')->with("success", 'Tour added successfully');

        }
    }
}    


