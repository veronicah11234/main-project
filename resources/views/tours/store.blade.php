<!-- resources/views/tours/store.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Tour</h1>
        


        <form action="{{ route('tours.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter tour description" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Tour</button>
        </form>

        <br>

        <a href="{{ route('tours.index') }}" class="btn btn-secondary">Back to All Tours</a>
    </div>
@endsection

