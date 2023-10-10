<!-- resources/views/tours/tours.blade.php -->

@extends('layouts.app')

@section('content')
<button onclick="window.location.href = '{{ route('admin') }}'">Go Back</button>

<style>
    .action-link {
        color: #007BFF; /* Link text color */
        text-decoration: none; /* Remove default underline */
        margin-right: 10px; /* Spacing between links */
    }

    .action-link:hover {
        text-decoration: underline; /* Underline on hover */
    }
    a{
        text-decoration:none;
    }

    .action-button {
        background-color: #DC3545; /* Button background color */
        color: #fff; /* Button text color */
        border: none; /* Remove button border */
        padding: 5px 10px; /* Adjust padding as needed */
        cursor: pointer;
        border-radius: 5px; /* Rounded corners */
        margin-right: 10px; /* Spacing between buttons */
    }

    .action-button:hover {
        background-color: #BD2130; /* Button background color on hover */
    }
</style>


   
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
                    <th>Image</th>
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
                        <td>{{ $tour->image }}</td>
                        <td>{{ $tour->price }}</td>
                        <td>
                           <a href="{{ route('admin.show_tour', ['id' => $tour->id]) }}" class="action-button" style="background-color: #007BFF;">View</a>|<br>
                            {{-- <a href="{{ route('admin.edit', ['id' => $tour->id]) }}" class="action-link">Edit</a> | --}}
                            <form action="{{ route('admin.destroy', ['id' => $tour->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-button">Delete</button>
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
            {{-- <p><strong>Availability:</strong> {{ $selectedTour->availability }}</p> --}}
            <p><strong>Description:</strong> {{ $selectedTour->description }}</p>
            {{-- <p><strong>Image:</strong> {{ $selectedTour->image }}</p> --}}
            <p><strong>Price:</strong> {{ $selectedTour->price }}</p>


        </div>
    @endif

@endsection

