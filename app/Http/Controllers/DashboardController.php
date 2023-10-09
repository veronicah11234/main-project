<?php

namespace App\Http\Controllers;

// app/Http/Controllers/DashboardController.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;


class DashboardController extends Controller
{
    
    
    public function add_tour(Request $request, Tour $tourModel) {
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
    
        $tour = $tourModel->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $fileNametostore,
            'price' => $request->price,
        ]);
    
        $formData = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
        ];
    
        $request->session()->put('tourFormData', $formData);
    
        // You can remove the redirection here, or replace it with any other action you want
        // return redirect('/admin/edit')->with("success", 'Tour added successfully');
    }
    
    
    


    public function edit($id)
{
    // Retrieve the selected tour (assuming you are using $id to fetch a specific tour)
    $selectedTour = Tour::find($id);

    // Retrieve the list of all tours
    $tours = Tour::all();

    // Pass both $selectedTour and $tours to the view
//     return view('admin.edit', compact('selectedTour', 'tours'));
// }
    
//     private function uploadImage($image) {
//         // Get filename with extension
//         $filenamewithext = $image->getClientOriginalName();
//         // Get filename only
//         $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
//         // Get extension
//         $extension = $image->getClientOriginalExtension();
//         // Filename to store
//         $fileNametostore = $filename . '_' . time() . '.' . $extension;
//         // Upload the file
//         $path = $image->storeAs('public/image', $fileNametostore);
    
//         return $fileNametostore;
//     }
//     public function add_user(Request $request){
//         $validated_input = $request->validate([
//             'name' => 'required | min: 3 | max: 10',
//             'tel'=>'required',
//             'email' => 'required',
//             'password' => 'required | min: 6'
//         ]);

//         try {

//             User::create(array(
//                 'name' => $request->name, 
//                 'tel'=>$request->tel,
//                 'email' => $request->email,
//                 'password' => bcrypt($request->password),
//             ));
//             return redirect('/')->with('success', "Signup successful");
//         } catch (QueryException $exception) {
//             if ($exception->getCode() === '23000') {
//                 // Duplicate entry error
//                 return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already in use. Please choose a different email.']);
//             } else {
//                 // Other database-related error
//                 return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
//             }
//         }

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
    
            // Return a JSON response for the error
            return response()->json(['error' => 'An error occurred. Please try again later.'], 500);
        }
    }
    
}    


