<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>
        <img src="images/Free.jpg"alt="">
    </title>

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    
    .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        /* Apply styles to the video */
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Apply text overlay */
        .video-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Show the overlay on hover */
        .video-background:hover .video-overlay {
            opacity: 1;
        }
    
    .navbar {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    
    .navbar-nav {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }
    .header-text {
    text-align: center;
    margin-top: 150px;
    color: white;
}

.company-name {
    font-size: 36px;
    font-weight: bold;
    letter-spacing: 2px;
    text-transform: uppercase;
}
    
    .nav-item {
        margin: 0 10px;
    }
    
    .nav-link {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .nav-link:hover {
        color: #f39c12;
    }
    
    #whatsapp-link {
        color: #25D366;
    }
    
    #whatsapp-link i {
        margin-right: 5px;
    }

        /* Responsive styles for mobile phones */
        @media only screen and (max-width: 767px) {
            .content {
                padding-left: 60px;
                padding-bottom: 100px;
            }
        }

        /* Responsive styles for tablets and small desktops */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .content, .loader {
                padding-left: 100px;
                padding-bottom: 100px;
            }
        }

        /* Responsive styles for medium and large desktops */
        @media only screen and (min-width: 992px) {
            .content, .loader {
                padding-left: 140px;
                padding-bottom: 200px;
            }
        }
         /* Responsive styles for medium and large desktops */
         @media only screen and (min-width: 1499px) {
            .content, .loader {
                padding-left: 240px;
                padding-bottom: 300px;
            }
        }
        
        /*#myVideo {*/
            display: none; /* Hide the video initially */
            opacity: 0; /* Set initial opacity to 0 */
            transition: opacity 1s ease; /* Add transition effect */
            border-radius: 50%; /* Make the logo slightly rounded */
}
        /*}*/
        
        /*#myVideo.show {*/
            opacity: 1; /* Set opacity to 1 when the video is shown */
        /*}*/

        .logo-container {
    width: 50px; /* Adjust the width as needed */
    height: 100px; /* Automatically adjust the height */
    border-radius: 50%; /* Make the logo container slightly rounded */
    border: 2px solid #f39c12; /* Add a border around the logo container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow effect */
    transition: transform 0.3s ease; /* Add a smooth transition effect */
}

/* Apply a scale effect on hover */


/* Style for the logo image */
.logo {
    width: 200px; /* Make the logo image fill the container */
    height: 200px; /* Make the logo image fill the container */
    border-radius: 50%; /* Make the logo slightly rounded */
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <div class="logo-container">
                <a class="navbar-brand js-scroll-trigger" href="/">
                    <img src="/images/Free.jpg" alt="Logo" class="logo">
                        "MIWAMU TOURISM MANAGEMENT"
                </a>
                <!-- Your logo content here -->
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <div class="video-background">
                            <video autoplay muted loop>
                                <source src="your-video-url.mp4" type="video/mp4"> <!-- Replace with your video URL -->
                            </video>
                            <div class="video-overlay">
                                WELCOME TO VIEW THE NATION
                            </div>
                        </div><br>
                    
                        
                        <nav class="navbar">
                            <div class="container">
                                <div class="navbar-collapse">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link js-scroll-trigger" href="/home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-scroll-trigger" href="/about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-scroll-trigger" href="/contact">Contact</a>
                                        </li>
                                        <!-- Social Media Icons -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.tiktok.com"><i class="fab fa-tiktok"></i></a>
                                        </li>
                                        <!-- WhatsApp Chat Link -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://web.whatsapp.com/" target="_blank" id="whatsapp-link">
                                                <i class="fab fa-whatsapp"></i> Chat with us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
    <video autoplay muted loop id="my downloads">
        <source src="images/cheetahv.mp4" type="video/mp4">
    </video>
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
