<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
    <style>
        .image-container img {
            display: block;
            width: 8500px;
            height: 8500px;
            object-fit: cover;
            object-position: center;
        }
          h2 {
    font-family: 'Lucida Handwriting', cursive;
    font-size: 24px;
    color: #800080;
  }
  .video-container {
    width: 100vw;
    height: 100vh;
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
    background-color: black; /* Optional background color */
}

/* Style the video to cover the container */
video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* .video-container {
            position: relative;
            width: 100%;
            height: 400px; /* Adjust the height as needed */
        } */

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }

        .overlay h1, .overlay h2 {
            font-family: 'Lucida Handwriting', cursive;
            font-size: 24px;
            color: white;
            text-shadow: 2px 2px 4px rgba(128, 0, 128, 0.5);
        }

        .submit-button {
            margin-top: 20px;
        }
  .italic {
    font-style: italic;
  }

  .fancy {
    text-shadow: 2px 2px 4px rgba(128, 0, 128, 0.5);
  }

    </style>
</head>
<body>
    @include("navbar")



    <div class="container" style="margin-bottom:220px">
        <div style="display:flex;justify-content:center;align-items:center">
        <div class="video-container" style="position: absolute">
            <video autoplay muted loop id="my-downloads">
                <source src="images/buffallov.mp4" type="video/mp4">
            </video>
            <div class="overlay"> 
                <div class="submit-button">
                    <button type="submit" class="btn btn-success"><a href="/book">Book Now</a></button>
                </div>
            </div>
        </div>
        <div style="background-color: black; width:480px; height:200px; position:relative; opacity:0.5; color:white;text-align:center; align-items:center; display:flex;padding:20px; margin-bottom:-40px; border:0.5rem soliid; border-radius:3rem ">
            <div><h1>Miwamu Tourism Management</h1>
                <h3 style="color: violet">PLAN YOUR VISIT</h3>
                <button type="submit" class="btn " style="color: white;background-color:black"><a href="/book">Book Now</a></button>
            </div>
        </div>
        </div>
    </div>

    <div class="content" >
        <a>
            <button id="b1" style="margin: 24px;" type="button" class="btn btn-outline-light">Miwamu Tourism Management</button>
        </a>
        <a>
            <button id="b1" style="margin: 24px;" type="button" class="btn btn-outline-light">PLAN YOUR VISIT</button>
        </a>
        <a href="/book">
            <button id="b1" style="margin: 24px;" type="button" class="btn btn-outline-light">Book Now</button>
        </a>
    </div>
      

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h1>The Best Kenyan Safari Experiment</h1>
    <p>
        Miwamu offers the best Kenyan safari tours and beach holidays. We have vast experience acquired over many years in the tourism industry. We offer tour packages to the most exciting destinations for your Kenyan safari. Enjoy unique itineraries and stay at the most exquisite hotels and lodges on your safari holiday.<br><br>
        Our tour packages are centered around wildlife, relaxation, and culture. We offer budget safaris, mid-range safaris, luxury safaris, and top-luxury safaris. If you only have a few days to experience all that Africa has to offer then Miwamu Travel will organize an unforgettable East Africa safari trip just for you and your family, friends or significant other.<br><br>
        Our East Africa safari packages are crafted by specialists with years of experience on all matters safari. These safari packages are themed around self-drive holidays, honeymoon packages, safari holidays, luxury escapes, cruising and special 'hot-deals' among others. Browse our rich catalog of packages and destinations.<br><br>
        Take a Masai Mara or a Mt. Longonot hike on your Kenyan safari. These and much more Kenyan safaris await you.<br><br><br>
        Karibu Kenya!
    </p>

            </div>
            <div class="col-lg">
                <img src="/images/kenya.png" alt="Images" class="img-fluid">

                
            </div>
        </div>
    </div>

    <div class="container">
        <h1 style="text-align: center">
            People also ask about Kenya
        </h1>
        <h2>
            Travel advice
        </h2>
        <ul>
            <li>
                Avoid carrying too much cash in your pockets.</li>
    
       <li> Never flash your jewelry or valuables in a crowded place.</li>
    
       <li> Do not take a room or a resort in any secluded place.</li>
    
        <li>If possible stay in a hotel that offers a room safe. Place all your valuables and jewelry in the room safe.</li>
    
        <li>Carry with you a first aid box with medicines that may be needed during the trip.</li>
    
        <li>True that people in Kenya are humble and lovely, but try and not roam alone after sunset.</li>
    
        <li>Girls must walk around in groups if going in a place or trail that is secluded.</li>
    
        <li>Do not photograph in the sacred or religious places. If you want to click a picture in the religious site, seek permission regarding the same from the person in charge.
            </li>
        </ul>

        <h2>
            Drinking laws
        </h2>
        <ul>
            <li>
                The legal drinking age in Kenya is 18 years.
            </li>
        </ul><br>
        <h2>
            What you will like there
        </h2><br><br>


        <ol>
            <li>
            Friendly people
        </li>

        <p>
            People in Kenya are very friendly. You’ll notice the humbleness of the people right from the moment you land on the airport. 
            The locals in Kenya will always greet you with a smile. It is hard to find people humble than this elsewhere.
        </p><br>

        <li>
            Weather friendly          
        </li>
        <p>
                Just like the locals, the weather here is just as great. True Kenya lies on the Equator but the temperature is pleasant all round the year. 
                You’ll not need a jacket even in the winter unless you plan to visit the Mount Kenya.

        </p><br>

        <li>
            Good food and Accommodation        
        </li>
        <p>
            The accommodations of Kenya are very people and family friendly. You’ll find several choice of places right from budget friendly stays to the exquisite resorts. Rooms everywhere are designed in a manner that they assure absolute comfort to the travels. The safari tents are located at a distance far away from each other thereby assuring enough privacy. Most of the hotels and stays have great chefs so you’ll always be spoilt for choice.<br>
            Adventure<br>
            
            Camps of Kenya organize a range of adventure tours and activities to keep the visitors engaged. Most of the activities are designed keeping in view the children. These activities will give you the necessary tips relating to survival in the wild. It in a way helps you respect the nature and the environment better.

        </p><br>
    </ol>


    {{-- <h2>
        When is the best time to visit</h2>
        <p>
            Kenya experiences only two kinds of weather throughout the year that is a wet season and a dry season. The best time to visit Kenya would be:
        </p>
         --}}
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#countries').change(function() {
            var countryId = $(this).val();
            if (countryId) {
                $.ajax({
                    url: '/getcounties/' + countryId,
                    type: 'GET',
                    success: function(response) {
                        var options = '<option value="">Select County</option>';
                        response.forEach(function(county) {
                            options += '<option value="' + county.id + '">' + county.name + '</option>';
                        });
                        $('#counties').html(options);
                    }
                });
            } else {
                $('#counties').html('<option value="">Select County</option>');
            }
        });
    });
</script>


<script src="{{asset('js/jquery.js')}}"></script>
<script>

    $(document).ready(function(){
     $('#country').on('change',function(){
         var country_id= $(this).val();
         if (country_id) {
          $.ajax({
             url: "{{url('/getCounties')}}/"+country_id,
           type: "GET",
           dataType: "json",
           success: function(html){
             console.log(html.counties);
             $('select[name="counties_id"]').empty();
             $.each(html.counties,function(i, counties){
               console.log(counties.counties);
                 $('select[name="counties_id"]').append('<option value="'+counties.state_id+'">'+counties.counties_name+'</option>');
             });
           }
          });
         }else {
              $('select[name="counties_id"]').empty();
        }
    });
    //   $('#state').on('change',function(){
    //      var state_id= $(this).val();
    //      if (state_id) {
    //       $.ajax({
    //          url: "{{url('/getCities')}}/"+state_id,
    //        type: "GET",
    //        dataType: "json",
    //        success: function(html){
    //          console.log(html.cities);
    //          $('select[name="park_id"]').empty();
    //          $.each(html.cities,function(i, cities){
    //            console.log(cities.park_id);
    //              $('select[name="park_id"]').append('<option value="'+cities.park_id+'">'+cities.park_name+'</option>');
    //          });
    //        }
    //       });
    //      }else {
    //           $('select[name="park_id"]').empty();
    //     }
    // });
   });
</script>
</script>



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
          <p>123 Park Street, park</p>
          <p>Kenya, +254</p>
        </div>
      </div>
    </div>
  </footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
