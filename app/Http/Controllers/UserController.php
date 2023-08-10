<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'username' => 'required',
            'role' => 'required',
        ]);

        // Assuming you have a User model and 'users' table in your database
        $user = User::find($data['id']);
        if ($user) {
            return response()->json(['message' => 'User ID already exists'], 400);
        }

        $user = User::create($data);
        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function assignRole(Request $request, $id)
    {
        $data = $request->validate([
            'role' => 'required',
        ]);

        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User ID does not exist'], 404);
        }

        $user->role = $data['role'];
        $user->save();

        return response()->json(['message' => 'User role updated successfully'], 200);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User ID does not exist'], 404);
        }

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'role' => $user->role,
        ], 200);
    }
}