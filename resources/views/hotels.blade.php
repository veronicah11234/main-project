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
                <img src="/images/sarova.jpg" alt="Sarova">
                {{-- <img src="/images/logde.jpg" alt="Lodge"> --}}            
            <div class="overlay">
                <div class="text">
                    <h1>Welcome to Our Hotel</h1><br>
                </div>
                <div class="form-group">
                    <label for="check_in_date" style=" color:rgb(245, 245, 17);">Check-in Date:</label>
                    <input type="date" id="check_in_date" name="check_in_date">
                </div><br>
                <div class="form-group">
            <label for="check_out_date"  style=" color:rgb(245, 211, 17);">Check-out Date:</label>
            <input type="date" id="check_out_date" name="check_out_date">
        </div><br>

        <div class="form-group">
            <label for="adults"  style=" color:rgb(245, 245, 17);">Adults:</label>
            <select id="adults" name="adults">
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="children"  style=" color:rgb(245, 245, 17);">Children:</label>
            <select id="children" name="children">
                @for ($i = 0; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
                <div class="submit-button">
                    <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
                </div>
            </div>
        </div><br><br><br>

        <div class="container">
            <div class="row">
                    <div class="col-lg">
                    <h1>Best Restaraunts in Nairobi</h1>
                    <p>
                        Here is a list of the Best Swahili Restaurants in Nairobi. Swahili cuisine has become one of the world’s finest.
                         It is a fusion cuisine, with flavours from Africa, Asia, India, Arabia, and Portugal blended.
                         Swahili cuisine is the most popular in East Africa because it uses a diverse range of spices to enhance flavour.
                    </p>
                    <div class="submit-button">
                        <button type="submit" class="btn btn-success"><a href="/nairobihotel">know more</a></button>
                    </div>
                   
        
                    
                </div>
                <div class="col-6">
                    <img src="/images/NAIROBI HOTEL1.jpg" alt="Images" class="img-fluid">
                </div>
            </div>
        </div><br>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="/images/food5.png" alt="Images" class="img-fluid" style="height:400px; width:450px">
                </div>
                    <div class="col-lg">
                    <h1>Best Restaraunts in Nakuru</h1>
                    <p>
                        Here is a list of the Best restaurants in Nakuru. On average, 3-star hotels in Nakuru cost KES 17,094 per night, and 4-star hotels in Nakuru are KES 11,467 per night.
                         If you're looking for something really special, a 5-star hotel in Nakuru can on average be found for KES 46,273 per night (based on Booking.com prices).
                    </p>
                    <div class="submit-button">
                        <button type="submit" class="btn btn-success"><a href="/nakuruhotels">Know more</a></button>
                    </div>
                   
        
                    
                </div>
            </div>
        </div><br>


        <div class="container" style="display: flex">
            {{-- <div class="actions">
                <a href="#" title="Save to Library">
                    <i class="fas fa-save"></i>
                </a>
                <a href="#" title="Download">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" title="Find Similar Image">
                    <i class="fas fa-search"></i>
                </a>
            </div>     --}}
            <!-- Add the YouTube video here -->
            <div class="youtube-video">
                <div class="actions">
                    <a href="#" title="Save to Library">
                        <i class="fas fa-save"></i>
                    </a>
                    <a href="#" title="Download">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" title="Find Similar Image">
                        <i class="fas fa-search"></i>
                    </a>
                </div>    
                <!-- Replace "YOUR_YOUTUBE_EMBED_CODE" with the actual iframe code you obtained from YouTube -->
                <iframe width="548" height="420"" src="https://www.youtube.com/embed/UynomjInieE" title="Best Hotels In Nakuru - For Families, Couples, Work Trips, Luxury &amp; Budget" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/iZYt95tyEuU" title="Enashipai | Lake Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br><br>
                <iframe  width="540" height="420"   src="https://www.youtube.com/embed/yLFRVfZO7Po" title="The Midland Hotel in Nakuru City, Kenya (Full Hotel Review)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="548" height="420" src="https://www.youtube.com/embed/tHBnQCCKKgQ" title="Top 10 Best Hotels In Naivasha Kenya | Best Hotels To Stay In Naivasha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

   
    <!-- Add your JavaScript scripts here -->
</body>
</html>
