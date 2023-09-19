<!-- resources/views/tours/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tour Details</h1>

    <p><strong>Name:</strong> {{ $tour->name }}</p>
    <p><strong>Price:</strong> {{ $tour->price }}</p>
    <p><strong>Availability:</strong> {{ $tour->availability }}</p>
    <a href="{{ route('tours.edit', $tour->id) }}">Edit</a> |
    <form action="{{ route('tours.destroy', $tour->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
