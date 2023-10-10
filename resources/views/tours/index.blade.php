<!-- resources/views/tours/tours.blade.php -->

@extends('layouts.app')

@section('content')
<button onclick="window.location.href = '{{ route('admin') }}'">Go Back</button>

   
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
        {{-- <button type="submit" class="btn "><a href="{{ route('admin.edit_tour', ['id' => $tour->id]) }}">Edit</a></button> --}}

            </button>
  
    </form>
</div>
  

<!-- Add a button that triggers JavaScript to go back to the home page -->

        <hr>

        <!-- List All Tours -->
        <h2>List of Tours</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                    <tr>
                        <td>{{ $tour->id }}</td>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->description }}</td>
                        <td>{{ $tour->price }}</td>
                        <td>
                            <a href="{{ route('admin.show_tour', ['id' => $tour->id]) }}">View</a> |
                            <a href="{{ route('admin.edit', ['id' => $tour->id]) }}">Edit</a> |
                            <form action="{{ route('admin.destroy', ['id' => $tour->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        
        
        
        
        
        
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
