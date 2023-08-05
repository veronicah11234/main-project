<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .image-container img {
            display: block;
            width: 2500px;
            height: 2500px;
            object-fit: cover;
            object-position: center;
        }

    </style>
</head>
<body>
    @include ("navbar")

    @extends('layouts.app')

    @section('content')
        <h1>Bookings</h1>
        <ul>
            @foreach ($bookings as $booking)
                <li>{{ $booking->name }} - {{ $booking->destination->name }}</li>
            @endforeach
        </ul>
    @endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
