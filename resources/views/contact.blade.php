<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Page</title>
    <style>
        body {
            background-image: url(123.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        
        .contact-icons {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        
        .contact-icons a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
            font-size: 24px;
        }
    </style>
</head>
<body>
  @include ("navbar")

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="navbar-links">
                {{-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="contact-info"> --}}
                    <a href="tel:123456789">123-456-789</a>
                    <a href="mailto:example@example.com">example@example.com</a>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.google.com"><i class="fab fa-google-square"></i></a>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-square"></i></a>
                    <a href="https://www.youtube.com"><i class="fab fa-youtube-square"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram-square"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <h1 class="text-center mt-5">Contact Me</h1>
    <div class="contact-icons">
        <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i> Facebook</a>
        <a href="https://www.google.com"><i class="fab fa-google-square"></i> Google</a>
        <a href="https://www.linkedin.com"><i class="fab fa-linkedin-square"></i> LinkedIn</a>
        <a href="https://www.youtube.com"><i class="fab fa-youtube-square"></i> YouTube</a>
        <a href="https://www.instagram.com"><i class="fab fa-instagram-square"></i> Instagram</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
