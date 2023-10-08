<!-- resources/views/tours/tours.blade.php -->

@extends('layouts.app')

@section('content')
   
<div class="container">
    <h2>Add a New Park</h2>
    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Park Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" required>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <!-- Add more form fields for other park information as needed -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

            {{-- <div class="mb-3">
                <label for="availability" class="form-label">Availability:</label>
                <select class="form-select" id="availability" name="availability" required>
                    <option value="Available">Available</option>
                    <option value="Sold Out">Sold Out</option>
                </select>
            </div> --}}

            

            <button type="submit" class="btn btn-primary">Create Tour</button>
        </form>

        <hr>

        <!-- List All Tours -->
        <h2>List of Tours</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    {{-- <th>Availability</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                <div>
                    <h2>{{ $tour->name }}</h2>
                    <p>{{ $tour->description }}</p>
                    <p>Price: ${{ $tour->price }}</p>
                    @if ($tour->image_path)
                        <img src="{{ asset('storage/' . $tour->image_path) }}" alt="{{ $tour->name }}" width="200">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Show Tour Details -->
    @if(isset($selectedTour))
        <div class="container">
            <h2>Tour Details</h2>
            <p><strong>Name:</strong> {{ $selectedTour->name }}</p>
            <p><strong>Price:</strong> {{ $selectedTour->price }}</p>
            {{-- <p><strong>Availability:</strong> {{ $selectedTour->availability }}</p> --}}
            <p><strong>Description:</strong> {{ $selectedTour->description }}</p>
        </div>
    @endif

@endsection
