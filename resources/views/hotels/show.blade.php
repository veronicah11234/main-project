<!-- hotels/show.blade.php -->

@extends('layouts.app')  // Use your layout template if you have one

@section('content')
    <h1>{{ $hotel->name }}</h1>
    <p>Star Rating: {{ $hotel->star_rating }}</p>
    <p>Description: {{ $hotel->description }}</p>
    <p>Price per Night: KES {{ number_format($hotel->price, 2) }}</p>

    <a href="{{ route('hotels.index') }}">Back to Listings</a>
@endsection
