<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"> <!-- Add this line -->
    
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script> <!-- Add this line -->
    </head>
    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
            {{-- @include('layouts.navigation') --}}
            @include('navigation')

            <div class="container">
                @yield('content')
            </div>

            @auth
<!-- First anchor tag for triggering the logout form -->
{{-- <a href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
   Logout
</a>

<!-- Logout form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form> --}}


@else
    <a href="{{ route('login') }}">Login</a>
@endauth

        </div>
    </body>
</html>
