<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {{-- @extends('navigation') <!-- Include the sidebar --> --}}


                @extends('layouts.app')

            </div>
            <div class="col-md-9">

                <h1 class="mb-4">Add New Tour</h1>

                @if ($errors->any())
                    <div clas<!-- tours.blade.php -->

                        @extends('layouts.app') {{-- You can extend your app layout if needed --}}
                        
                        @section('content')
                        <div class="container">
                            <h1>Tours</h1>
                        
                            <table>
                                <!-- Iterate through your tours -->
                                @foreach ($tours as $tour)
                                    <tr>
                                        <td>{{ $tour->name }}</td>
                                        <td>{{ $tour->description }}</td>
                                        <td>{{ $tour->price }}</td>
                                        <td>
                                            <a href="{{ route('edit_tour', ['id' => $tour->id]) }}">Edit</a>
                                            <form action="{{ route('delete_tour', ['id' => $tour->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        @endsection
                        s="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('add_tour') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>

                    <input type="hidden" name="stored_data" value="1">
                    <button type="submit" class="btn btn-primary">Add Tour</button>
                </form>
            </div>
        </div>
    </div>
@endsection

</div> 
</div>
</div> 
</body>
</html>