<!-- resources/views/tours/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Tour</h1>

    <form action="{{ route('tours.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>
        <label>Availability:</label>
        <select name="availability" required>
            <option value="Available">Available</option>
            <option value="Sold Out">Sold Out</option>
        </select>
        <button type="submit">Create Tour</button>
    </form>
@endsection
