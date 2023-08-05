<!-- resources/views/hotels/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $hotel->name }}</h1>
    <p>Description: {{ $hotel->description }}</p>
    <p>Price: ${{ $hotel->price }}</p>
    <!-- Add more hotel details as needed -->
@endsection


