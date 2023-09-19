<!-- resources/views/tours/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Tour</h1>

    <form action="{{ route('tours.update', $tour->id) }}" method="post">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $tour->name }}" required>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $tour->price }}" required>
        <label>Availability:</label>
        <select name="availability" required>
            <option value="Available" {{ $tour->availability === 'Available' ? 'selected' : '' }}>Available</option>
            <option value="Sold Out" {{ $tour->availability === 'Sold Out' ? 'selected' : '' }}>Sold Out</option>
        </select>
        <button type="submit">Update Tour</button>
    </form>
@endsection
