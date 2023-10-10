<!-- resources/views/profile.blade.php -->

@extends('layouts.app')
<button onclick="window.location.href = '{{ route('admin') }}'">Go Back</button>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    <div class="text-center">
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail" width="100">
                        @else
                            <img src="{{ asset('images/mypic.jpg') }}" alt="Default Avatar" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <hr>
                    <p><strong>First Name:</strong> {{ $user->first_name }} miriam</p>
                    <p><strong>Last Name:</strong> {{ $user->last_name }}njeri</p>
                    <!-- Add more profile fields here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
