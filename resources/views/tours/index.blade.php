<!-- resources/views/tours/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Tours</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>{{ $tour->name }}</td>
                    <td>{{ $tour->price }}</td>
                    <td>{{ $tour->availability }}</td>
                    <td>
                        <a href="{{ route('tours.show', $tour->id) }}">View</a> |
                        <a href="{{ route('tours.edit', $tour->id) }}">Edit</a> |
                        <form action="{{ route('tours.destroy', $tour->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
