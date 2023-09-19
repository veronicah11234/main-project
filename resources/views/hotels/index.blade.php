<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')  // Use your layout template if you have one

@section('content')
    <h1>Hotel Listings</h1>

    <ul>
        @foreach($hotels as $hotel)
            <li>
                <h2>{{ $hotel->name }}</h2>
                <p>Star Rating: {{ $hotel->star_rating }}</p>
                <p>Description: {{ $hotel->description }}</p>
                <p>Price per Night: KES {{ number_format($hotel->price, 2) }}</p>
            </li>
        @endforeach
    </ul>
@endsection

</body>
</html>