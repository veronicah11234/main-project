@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">List of Existing Tours</h2>
        @if (Session::has('success'))
            <div class="success-message">
                {{Session::get('success')}}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Price</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(is_array($tours ?? '') || is_object($tours ?? ''))
                    @foreach ($tours ?? '' as $tour)
                        <tr>
                            <td>{{ $tour->name }}</td>
                            <td>{{ $tour->description }}</td>
                            <td>{{ $tour->image }}</td>
                            <td>{{ $tour->price }}</td>
                            <td>
                                <a href="{{ route('admin.show', $tour->id) }}">View</a> |
                                <a href="{{ route('admin.edit', $tour->id) }}">Edit</a> |
                                <form action="{{ route('admin.destroy', $tour->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <script>
                        function confirmDelete() {
                            return confirm("Are you sure you want to delete this tour record?");
                        }
                    </script>

                    @if (session()->has('tourFormData'))
                    @php
                        $formData = session('tourFormData');
                    @endphp
                    <!-- Populate form fields with data -->
                    <input type="text" name="name" id="name" class="form-control" value="{{ $formData['name'] }}" required>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $formData['description'] }}</textarea>
                    <!-- Other form fields -->
                    @endif

                @endif
            </tbody>
        </table>
    </div>

    <!-- Show Tour Details -->
    @if(request()->has('name') && request()->has('description'))
    <!-- Populate form fields with data from query parameters -->
    <input type="text" name="name" id="name" class="form-control" value="{{ request('name') }}" required>
    <textarea name="description" id="description" class="form-control" rows="4" required>{{ request('description') }}</textarea>
    <!-- Other form fields -->
@endif


    <!-- Show Newly Added Tour Data -->
    @if(isset($newlyAddedTour))
        <div class="container">
            <h2>Newly Added Tour</h2>
            <p><strong>Name:</strong> {{ $newlyAddedTour->name }}</p>
            <p><strong>Price:</strong> {{ $newlyAddedTour->price }}</p>
            {{-- Add other fields as needed --}}
        </div>
    @endif

@endsection
