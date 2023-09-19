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
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            }
        </style>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>

                <input id="name" class="form-input" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>

                <input id="email" class="form-input" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>

                <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>

                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
