<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: blue;
        }
        .wrapper{
            background-color: #f4f4f4;
        }
        .search{
            width: 50%;
            margin: 0 auto;
        }
    
        .container {
            display: flex;
            height: 100vh;
        }
    
        .sidebar {
            background-color: #f4f4f4;
            width: 200px;
        }
    
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
    
        nav ul li {
            margin-bottom: 10px;
        }
    
        nav ul li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }
    
        nav ul li a:hover {
            background-color: #ddd;
        }
    
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
    
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="search">
            <form action="">
                <input type="text" placeholder="Search">
                <input type="submit" value="submit">
            </form>
        </div>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('welcome') }}">Tourism Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> --}}
    {{-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"> 
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
             <li class="nav-item {{ Request::is('tours') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tours.index') }}">Tours</a> --}}
            {{-- </li>           
             <li class="nav-item {{ Request::is('book') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('book') }}">Bookings</a>
            </li> 
             <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile') }}">Users</a>
            </li> --}}
        {{-- </ul>
    </div>
</nav> - --}}
<nav>
    <ul>
            <li><a href="{{ route('admin.addtour') }}">Add Tour</a></li>
            <li><a href="{{ route('add_booking') }}">Add Booking</a></li>
            <li><a href="{{ route('admin.logout') }}">Logout</a></li>

     </ul> 
 </nav> 

</body>
</html>
