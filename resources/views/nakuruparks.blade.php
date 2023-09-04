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
        body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                margin: 0;
                padding: 0;
        }

    </style>
</head>
<body>
    @include ("navbar")

<div class="container">
    <div class="image-container">
        <img src="/images/nakurucity.png" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h1>NAKURU COUNTY</h1>
            </div>
            <div class="submit-button">
                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
            </div>
        </div>
    </div><br><br><br>


    <div class="container">
        <div class="row">
            <div class="col-sm-2">
               <div class="filter-card">
                    <div class="filter-options">
                        <h4>Price:</h4>
                        <label class="checkbox">
                            <input type="checkbox" name="price" value="0">
                            $0
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="price" value="500">
                            $500+
                        </label>
                    </div>
        
                    <div class="filter-options">
                        <h4>Duration:</h4>
                        <label class="checkbox">
                            <input type="checkbox" name="duration" value="1">
                            Up to 1 hour
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="duration" value="4">
                            1 to 4 hours
                        </label>
                        <!-- Add more options as needed -->
                    </div>
        
                    <div class="filter-options">
                        <h4>Time of Day:</h4>
                        <label class="checkbox">
                            <input type="checkbox" name="time" value="6am—12pm">
                            6am—12pm
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="time" value="5pm—12am">
                            5pm—12am
                        </label>
                        <!-- Add more options as needed -->
                </div>
        
                    <!-- Add more filter options as needed -->
            </div>
            </div>
            <div class="col-lg-10" >
                <div class="card mb" style="width: 1000px; height:450px" >
                    <div class="row g-0">
                      <div class="col-md">
                        <img src="/images/park2.png" class="img-fluid rounded-start" alt="..." style="height:350px; width:450px">
                      </div>
                      <div class="col-md">
                        <div class="card-body">
                         <div class="card-description">
                            <h5 class="card-title">8 Days, 7 Nights Safari – Lake Nakuru, Maasai Mara, Naivasha and Amboseli Park</h5>
                            <p class="card-text">Great experience, 8 days of wonder. Am happy to have spend my charismas on a Safari. All parks are filled with wildlife, big and small, and you are guaranteed to see all of the Big 5 plus more. That’s why prefer multi day safaris.
                                Read more about 8 Days, 7 Nights Safari – Lake Nakuru, Maasai Mara, Naivasha and Amboseli Park - https://www.viator.com/tours/Nairobi/8-Days-7-Nights-Lake-Nakuru-Maasai-Mara-Naivasha-and-Amboseli-National-Park/d5280-60186P27?mcid=56757</p>
                                <div class="rating">
                                    <p style="color:rgb(70, 131, 8)">8.3</p>
                                    <p style="color:rgb(70, 131, 8)">245 reviews</p>
                                </div>
                        </div>
                            <div class="card-prices">
                                <p class="price">Price from</p>
                                <p class="price" style="color:rgb(70, 131, 8)">$ 1,160</p>
                                <p class="price" style="color:rgb(238, 46, 12)">per Adults</p>
                                <div class="submit-button">
                                    <button type="submit" class="btn btn-success"><a href="/park1">Check availability</a></button>
                                </div>
                            </div>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="filter-card">
                    <div class="filter-options">
                        <label class="checkbox">
                            <h4>    Property rating:</h2>
                            <input type="checkbox" name="star" value="5">
                            5 stars
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="star" value="4">
                            4 stars
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="star" value="3">
                            3 stars
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="star" value="2">
                            2 stars
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="star" value="1">
                            1 star
                        </label><br>
                        <label class="checkbox">
                            <h4>Distance from Nakuru center:</h2>
                                <input type="checkbox" name="review" value="9">
                            Superb: 9+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="review" value="8">
                            Very good: 8+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="review" value="7">
                            Good: 7+
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="review" value="6">
                            Pleasant: 6+
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-10" >
                <div class="card mb" style="width: 1000px; height:450px" >
                    <div class="row g-0">
                      <div class="col-md">
                        <img src="/images/park3.png" class="img-fluid rounded-start" alt="..." style="height:350px">
                      </div>
                      <div class="col-md">
                        <div class="card-body">
                         <div class="card-description">
                            <h5 class="card-title">4 Days, 3 Nights Safari – Lake Nakuru and Maasai Mara Safari</h5>
                            <p class="card-text">From lions and wildebeests to flamingos and hippos, our tour offers the ultimate variety of Kenya’s wildlife. In 4 days you will experience vast savannah teeming with the Big Five, lakes filled with colorful birds, plus forests and parks populated by rhinos, leopards, giraffes and more.

                                Read more about 4 Days, 3 Nights Safari – Lake Nakuru and Maasai Mara Safari - https://www.viator.com/tours/Nairobi/4-Days-3-Nights-Lake-Nakuru-to-Maasai-Mara-Safari/d5280-60186P25?mcid=56757</p>
                                <div class="rating">
                                    <p style="color:rgb(70, 131, 8)">9.3</p>
                                    <p style="color:rgb(70, 131, 8)">345 reviews</p>
                                </div>
                        </div>
                            <div class="card-prices">
                                <p class="price">Price from</p>
                                <p class="price" style="color:rgb(70, 131, 8)">$1,574.36</p>
                                <p class="price" style="color:rgb(241, 73, 22)">per person</p>
                                <div class="submit-button">
                                    <button type="submit" class="btn btn-success"><a href="/park2">Check availability</a></button>
                                </div>                           
                             </div>
                          <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
