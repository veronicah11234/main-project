<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    }

    public function update_profile(Request $request){
        $user =Auth::user();
        $user->update($request->only(['name', 'email']));
        return redirect()->route('admin.profile')->with('success', 'Update successful.');
    
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                $file = $request->file('file');
                $encodedFile = $request->input('file');

                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/profiles', $filename);


                $imageUrl = asset('storage/profiles/' . $filename);

                Profile::create(['id' => $user->id,'photo' => $imageUrl]);

                return response()->json(['message' => 'Image uploaded successfully', 'image_url' => $imageUrl, 'user' => $user->id]);
            }

            return response()->json(['message' => 'Failed to upload image'], 500);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user(); // Retrieve the authenticated user

        return view('profile', compact('user'));
    }

public function edit()
{
    $profile = auth()->user()->profile;
    return view('profiles.edit', compact('profile'));
}

public function update(Request $request)
{
    $user = auth()->user();
    $user->profile->update([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        // Update other profile fields
    ]);

    return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
}
}