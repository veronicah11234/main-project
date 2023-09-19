<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('welcome') }}">Tourism Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li> --}}
            <li class="nav-item {{ Request::is('tours') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tours.index') }}">Tours</a>
            </li>           
            <li class="nav-item {{ Request::is('book') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('book') }}">Bookings</a>
            </li>
            {{-- <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile') }}">Users</a>
            </li> --}}
        </ul>
    </div>
</nav>

</body>
</html>
