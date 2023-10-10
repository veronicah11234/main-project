<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\UserRole;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;


class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
   
    public function index()
    {
        // Retrieve a list of admin users from the database using the Admin model
        $users = Admin::all();

        // Pass the data to the view and render it
        return view('admin.index', ['users' => $users]);
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
   

        public function assign_roles(Request $request): JsonResponse
        {
            try {
                $validatedData = $request->validate([
                    'user_id' => 'required',
                    'role_id' => 'required',
                ], [
                    'user_id.required' => 'Please enter a user id.',
                    'role_id.required' => 'Please enter a role id.',
                ]);

                $user_role = new UserRole();
                $user_role->user_id = $validatedData['user_id'];
                $user_role->role_id = $validatedData['role_id'];
                $user_role->save();

                return response()->json(['message' => 'Role assigned successfully'], 200);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage(); // Get the specific error message
                Log::error($errorMessage); // Log the error message for debugging purposes

                return response()->json(['error' => $errorMessage], 500);
            }
        }
        // public function logout(): JsonResponse
        // {
        //     try {
        //         // Instead of deleting tokens, you can simply log the user out
        //         Auth::logout();
        //         return response()->json(['message' => 'You have logged out.'], 200);
        //     } catch (\Exception $e) {
        //         $errorMessage = $e->getMessage();
        //         Log::error($errorMessage);
        //         return response()->json(['error' => $errorMessage], 500);
        //     }
        // }
}