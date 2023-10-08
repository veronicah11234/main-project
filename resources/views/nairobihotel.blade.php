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
                <img src="/images/clown.jpg" alt="Sarova">
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
                            <img src="/images/clown.jpg"class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Crowne Plaza Nairobi Airport, an IHG Hotel </h5>
                                <p class="card-text">5 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">Featuring free WiFi, a spa centre and a year-round outdoor pool, Crowne Plaza Nairobi Airport offers accommodation in Nairobi. 
                                    The hotel has a sauna and fitness centre, and guests can enjoy a meal at the restaurant or a drink at the bar. Free private parking is available on site.</p>
                                    <p>
                                        Most people associate Swahili dishes with Kenya’s coastal region. You don’t have to be in Mombasa or Malindi to enjoy these delectable dishes. 
                                        Nairobi now has some of Kenya’s best Swahili restaurants. Here is a list of the best Swahili Restaurants in Nairobi
                                    </p>  
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">10.3</p>
                                        <p style="color:rgb(70, 131, 8)">545 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(70, 131, 8)">KES 50,134</p>
                                    <p class="price" style="color:rgb(241, 30, 23)">per night</p>
                                    <div class="submit-button">
                                        <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                                    </div>
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
                            <img src="/images/seren.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title"> Emara Ole-Sereni-Nairobi Park View </h5>
                                <p class="card-text">5 stars Hotel in Nakuru</p>
                                <p class="card-text">Excellent</p>
                                <p class="card-text"> Featuring a restaurant, bar and views of city, Emara Ole-Sereni-Nairobi Park View is located in Nairobi, 6.1 km from Kenyatta International Conference Centre. Featuring a shared lounge, the 5-star hotel has air-conditioned rooms with free WiFi, each with a private bathroom.
                                     The accommodation provides room service, a 24-hour front desk and currency exchange for guests.
                                </p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)" >9.3</p>
                                        <p style="color:rgb(70, 131, 8)">345 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(70, 131, 8)">KES 45,530</p>
                                    <p class="price" style="color:rgb(230, 77, 17)">per night</p>
                                    <div class="submit-button">
                                        <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                                    </div>
                                </div>
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
                    <img src="/images/blu.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title"> Radisson Blu Hotel & Residence Nairobi Arboretum</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">
                            Radisson Blu Hotel & Residence Nairobi Arboretum offers accommodation with each room having a private balcony access, 
                            where guests can enjoy views of the pool or the Arboretum Flora. Each unit has a flat screen TV with cable channels. The rooms are complete with a private bathroom with a rain shower. The 5-star hotel provides bathroom amenities. Turndown service are also available at the hotel.</p>
                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">345 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(70, 131, 8)">KES 35,530</p>
                            <p class="price" style="color:#ec140c">per night</p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                            </div>
                        </div>
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
                    <img src="/images/move.jpg" class="img-fluid rounded-start" alt="..." style="height:450px; width: 400px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">Mövenpick Hotel & Residences Nairobi</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text"> Boasting an outdoor swimming pool and a fitness centre, Mövenpick Hotel & Residences Nairobi is situated in Westlands, Nairobi. Westgate Shopping Mall is 1.7 km from the property while
                             The National Museum of Kenya is within an 8-minute drive. Accessible parking is available within the property.</p>
                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(70, 131, 8)">KES 30,530</p>
                            <p class="price" style="color:rgb(231, 24, 9)">per night</p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                            </div>
                        </div>
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
                    <img src="/images/con.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">The Concord Hotel & Suites </h5>
                        <p class="card-text">3 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">Featuring free WiFi, an outdoor pool and a terrace, The Concord Hotel & Suites offers five-star accommodation in Nairobi, 5 km from Nairobi National Museum. 
                            The hotel features a spa, sauna and fitness centre, and free private parking is available on site.</p>
                            <div class="rating">
                                <p>9.3</p>
                                <p>245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price">KES 55,530</p>
                            <p class="price">per night</p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                            </div>
                        </div>
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
                    <img src="/images/rosa.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">Villa Rosa Kempinski</h5>
                        <p class="card-text">5 stars Hotel in Nakuru</p>
                        <p class="card-text">Excellent</p>
                        <p class="card-text">Just 10 minutes’ drive from Nairobi’s CBD, Villa Rosa Kempinski offers guests a 24-hour front desk, a spa and a fitness centre. Free private parking is available.

                            The spacious rooms are elegantly furnished and offer city views. They are equipped with a minibar, desk and flat-screen TV. Some of the rooms have balconies.</p>
                            <div class="rating">
                                <p>40.3</p>
                                <p>545 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price">KES 40,530</p>
                            <p class="price">per night</p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                            </div>
                        </div>
                      <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div><br><br><br><br>
                <!-- Replace "YOUR_YOUTUBE_EMBED_CODE" with the actual iframe code you obtained from YouTube -->
                <iframe width="548" height="420"" src="https://www.youtube.com/embed/UynomjInieE" title="Best Hotels In Nakuru - For Families, Couples, Work Trips, Luxury &amp; Budget" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/iZYt95tyEuU" title="Enashipai | Lake Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br><br>
                {{-- <iframe  width="540" height="420"   src="https://www.youtube.com/embed/yLFRVfZO7Po" title="The Midland Hotel in Nakuru City, Kenya (Full Hotel Review)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/tHBnQCCKKgQ" title="Top 10 Best Hotels In Naivasha Kenya | Best Hotels To Stay In Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            </div>
        </div>

   
    <!-- Add your JavaScript scripts here -->
</body>
</html>
