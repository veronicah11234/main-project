<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
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
.image-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .image {
      width: 100%;
      height: auto;
    }
    .card {
            margin-right: 370px;
            border: none;
            border-radius: 90px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: row;
            align-items: stretch;
            height: 350px;
            /* width: 450px; */
        }

        .card-description {
            flex: 2;
            padding: 20px;
        }

        .card-prices {
            flex: 1;
            background-color: #f5f5f5;
            padding: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
        }

        .rating {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .price {
            font-size: 14px;
            color: #333;
            margin-top: auto;
        }
        /* .container {
            display: flex;
            justify-content: flex-end; /* Move the filter card to the right */
            /* padding: 20px; Add some padding for spacing */
        } */
        .filter-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            width: 200px; /* Adjust the width as needed */
            margin-left: auto; /* Move the filter card to the end of the left side */
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .checkbox {
            margin: 0;
        }
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
            }
            

    </style>
    <!-- Add your CSS stylesheets here -->
</head>
<body>
    @include ("navbar")

    <div class="container" >
        <div class="image-container">
                <img src="/images/sarova.jpg" alt="Sarova">
                {{-- <img src="/images/logde.jpg" alt="Lodge"> --}}            
            <div class="overlay">
                <div class="text">
                    <h1>Welcome to Our Hotel</h1><br>
                </div>
                
                <div class="submit-button">
                    <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                </div>
            </div>
        </div><br><br>

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
                            <img src="/images/sarova.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Sarova Woodlands Hotel and Spa</h5>
                                <p class="card-text">4 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">Featuring a terrace, Sarova Woodlands Hotel and Spa is situated in Nakuru, 2.9 km from Westside Mall.
                                    The staff were friendly, good services and the hotel was super clean.</p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">8.3</p>
                                        <p style="color:rgb(70, 131, 8)">245 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(70, 131, 8)">KES 20,134</p>
                                    <p class="price" style="color:rgb(241, 29, 14)">per night</p>
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
                            <img src="/images/legacy.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Legacy Hotel and Suites</h5>
                                <p class="card-text">5 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">Located in Nakuru, 13 km from Lake Nakuru National Park, 
                                    Legacy Hotel and Suites provides accommodation with a fitness centre, free private parking, a shared lounge and a restaurant.</p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">9.3</p>
                                        <p style="color:rgb(70, 131, 8)">345 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(70, 131, 8)">KES 25,530</p>
                                    <p class="price" style="color:rgb(236, 26, 19)">per night</p>
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
                    <div class="filter-card">
                        <h3>Filter by:</h3>
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
                            <img src="/images/luna hotel.jpg" class="img-fluid rounded-start" alt="..." style="height:350px">
                          </div>
                          <div class="col-md">
                            <div class="card-body">
                             <div class="card-description">
                                <h5 class="card-title">Luna Hotel</h5>
                                <p class="card-text">4 stars Hotel in Nakuru</p>
                                <p class="card-text">Very good</p>
                                <p class="card-text">Situated in Nakuru, 19 km from Lake Elementaita, Luna hotel features accommodation with an outdoor swimming pool, free private parking, a terrace and a bar.</p>
                                    <div class="rating">
                                        <p style="color:rgb(70, 131, 8)">9.3</p>
                                        <p style="color:rgb(70, 131, 8)">245 reviews</p>
                                    </div>
                            </div>
                                <div class="card-prices">
                                    <p class="price">Price from</p>
                                    <p class="price" style="color:rgb(70, 131, 8)">KES 30,530</p>
                                    <p class="price" style="color:rgb(238, 26, 18)">per night</p>
                                    <button class="btn btn-success">Check availability</button>
                                </div>
                              <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>


          <script>
            var slideIndex = 1;
            showSlide(slideIndex);
    
            function changeSlide(n) {
                showSlide(slideIndex += n);❮ ❯

            }
    
            function showSlide(n) {
                var i;
                var slides = document.getElementsByClassName("slideshow-image");
    
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
        </script>

{{-- 
        <div class="container" style="display: flex">
            <div class="youtube-video">
               <i class="fas fa-search"></i>
                    </a>
                </div>    
                <!-- Replace "YOUR_YOUTUBE_EMBED_CODE" with the actual iframe code you obtained from YouTube -->
                <iframe width="548" height="420"" src="https://www.youtube.com/embed/UynomjInieE" title="Best Hotels In Nakuru - For Families, Couples, Work Trips, Luxury &amp; Budget" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/iZYt95tyEuU" title="Enashipai | Lake Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br><br>
                <iframe  width="540" height="420"   src="https://www.youtube.com/embed/yLFRVfZO7Po" title="The Midland Hotel in Nakuru City, Kenya (Full Hotel Review)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/tHBnQCCKKgQ" title="Top 10 Best Hotels In Naivasha Kenya | Best Hotels To Stay In Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div> --}}

   
    <!-- Add your JavaScript scripts here -->
</body>
</html>
