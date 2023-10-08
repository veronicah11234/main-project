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
                <div class="submit-button">
                    <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
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
                            <img src="/images/mombasa1.jpg"class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Severin Sea LodgeOpens in new window</h5>
                                <p class="card-text">5 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">Offering an outdoor pool, Severin Sea Lodge is located in Mombasa. Free WiFi access is available in this lodge. The accommodation will provide you with air conditioning and a balcony.
                                </p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">10.3</p>
                                        <p style="color:rgb(70, 131, 8)">558 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(230, 25, 25)">KES 23,547</p>
                                    <p class="price" style="color:rgb(88, 129, 33)">per night</p>
                                    <button class="btn btn-success">Check availability</button>
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
                                <h5 class="card-title"> THE IVORY SUITES by ARMAANOpens in new window </h5>
                                <p class="card-text">4 stars Hotel in Nakuru</p>
                                <p class="card-text">Excellent</p>
                                <p class="card-text"> THE IVORY SUITES by ARMAAN offers accommodation in Mombasa near Tusks Monument and Fort Jesus.</p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)" >9.3</p>
                                        <p style="color:rgb(70, 131, 8)">345 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(235, 32, 25)">KES 4,201</p>
                                    <p class="price" style="color:rgb(41, 112, 41)">per night</p>
                                    <div class="submit-button">
                                        <button type="submit" class="btn btn-success"><a href="/cart">Add to cart</a></button>
                                    </div>
                                    <button class="btn btn-success">See more</button>
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
                    <img src="/images/mombasa3.jpg" class="img-fluid rounded-start" alt="..." style="height:350px; width:500px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title"> Beachfront apartment nyali-mombasa</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">
                            Beachfront apartment nyali-mombasa has garden views, free WiFi and free private parking, set in Mombasa, 100 metres from Mombasa Beach.“The location is beautiful: with the high tide towards dawn, the regular sound of the waves reached us well; when we woke up the ocean let us admire the turquoise water from the room and the stay. A treat on the fine sand of Mombasa beach during the day.”
                        </p>                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">345 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(238, 18, 66)">KES 26,067</p>
                            <p class="price" style="color:rgb(68, 141, 46)">per night</p>
                            <button class="btn btn-success">Check availability</button>
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
                    <img src="/images/mombasa4.jpg" class="img-fluid rounded-start" alt="..." style="height:350px; width: 500px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">
                            CityBlue Creekside Hotel & SuitesOpens in new window
                        </h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text"> 
                            Featuring a swimming pool, a fitness centre, and a garden with a waterfall, fountain and fishpond, Creekside Hotel is situated along Tudor Creek in Mombasa.                        </p>
                            <div class="rating">
                                <p style="color:rgb(70, 131, 8)">9.3</p>
                                <p style="color:rgb(70, 131, 8)">245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(235, 51, 19)">KES 43,832</p>
                            <p class="price" style="color:rgb(81, 119, 38)">per night</p>
                            <button class="btn btn-success">Check availability</button>
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
                    <img src="/images/mombasa5.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                     <div class="card-description">
                        <h5 class="card-title">Penthouse Five - The Beautiful 3Br En-suite Apt</h5>
                        <p class="card-text">4 stars Hotel in Nakuru</p>
                        <p class="card-text">Very good</p>
                        <p class="card-text">
                            Featuring sea views, Penthouse Five - The Beautiful 3Br En-suite Apt provides accommodation with a patio and a kettle, around 4.7 km from Nyali Cinamex Movie Theatre.                        </p>
                            <div class="rating">
                                <p style="color:rgb(51, 94, 47)">9.3</p>
                                <p style="color:rgb(32, 80, 32)">245 reviews</p>
                            </div>
                    </div>
                        <div class="card-prices">
                            <p class="price">Price from</p>
                            <p class="price" style="color:rgb(236, 20, 12)">KES 10,318</p>
                            <p class="price" style="color:rgb(33, 73, 29)">per night</p>
                            <button class="btn btn-success">Check availability</button>
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
