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
    use Illuminate\Support\Facades\Mail;
    use App\Mail\VerificationEmail;



    class AuthController extends BaseController
    {
        // use AuthorizesRequests, ValidatesRequests;
    
        public function signup(Request $request)
        {
            // Validation rules for signup form fields
            $rules = [
                'username' => 'required|string|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ];
        
            $request->validate($rules);
        
            // Create user record in the database
            $user = User::create([
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'verification_token' => Str::random(40), // Generate a random verification token
            ]);
        
            // Send verification email
            // Mail::to($user->email)->send(new VerificationEmail($user));
        
            return response()->json(['message' => 'Signup successful! Please check your email for verification.']);
        }
        
     
        
        
        public function verifyEmail($token)
        {
            $user = User::where('verification_token', $token)->first();
    
            if (!$user) {
                abort(404); // Or show an error page indicating invalid token
            }
    
            $user->update([
                'verification_token' => null,
                'email_verified_at' => now(),
            ]);
    
            return redirect()->route('login')->with('message', 'Email verification successful! You can now log in.');
        }
    


     public function loginPage()
            {
                return view('login');
            }
            public function login(Request $request)
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

                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    $user = Auth::user();
                    $is_admin = $user->hasRole('admin');
                    $token = $user->createToken('auth-token')->plainTextToken;

                    return response()->json(['token' => $token, 'user' => $user, 'is_admin' => $is_admin], 200);
                } else {
                    return response()->json(['error' => 'Invalid credentials.'], 401);
                }
            } catch (\Illuminate\Validation\ValidationException $e) {
                $errors = $e->validator->errors()->all();
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
                \Illuminate\Support\Facades\Log::error($errorMessage);

                return response()->json(['error' => 'An error occurred while logging in. Please try again.'], 500);
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
        }
    } 