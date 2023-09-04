{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.admin')
    {{-- @extends('layouts.admin') --}}

@section('content')
    <!-- Your admin index content here -->
@endsection

@section('content')
    <h1>ADD PACKAGES</h1>

    <div class="record_list">

        <form action="index" method="POST">
    <input type="hidden" name="_token" value="DcmwaT2NbkOFbEAhqD6SGIAxGCPCCEQDlVon06yx">       
     <div class="form-group col-md-3">
        <label>Country</label>
        <input type="text" name="country" class="form-control" >
    </div>


    <button class="btn btn-primary" type="submit" >Save</button>
    <!-- Edit button redirects to the edit route with car ID -->
</form>


</div>


</body>
</html> 