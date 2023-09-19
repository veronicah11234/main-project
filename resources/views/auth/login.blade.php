<x-guest-layout>
    <x-auth-card>
        <style>
            /* Your custom styles */
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            h1 {
                text-align: center;
                margin-top: 50px;
                color: #333;
            }

            form {
                max-width: 400px;
                margin: 30px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 15px;
            }

            button {
                background-color: #4CAF50;
                color: #fff;
                padding: 12px 20px;
                border: none;
                border-radius: 3px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            }
        </style>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div><br>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br><br>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
