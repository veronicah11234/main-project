<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <div class="text-center">
                            @if ($user->profile)
                                <img src="{{ $user->profile->avatar ?? asset('default-avatar.png') }}" alt="User Avatar" class="img-thumbnail" width="150">
                                <h2 class="mt-3">{{ $user->profile->name }}</h2>

                                @if($user->profile->bio)
                                    <p class="mt-3">{{ $user->profile->bio }}</p>
                                @endif
                            @else
                                <!-- Handle the case where the user profile is not available -->
                                <p>User profile not available.</p>
                            @endif
                        </div>
                        <!-- Add more profile fields as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
