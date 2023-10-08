
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {{-- @extends('dashboard') <!-- Include the sidebar --> --}}
                @extends('navigation') <!-- Include the sidebar -->


                @extends('layouts.app')

            </div>
            <div class="col-md-9">
                
                <h1 class="mb-4">Add New Tour</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
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
                        <label for="name">Tour Name</label>
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
