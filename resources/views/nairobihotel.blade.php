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
                <div class="col-6">
                    <img src="/images/NAIROBI HOTEL1.jpg" alt="Images" class="img-fluid">
                </div>
                    <div class="col-lg">
                    <h1>Best Restaraunts in Nairobi</h1>
                    <p>
                        Here is a list of the Best Swahili Restaurants in Nairobi. Swahili cuisine has become one of the world’s finest.
                         It is a fusion cuisine, with flavours from Africa, Asia, India, Arabia, and Portugal blended.
                         Swahili cuisine is the most popular in East Africa because it uses a diverse range of spices to enhance flavour.
                    </p>
                    <p>
                        Most people associate Swahili dishes with Kenya’s coastal region. You don’t have to be in Mombasa or Malindi to enjoy these delectable dishes. 
                        Nairobi now has some of Kenya’s best Swahili restaurants. Here is a list of the best Swahili Restaurants in Nairobi
                    </p>                   
                </div>
                
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>
                        List Of Best Swahili Restaurants In Nairobi
                    </h1>
                            1. Al-Yusra Restaurant                  
                    <p>
                        Al-Yusra Restaurant, located in the heart of Nairobi’s CBD, is a halal restaurant serving authentic Swahili cuisine.
                         Al-Yusra Restaurant is a family-friendly establishment that serves a delectable menu to all of its visitors. 
                        Al-Yusra Restaurant offers vegetarian options on its menus in addition to its unique Swahili delicacies. 
                        The restaurants make certain that all of their guests’ needs are met at a reasonable price.

                        Location: Koinange St, Nairobi
                        Phone: 0792 000 090
                        Opening Hours: Mon-Sun (6 am-11 pm)
                    </p>                    
                </div>
                <div class="col-6">
                    <img src="/images/Al-Yusra-Restaurant.jpg" alt="Images" class="img-fluid">
                </div>
            </div>
        </div><br><br>

        <div class="container">
            <div class="row">  
             <div class="col-6">
                <img src="/images/Malindi-Dishes.jpg" alt="Images" class="img-fluid">
            </div>

                <div class="col-6">
                            2. Malindi Dishes Restaurant
                        
                    <p>
                        Malindi Dishes is another restaurant that serves the best Swahili cuisine. Malindi Dishes Restaurant, located off Luthuli Avenue on Gaberone Road, serves regional, coastal, Swahili, and global oriental cuisines. 
                        The dishes are prepared by experienced chefs using locally sourced fresh organic ingredients and the finest herbs and spices. After a long day, you can stop by for some tasty Swahili dishes.

                        Location: Gaborone Road, Nairobi
                        Phone: 0722 292525
                        Opening Hours: Mon-Sat (6 am-10 pm), Sun (closed)
                    </p>                    
                </div>
            </div>
        </div><br><br>

        <div class="container">
            <div class="row">
                <div class="col-6">
                            3. Habesha Ethiopian Restaurant
                        
                    <p>
                        Habesha Ethiopian Restaurant is located on Argwings Kodhek Road, Hurlingham. The restaurant is known for its authentic Ethiopian cuisine, warm hospitality, and vibrant atmosphere. It is a favourite spot for locals and tourists looking for a unique dining experience. The menu at Habesha Ethiopian Restaurant offers a wide variety of dishes, including vegetarian and non-vegetarian options. Some of the popular dishes include Doro Wat, which is a spicy chicken stew made with berbere spice and served with injera, and Kitfo, which is a traditional Ethiopian dish made with minced raw beef mixed with spices and served with injera.

                        The restaurant also serves a range of vegetarian dishes such as Shiro, a lentil stew, and Gomen, a dish made with collard greens. In addition to the food, Habesha Ethiopian Restaurant also offers traditional Ethiopian coffee, which is brewed in a traditional clay pot and served with popcorn. The restaurant has a cosy and welcoming atmosphere, with traditional Ethiopian decor and seating arrangements.
                        
                        Opening Hours: Mon-Sun (9 am-12 am)
                        
                        Contact: +254 733 730 469
                    </p>                    
                </div>
                <div class="col-6">
                    <img src="/images/ethiopianfood.jpg" alt="Images" class="img-fluid">
                </div>
            </div>
        </div><br><br>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="/images/Zen-Garden.jpg" alt="Images" class="img-fluid">
                </div>
                <div class="col-6">
                            4. Zen Garden    
                        
                    <p>
                        If you are looking to eat some Asian food in Nairobi, head over to Zen Garden. It is one of the most highly-rated Chinese restaurants in Nairobi. You’ll find two other restaurants, Bamboo and Jade. Jade is all about breakfast. Find your bake and pastries here along with a cup of your favourite coffee. The cake menu includes pina colada, red velvet, chocolate torte and zen signature cake which is a vanilla sponge with vanilla cream.


                        Location: Lower Kabete Road, Nairobi
                        Phone: +254 714 744 231
                        Opening Hours: Mon-Sun (12 pm-2.30 pm), (6 pm-10 pm)
                    </p>                    
                </div>
                
            </div>
        </div><br><br>

        <div class="container">
            <div class="row">
                <div class="col-6">
                            5. Chekafe Restaurant

                        
                    <p>
                        If Chekafe is a simple, laid-back Japanese restaurant in a big garden with a simple menu that’s dedicated to quality Japanese cuisine and incredible coffees. Chekafe is owned by a Japanese chef who has years of experience at sushi restaurants in Japan and spent nearly ten years perfecting his taste in Nairobi. Chekafe is unquestionably Nairobi’s best ramen restaurant, with homemade noodles and dumpling skin as well as impressive sushi. Cheka Pork Ramen is their most popular dish.

                        Location: Kauria Cl, Lavington Nairobi
                        Phone: 0711 336 688
                        Opening Hours: Mon-Sun (10 am-7 pm)
                    </p>                    
                </div>
                <div class="col-6">
                    <img src="/images/restaurant.jpg" alt="Images" class="img-fluid">
                </div>
            </div>
        </div>   <br><br>
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
