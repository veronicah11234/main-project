<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
    </style>
    <title>About Us</title>
</head>
<body>
@include ("navbar")

<div class="image-container">
    <img src="/images/nairobi0.png" alt="Images" class="img-fluid">
    <div class="overlay">
        <div class="text">
            <h1>About us</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="/images/nakuru0.png" alt="Images" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>Who we are</h1>
            <p>
                Miwamu Travels is a local registered company based in Nairobi, Kenya. 
                Since 2020, we have specialized in organizing tours and excursions to Kenya. 
                With over 1000+ itineraries offered across Kenya, we cater to different budget and travel preferences.
            </p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Why choose us</h1>
            <p>
                <ol>
                    <li>Value for money  We offer competitive rates while sustaining quality</li>
                    <li>Booking With Ease  We can guarantee an extremely fast turnaround time to enquiries, as well as clear and well-explained options.</li>
                    <li>24/7 Customer Support  We provide assistance from the time you inquire about a safari until the last day.</li>
                    <li>Experienced Staff Our team is highly experienced in the tourism industry, with extensive destination knowledge and exceptional customer service.</li>
                </ol>
            </p>
        </div>
        <div class="col-md-6">
            <img src="/images/narok0.png" alt="Images" class="img-fluid">
        </div>
    </div>
</div><br><br>

{{-- <div class="card ">
    <div class="row">
        <div class="col-md-4">
            <a href="#"><i class="bi bi-tropical-storm"></i></a>
            <h1 style="background-color:orange">OUR VISION</h1>
            <h2>
                To be the most trusted, customer-focused, and successful tours and travel Company providing experience and memories of a lifetime to our esteemed client.<br>
                We aim to be the leading provider of safari packages and related travel services to both local and international markets.
            </h2>
        </div>
        <div class="col-md-4">
            <h1 style="background-color:orange">OUR MISSION</h1>
            <h2>
                To dedicate the highest quality of customer service with a sense of warmth, friendliness, individual pride, and company spirit.
            </h2>
        </div>
        <div class="col-md-4">
            <h1 style="background-color:orange">CORE VALUES</h1>
            <h2>
                Our core values are deeply embedded within our organizational DNA and guide our conduct in everything we do.<br>
                Integrity - Respect - Accountability - Quality Service - Continuous Improvement - Innovation.
            </h2>
        </div>
    </div>
</div><br><br> --}}



<div class="card-body">
    <div class="row">
        <div class="col-sm-4 ">
            <h1 style="background-color:rgb(68, 138, 68)">
                OUR VISION
            </h1>
            <p>
                To be the most trusted, customer-focused, and successful tours and travel Company providing experience and memories of a lifetime to our esteemed client.<br>
                We aim to be the leading provider of safari packages and related travel services to both local and international markets.
            </p>
        </div><br/>
        
        <div class="col-sm-4 ">
            <h1 style="background-color:rgb(68, 138, 68)">
                OUR MISSION
            </h1>
            <p>
                To dedicate the highest quality of customer service with a sense of warmth, friendliness, individual pride, and company spirit.
            </p>
        </div><br/>
        <div class="col-sm-4 ">
            <h1 style="background-color:rgb(68, 138, 68)">
                CORE VALUES
            </h1>
            <p>
                Our core values are deeply embedded within our organizational DNA and guide our conduct in everything we do.<br>
                Integrity - Respect - Accountability - Quality Service - Continuous Improvement - Innovation.
            </p>
        </div><br/>
        </div><br/>

</div>

</div>


<footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>Contact Information</h4>
          <p>Email: miwamu@gmail.com</p>
          <p>Phone: 0790641428</p>
        </div>
        <div class="col-lg-4">
          <h4>Follow Us</h4>
          <div class="social-icons">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a><br>
                    <a href="https://www.google.com"><i class="fab fa-google"></i></a><br>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a><br>
                    <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a><br>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
        </div>
        <div class="col-lg-4">
          <h4>Address</h4>
          <p>123 Park Street, City</p>
          <p>Kenya, +254</p>
        </div>
      </div>
    </div>
  </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
