<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .image-container img {
            display: block;
            width: 2500px;
            height: 2500px;
            object-fit: cover;
            object-position: center;
        }
              .card-body .col-sm-4 img {
                    height: 350px;
                    width: 400px;
                    transition: transform 0.3s ease;
                }

        .card-body .col-sm-4 img:hover {
          transform: scale(1.1); /* Increase the scale to make the image appear larger on hover */
        }
/* Add this CSS to your stylesheet */
.container {
    max-width: 100%;
    padding: 0;
    margin: 0;
    width: 100%;
}

.image-container {
    position: relative;
    display: block;
}

.image-container img {
    display: block;
    max-width: 100%;
    height: 90%;
    width: 80%;
    object-fit: cover;
    object-position: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    height: 90%;
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
    font-size: 40px;
    text-align: center;
    padding: 10px;
}


    </style>
</head>
<body>
    @include ("navbar")

<div class="container">
    <div class="image-container">
        <img src="/images/masaimara.jpg" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h1>NAROK NATIONAL SAFARIS</h1>
            </div>
        </div>
    </div><br><br><br>

    <p>
      <h1>Travel Packages & Safaris in Narok</h1>
      If you love adventure and want to explore the beauty of nature, then traveling to Narok is a must. Narok is a town in Kenya, located on the road from Nairobi to the Maasai Mara National Reserve. It is a destination that is famous for its wildlife, culture, and landscapes. The town is not only a gateway to the Maasai Mara, but it also offers a variety of travel packages and safaris to explore.
      <br><br>

    </p>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    TWhether you are interested in balloon safaris, game drives, cultural tours, nature walks, or bird watching, Narok has something for everyone. You can experience the thrill of a lifetime by watching the great migration of wildebeests across the plains of Maasai Mara, go camping with the Maasai people, and visit the local villages to learn about their fascinating culture.

                    At PigiaMe, we offer various travel packages and safaris to Narok that cater to various interests and budgets. Our team of experienced travel consultants will help you plan an unforgettable adventure, packed with exciting activities and comfortable accommodations.
                    
                    So, if you're looking for an adventure of a lifetime and want to experience the wonders of Narok, PigiaMe's travel packages and safaris are an excellent choice for you. Book your trip today and get ready for an unforgettable experience!
                    
                    
                </p>
                <div class="col-12">
                    <h1>
                        What to Consider When Searching For Travel Packages & Safaris in Narok
                    </h1>
                   <ul>
                        <li>
                            Price of the travel package or safari
                        </li>
                        <li>Type of accommodations offered</li>
                        <li>The location and activities included in the package or safari</li>
                        <li>  The reputation and experience of the travel company or safari provider</li>
                   </ul>
                    <div class="submit-button">
                        <iframe width="747" height="420" src="https://www.youtube.com/embed/xvmRqfn1w1s" title="VISITING AFRICA 2023 🇰🇪" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

   
            <div class="col-12">
                <h1>Discover the Best Travel Packages & Safaris in Narok with PigiaMe</h1>
                <p>
                    If you are planning a trip to Narok and want to experience the best of the area, PigiaMe is the go-to online platform to help make your dream vacation a reality. Our extensive collection of travel packages and safaris in Narok is tailored to suit any budget or preference, from luxury lodges to budget-friendly tours. </p><br>
                    
                    <p>
                        As a trusted online marketplace in Kenya, PigiaMe offers top-quality travel packages and safaris that guarantee an unforgettable adventure in Narok. Our listings feature detailed information about the various packages and safaris available, as well as photos and reviews from previous travelers. You can easily compare prices and book packages that fit your budget and travel plans, all in one convenient place.
                </p>
                <h3>Discover lake Nakuru National park</h3>

                <footer class="bg-dark text-white py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Contact Information</h4>
                                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:miwamu@gmail.com">miwamu@gmail.com</a></p>
                                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+254790641428">+254 790 641 428</a></p>
                            </div>
                            <div class="col-md-4">
                                <h4>Follow Us</h4>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.google.com"><i class="fab fa-google"></i></a>
                                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4>Address</h4>
                                <p><i class="fas fa-map-marker"></i> 123 Park Street, City</p>
                                <p><i class="fas fa-globe-africa"></i> Kenya, +254</p>
                            </div>
                        </div>
                    </div>
                </footer>
                

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
