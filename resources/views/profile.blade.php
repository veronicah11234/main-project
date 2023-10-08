<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .success{
            background-color: green;
            color: white;
            width: 80%;
            padding: 14px 28px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    @extends('dashboard')
    @section('message')
        @if (session('success'))
            <div class="success">
                {{session('success')}}
            </div>
        @endif
    @endsection
    @section('dashboard-content')
        <h1>Basic Info.</h1>
        <form action="{{route('profile.update')}}" method="POST">
            @csrf
            @method('patch')
            <div>
                <input type="text" name="name" value="{{$user->name}}">
            </div>
            <div>
                <input type="text" name="email" value="{{$user->email}}">
            </div>
            <div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <input type="submit" name="update" value="Update">
            </div>
        </form>
      
    @endsection
    
</body>
</html>