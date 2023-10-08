<?php

    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Http\Request;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\ValidationException;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Str;


    class AuthController extends BaseController
    {
        // use AuthorizesRequests, ValidatesRequests;
    
        public function signup(Request $request)
        {
            try {
                $validatedData = $request->validate([
                    'username' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|min:6',
                ]);
        
                $verificationToken = Str::random(10); // Generate a random verification token
                $hashedToken = Hash::make($verificationToken); // Hash the token
        
                $user = new User();
                $user->username = $validatedData['username'];
                $user->email = $validatedData['email'];
                $user->password = Hash::make($validatedData['password']);
                $user->verification_token = $hashedToken; // Store the hashed token in the database
                $user->verified = false;
                $user->save();
        
                return response()->json(['message' => 'Your email verification code is ' . $verificationToken], 200);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage(); // Get the specific error message
                Log::error($errorMessage); // Log the error message for debugging purposes

                return response()->json(['error' => $errorMessage], 500);
            }
        }
        


        public function verifyEmail(Request $request): JsonResponse
        {
            try {
                $validatedData = $request->validate([
                    'email' => 'required|email',
                    'token' => 'required',
                ], [
                    'email.required' => 'Please enter an email address.',
                    'email.email' => 'Please enter a valid email address.',
                    'token.required' => 'Please enter a verification token.',
                ]);

                $user = User::where('email', $validatedData['email'])->first();

                if (!$user || !Hash::check($validatedData['token'], $user->verification_token)) {
                    return response()->json(['error' => 'Invalid email or verification token.'], 401);
                }

                $user->verification_token = null;
                $user->verified = true;
                $user->save();

                return response()->json(['message' => 'Email verified successfully. You can now access your account.'], 200);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                return response()->json(['error' => 'An error occurred while verifying your email. Please try again.'], 500);
            }
        }
        

        public function login(Request $request): JsonResponse
        {
            try {
                $validatedData = $request->validate([
                    'email' => 'required|email',
                    'password' => 'required',
                ], [
                    'email.required' => 'Please enter an email address.',
                    'email.email' => 'Please enter a valid email address.',
                    'password.required' => 'Please enter a password.',
                ]);

                $user = User::where('email', $validatedData['email'])->first();

                if (!$user) {
                    return response()->json(['error' => 'User not found.'], 404);
                }
                if (!$user->verified) {
                    return response()->json(['error' => 'Please verify your email address first.'], 401);
                }
                if (!Hash::check($validatedData['password'], $user->password)) {
                    return response()->json(['error' => 'Invalid credentials.'], 401);
                }

                $roles = $user->roles->pluck('name')->toArray();
                $token = $user->createToken('auth-token')->plainTextToken;

                return response()->json(['token' => $token, 'user' => $user, 'roles' => $roles, 'soft_deleted' => $user->trashed()], 200);

                return response()->json(['token' => $token, 'user' => $user, '$roles' => $$roles], 200);

            } catch (ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage(); // Get the specific error message
                Log::error($errorMessage); // Log the error message for debugging purposes

                return response()->json(['error' => $errorMessage], 500);
            }
        }
       

        public function forgotPassword(Request $request): JsonResponse
        {
            try {
                $validatedData = $request->validate([
                    'email' => 'required|email',
                ], [
                    'email.required' => 'Please enter an email address.',
                    'email.email' => 'Please enter a valid email address.',
                ]);

                $user = User::where('email', $validatedData['email'])->first();

                if (!$user) {
                    return response()->json(['error' => 'User not found.'], 404);
                }

                $verificationCode = Str::random(10);
                $hashedVerificationCode = Hash::make($verificationCode);

                $user->reset_token = $hashedVerificationCode;
                $user->save();

                return response()->json(['message' => 'Your password reset code is  ' . $verificationCode, ], 200);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                Log::error($errorMessage);

                return response()->json(['error' => $errorMessage], 500);
            }
        }

        public function resetPassword(Request $request): JsonResponse
{
    try {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Please enter a valid email address.',
            'token.required' => 'Please enter a verification code.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password must be at least :min characters long.',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        // Check if the reset token matches
        if ($user->reset_token !== $validatedData['token']) {
            return response()->json(['error' => 'Invalid verification code.'], 400);
        }

        // Reset the user's password
        $user->password = Hash::make($validatedData['password']);
        $user->reset_token = null; // Clear the verification code
        $user->save();

        return response()->json(['message' => 'Password reset successful.'], 200);
    } catch (ValidationException $e) {
        $errors = $e->validator->errors()->all();
        return response()->json(['errors' => $errors], 422);
    } catch (\Exception $e) {
        $errorMessage = $e->getMessage();
        Log::error($errorMessage);

        return response()->json(['error' => $errorMessage], 500);
    }
}
        public function softDeleteAccount()
        {
            try {
                $user = Auth::user();
                if ($user) {
                    // Revoke all user tokens
                    $user->tokens()->delete();

                    // Delete the user
                    $user->delete();

                    return response()->json(['message' => 'Your account has been deleted.'], 200);
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                Log::error($errorMessage);
                return response()->json(['error' => $errorMessage], 500);
            }
        }

    
        public function logout(): JsonResponse
{
    try {
        $user = Auth::user();
        if ($user) {
            $user->tokens()->delete();
            return response()->json(['message' => 'You have logged out.'], 200);
        }
    } catch (\Exception $e) {
        $errorMessage = $e->getMessage(); // Get the specific error message
        Log::error($errorMessage); // Log the error message for debugging purposes

        return response()->json(['error' => $errorMessage], 500);
    }

    // Return a JSON response in case of unexpected errors
    return response()->json(['error' => 'An unexpected error occurred.'], 500);
}
    }




