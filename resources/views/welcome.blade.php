<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>
        {{-- <img src="images/Free.jpg" alt=""> --}}
    </title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .video-container {
    width: 100vw;
    height: 170vh;
    display: flex;
    position: relative;
    margin-top: 640px
    /* justify-content: center; */
    /* align-items: center; */
    /* background-color: black; Optional background color */
} /* background-color: black; Optional background color */

video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

        /* Navbar styles */
        .custom-navbar {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure the navbar appears above the video */
        }

        .custom-navbar .container {
            display: flex;
            justify-content: flex-end;
            align-items: center; /* Vertically center the navigation links */
        }

        .custom-navbar .navbar-nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex; /* Display the navigation links as flex items */
        }

        .custom-navbar .nav-item {
            margin-right: 20px;
        }

        .custom-navbar .nav-link {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .custom-navbar .nav-link:hover {
            color: #f39c12;
        }

        #whatsapp-link {
            color: #25D366;
        }

        #whatsapp-link i {
            margin-right: 5px;
        }
    

    </style>
</head>
<body>
  
    <nav class="custom-navbar" id="mainNav">
        <div class="container">
            <ul class="navbar-nav text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
               
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-bottom:220px">
        <div style="display:flex;justify-content:center;align-items:center">
        <div class="video-container" style="position: absolute">
            <video autoplay muted loop id="my-downloads">
                <source src="images/cheetahv.mp4" type="video/mp4">
            </video>
            {{-- <div class="overlay"> 
                <div class="submit-button">
                    <button type="submit" class="btn btn-success"><a href="/book">Book Now</a></button>
                </div>
            </div> --}}
        </div>
    <script>
        // Wait for the video to load
        document.getElementById('myVideo').addEventListener('loadeddata', function() {
            var loader = document.getElementById('loader');
            var video = document.getElementById('myVideo');
            
            loader.style.opacity = '0'; // Set opacity to 0 to hide the loader
            
            setTimeout(function() {
                loader.style.display = 'none'; // Hide the loader completely
                video.style.display = 'block'; // Show the video
                video.play(); // Start video playback
                video.style.opacity = '1'; // Set opacity to 1 to smoothly transition to the video
            }, 40); // Delay in milliseconds (0.04 seconds)
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
