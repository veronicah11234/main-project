@extends('layouts.app')

@section('content')
    <h1>Tour Details</h1>

    <p><strong>Name:</strong> {{ $tour->name }}</p>
    <p><strong>Price:</strong> {{ $tour->price }}</p>
    <p><strong>Image:</strong> {{ $tour->image }}</p>
    {{-- <p><strong>Availability:</strong> {{ $tour->availability }}</p> --}}
    <a href="{{ route('admin.show_tour', $tour->id) }}">Edit</a> |
    <form action="{{ route('tours.destroy', $tour->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <br>
    <a href="{{ route('tours.index') }}">Back to All Tours</a>
@endsection
