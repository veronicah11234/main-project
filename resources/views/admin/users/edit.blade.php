{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    <a href="{{ route('admin.users.view', $user->id) }}">View User Information</a>


@section('content')
    <div class="container">
        <h1>Edit User</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <!-- Add form fields for editing user details here -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}">
            </div>
            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>

        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
        </form>
    </div>
@endsection

</body>
</html> --}}