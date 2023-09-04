<!DOCTYPE html>
<html>
<head>
    <title>navbar</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <style>
        .image-container {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 100vh;
        }

        .image-container img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .text {
            color: #fff;
            font-size: 20px;
            text-align: center;
            padding: 10px;
        }

        .submit-button {
            margin-top: 20px;
            text-align: center;
        }

        .submit-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-button button:hover {
            background-color: #45a049;
        }

        .image-container:hover .overlay {
            opacity: 0.8;
        }
        /* Add your custom styles here */
        .dropdown-menu {
            background-color: #343a40;
        }

        .dropdown-item {
            color: #fff;
        }

        .dropdown-item:hover {
            background-color: #495057;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/Free.jpg" alt="Logo" height="80" width="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nakuru
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/nakuruparks">Parks</a></li>
                            <li><a class="dropdown-item" href="/nakurusafaris">Safaris</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="nairobi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nairobi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/nairobiparks">Parks</a></li>
                            <li><a class="dropdown-item" href="/maasaimara">Safaris</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/mombasa" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mombasa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/nakuru">Parks</a></li>
                            <li><a class="dropdown-item" href="/maasaimara">Safaris</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/narok" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Narok
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/nakuru">Parks</a></li>
                            <li><a class="dropdown-item" href="/maasaimara">Safaris</a></li>
                        </ul>
                    </li>

                   
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/malindi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Malindi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/nakuru">Parks</a></li>
                            <li><a class="dropdown-item" href="/maasaimara">Safaris</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hotels
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/nakuruhotels">Nakuru</a></li>
                            <li><a class="dropdown-item" href="/nairobihotel">Nairobi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <!-- Rest of your HTML content -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>
