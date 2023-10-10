@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Tour</h2>
        @if (Session::has('success'))
            <div class="success-message">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('admin.update', $tour->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Tour Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $tour->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Tour Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $tour->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Tour Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $tour->price }}" step="0.01" min="0" required>
            </div>

            <!-- Add more form fields for other tour information as needed -->

            <button type="submit" class="btn btn-primary">Update Tour</button>
        </form>
    </div>
@endsection
<tbody>
    @foreach ($tours as $tour)
        <tr>
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