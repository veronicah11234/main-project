<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>Hotel Page</title>
    <style>
        .image-container img {
            display: block;
            width: 2500px;
            height: 2500px;
            object-fit: cover;
            object-position: center;
            color:black;
            /* display: flex */
        },
        body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                margin: 0;
                padding: 0;
        }

.carousel {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.carousel img {
    width: 100%;
    height: auto;
    display: block;
}

@keyframes slide {
    0% {
        left: 0;
    }
    100% {
        left: -200%;
    }
}

.carousel img:nth-child(1) {
    animation: slide 10s infinite;
}

.carousel img:nth-child(2) {
    animation: slide 10s infinite 2.5s;
}

.carousel img:nth-child(3) {
    animation: slide 10s infinite 5s;
}


    </style>
    <!-- Add your CSS stylesheets here -->
</head>
<body>

    @include ("navbar")

    <div class="container" style="display: flex
}" >
        <div class="image-container">
                <img src="/images/malindi1.jpg" alt="Sarova">
                {{-- <img src="/images/logde.jpg" alt="Lodge"> --}}            
            <div class="overlay">
                <div class="text">
                    <h1>Welcome to Our Hotel</h1><br>
                </div>
            </div>
        </div><br><br><br>

              <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="filter-card">
                        <h3>Filter by:</h3>
                        <div class="form-group">
                            <label for="check_in_date">Check-in Date:</label>
                            <input type="date" id="check_in_date" name="check_in_date">
                        </div><br>
                        <div class="form-group">
                    <label for="check_out_date">Check-out Date:</label>
                    <input type="date" id="check_out_date" name="check_out_date">
                </div><br>
        
                <div class="form-group">
                    <label for="adults">Adults:</label>
                    <select id="adults" name="adults">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="children">Children:</label>
                    <select id="children" name="children">
                        @for ($i = 0; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                        <div class="filter-options">
                            <label class="checkbox">
                                <h4>Star rating:</h2>
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
                                <h4>Review score:</h2>
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
                            <img src="/images/narok1.jpg"class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Mara Concord Game Lodge</h5>
                                <p class="card-text">2 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">The Mara Concord Game Lodge is on the banks of River Mara on the eastern edge of the world famous Masai Mara National Reserve, situated in the Lemek Conservancy, 228 km drive from Nairobi. It sits on a 26 acre plot and offers you a tranquil stay amongst tropical gardens and our tastefully furnished chalets offers complete privacy with breath-taking views. the grunts and puffs from hippos and crocodiles idling by the river is a sight to behold.
                                </p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">10.3</p>
                                        <p style="color:rgb(70, 131, 8)">558 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(230, 25, 25)">KES 2,547</p>
                                    <p class="price" style="color:rgb(88, 129, 33)">per night</p>
                                    <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                                </div>
                              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="check_in_date">Check-in Date:</label>
                        <input type="date" id="check_in_date" name="check_in_date">
                    </div><br>
                    <div class="form-group">
                <label for="check_out_date">Check-out Date:</label>
                <input type="date" id="check_out_date" name="check_out_date">
            </div><br>
    
            <div class="form-group">
                <label for="adults">Adults:</label>
                <select id="adults" name="adults">
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
    
            <div class="form-group">
                <label for="children">Children:</label>
                <select id="children" name="children">
                    @for ($i = 0; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
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
                            <img src="/images/mombasa2.jpg" class="img-fluid rounded-start" alt="..." style="height:450px; width:500px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">  Walabi Mara Hotel</h5>
                                <p class="card-text">3stars Hotel in Nakuru</p>
                                <p class="card-text">Excellent</p>
                                <p class="card-text"> "The staff are amazing and Felix, the manager ensured that we had the best experience. The manager and staff were willing to make adjustments according to our needs and requirements."</p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)" >9.3</p>
                                        <p style="color:rgb(70, 131, 8)">345 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(235, 32, 25)">KES 14,201</p>
                                    <p class="price" style="color:rgb(41, 112, 41)">per night</p>
                                    <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>                                </div>
                              <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div><br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="filter-card">
                <h3>Filter by:</h3>
                <div class="form-group">
                    <label for="check_in_date">Check-in Date:</label>
                    <input type="date" id="check_in_date" name="check_in_date">
                </div><br>
                <div class="form-group">
            <label for="check_out_date">Check-out Date:</label>
            <input type="date" id="check_out_date" name="check_out_date">
        </div><br>

        <div class="form-group">
            <label for="adults">Adults:</label>
            <select id="adults" name="adults">
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="children">Children:</label>
            <select id="children" name="children">
                @for ($i = 0; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
                <div class="filter-options">
                    <label class="checkbox">
                        <h4>Review score:</h2>
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
                    <img src="/images/narok4.jpg" class="img-fluid rounded-start" alt="..." style="height:350px; width:500px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">  9. Explore Nature Mara Lodge</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">
                            "The service we received could not be faulted, all staff were extremely accommodating and the buffet meals were very good. We had Masaai entertainment one night with dancing from the staff."
                        </p>      
                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">345 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(238, 18, 66)">KES 6,067</p>
                            <p class="price" style="color:rgb(68, 141, 46)">per night</p>
                            <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>                        </div>
                      <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                    <label for="check_in_date">Check-in Date:</label>
                    <input type="date" id="check_in_date" name="check_in_date">
                </div><br>
                <div class="form-group">
            <label for="check_out_date">Check-out Date:</label>
            <input type="date" id="check_out_date" name="check_out_date">
        </div><br>

        <div class="form-group">
            <label for="adults">Adults:</label>
            <select id="adults" name="adults">
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="children">Children:</label>
            <select id="children" name="children">
                @for ($i = 0; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        </div>
        <div class="col-lg-10" >
            <div class="card mb" style="width: 1000px; height:450px" >
                <div class="row g-0">
                  <div class="col-md">
                    <img src="/images/narok2.jpg" class="img-fluid rounded-start" alt="..." style="height:350px; width: 500px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">
                             Naserian Mara Camp    
                        </h5>
                        <p class="card-text">5 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text"> 
                            "Everyone we met there was so kind and helpful and we really enjoyed talking with them and getting to know them. The rooms were beautiful and comfortable and the grounds were stunning and so well maintained."                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(235, 51, 19)">KES 20,832</p>
                            <p class="price" style="color:rgb(81, 119, 38)">per night</p>
                            <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>                        </div>
                      <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div><br><br>



<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label for="check_in_date">Check-in Date:</label>
                <input type="date" id="check_in_date" name="check_in_date">
            </div><br>
            <div class="form-group">
        <label for="check_out_date">Check-out Date:</label>
        <input type="date" id="check_out_date" name="check_out_date">
    </div><br>

    <div class="form-group">
        <label for="adults">Adults:</label>
        <select id="adults" name="adults">
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="children">Children:</label>
        <select id="children" name="children">
            @for ($i = 0; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>
        </div>
        <div class="col-lg-10" >
            <div class="card mb" style="width: 1000px; height:450px" >
                <div class="row g-0">
                  <div class="col-md">
                    <img src="/images/narok3.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title"> Mara Frontier Hotel</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">
                            "So far the best hotel in Narok town...could do better with a gym, spa and salon. Staff are very friendly, the place has that homey cozy feel....and gives you access to the town as well as the park."                            <div class="rating">
                                <p style="color:rgb(51, 94, 47)">9.3</p>
                                <p style="color:rgb(32, 80, 32)">245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(236, 20, 12)">KES 30,318</p>
                            <p class="price" style="color:rgb(33, 73, 29)">per night</p>
                            <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                        </div>
                      <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div><br><br>
                <!-- Replace "YOUR_YOUTUBE_EMBED_CODE" with the actual iframe code you obtained from YouTube -->
                <iframe width="548" height="420" src="https://www.youtube.com/embed/UynomjInieE" title="Best Hotels In Nakuru - For Families, Couples, Work Trips, Luxury &amp; Budget" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/iZYt95tyEuU" title="Enashipai | Lake Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br><br>
                {{-- <iframe  width="540" height="420"   src="https://www.youtube.com/embed/yLFRVfZO7Po" title="The Midland Hotel in Nakuru City, Kenya (Full Hotel Review)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/tHBnQCCKKgQ" title="Top 10 Best Hotels In Naivasha Kenya | Best Hotels To Stay In Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            </div>
        </div>

   
    <!-- Add your JavaScript scripts here -->
</body>
</html>
