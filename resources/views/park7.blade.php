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
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                margin: 0;
                padding: 0;
        }
    /* .container {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    } */
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    ul {
      list-style-type: none;
      padding: 0;
    }
    li {
      margin: 10px 0;
    }

    </style>
</head>
<body>
    @include ("navbar")


<div class="container">
    <div class="image-container">
        <img src="/images/greate1.jpg" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h1>Maasai Mara National park</h1>
            </div>
        </div>
    </div><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>
                    PLAN YOUR TRIP TO MASAI MARA
                </h1>
            <img src="/images/flying-safari.jpg" alt="Images" class="img-fluid">
    
            </div>
            <div class="col-4">
             <h1>maasai mara park</h1><br><br>
         <p>
            Masai Mara National Reserve is located in south west Kenya and is a vast scenic expanse of gently rolling African savannah plains measuring 1510 square kilometers in area and bordering the Serengeti National Park in Tanzania to the south. Masai Mara is a unique wildlife conservation haven famous for its spectacular natural diversity of wildlife and is the premier Kenya Safari location in East Africa, offering visitors numerous reasons to visit this animal paradise. Large numbers of Lions, Cheetah, Elephant, Rhino, African Buffalo, Wildebeest, Giraffe, Zebra and many more animals 
            are found in the park in their natural habitat, unconfined and free to roam the vast Kenyan wilderness stretching for miles on end.     </p></div>
        </div>
      </div>
        </div><br>

    

       <div class="container">
        <div class="row" style="border: 2px">
            <div class="col-8">
                <p>
                    It is no surprise that tourists from the world over travel here to experience a Masai Mara Safari tour, more so as the reserve has been voted one of the new Seven Wonders of the World. Regarding the origin of the name, the word 'Masai' comes from the Maasai tribe, nomadic inhabitants of the area and the word 'Mara' is their word for 'spotted', referring to the ubiquitous flat topped acacia trees, shrubs and bushes that dot the landscape across most of the reserve.
                </p>
            </div>
                <div class="col-4">
                    <h1>Choose a date</h1>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group">
                        <label for="adults"  style=" color:rgb(32, 32, 5);">Adults:</label>
                        <select id="adults" name="adults">
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    
                </div>           
        </div><br><br>

        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <table>
                       <p>
                        Masai Mara now also comprises a number of conservancies and group ranches bordering the main reserve and is home to some of the most diverse species of African wildlife and is also the site of the annual Wildebeest migration, 
                        simply known as the 'Great Migration'. Masai Mara National Park is famous for this migration, during which large herds of a million plus wildebeest, zebra and other wild animals including the Big Cats migrate north into the Mara from Serengeti National Park. The migration typically takes place between July to mid September and involves the wildebeest making dangerous crossings through crocodile-infested rivers.
                         The 'Mara', as Masai Mara is also known, is among the best wildlife reserves not just in Kenya but also in Africa and the aim of this website, Masai Mara .Travel, is to offer comprehensive information to guide visitors and tourists in planning their visit or for booking a Safari in Masai Mara, suited to their preference. Travelers are expected to have numerous questions while planning their visit, everything from which is the best month to visit, to which is the better reserve, Serengeti or Masai Mara or even information on how to book a trip to this magnificent reserve. We aim to answer most if not all your questions through this platform.<br>
    
                        In case you require any information, guidance or suggestions regarding a visit or to plan a Kenya Safari to Masai Mara, Africa's premium Game Reserve, do get in touch with us via email. We are also available on Chat or on Skype.
                       </p>                
                </div>          
            </div>
        </div><br>
    </div>
    
     <div class="container">
        <div class="row" style="border: 2px">
            <div class="col-8">
                <h1>Itinerary</h1>
                <h2>
                   THINGS TO DO IN MASAI MARA
                </h2>
                <p style="color:rgb(88, 95, 95)">
                    There are several exciting activities one can enjoy in Masai Mara. The most thrilling of these has to be the Hot Air Balloon safari, taken at the break of dawn and ending with a leisurely 'Champagne Bush Breakfast'. This is a truly unique adventure activity and the Mara provides the perfect backdrop for the amazing balloon excursion. The flight lasts for about an hour as you glide gracefully over the African savannah watching the magnificent wildlife below. 
                    The pilots are highly experienced and the activity boasts of an exceptional safety record. Another popular experience is visiting a traditional tribal Maasai village which allows visitors a fascinating insight into the unique way of life of the famous Maasai, a nomadic warrior tribe found in Kenya and parts of East Africa. There are also nature walks, bush meals and sundowners as some of the other popular things to do in Masai Mara as a tourist visiting this reserve.
                </p><br><br>
    
                <div class="card-body">
                      <div class="row">
                          <div class="col-sm-4 ">
                              <img src="/images/gamedrive .jpg" alt="Images" class="img-fluid" style="height: 250px; width:900px">
                              <h1>Game Drive</h1>
                          </div>
                          
                          <div class="col-sm-4 ">
                            <img src="/images/hot-air.jpg" alt="Images" class="img-fluid" style="height: 250px; width:900px;">
                            <h1>
                             Balloon safaris
                            </h1>
                          </div>
                          <div class="col-sm-4 ">
                              <img src="/images/flying-safari.jpg" alt="Images" class="img-fluid" style="height: 250px; width:900px;">
                              <h1>
                                village visit
                              </h1>
                          </div>                    
                          </div>
                      </div>
                      </div> 
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg">
                <h1 style="color: darkgreen">Ensuite Accommodation Packages</h1>
                <table>
                   <p>
                    Option E1 ($1,776 per person for safari with Safari Van, $2,122 per person for safari with Land Cruiser)
                    - Aug 16, 2023 to Aug 19, 2023 at Fisi Camp Masai Mara, Masai Mara (Outside the Park)
                    - Aug 19, 2023 to Aug 20, 2023 at Eagle Palace Hotel - Superior/ Empire Twin, Lake Nakuru (Outside the Park)
                    - Aug 20, 2023 to Aug 21, 2023 at Naivasha Peppercorn Lodge - Standard Room, Lake Naivasha
                    - Aug 21, 2023 to Aug 23, 2023 at Nyati Safari Camp - Stone Rooms, Amboseli (Outside the Park)
                   </p>
                   <p>
                    Option E2 ($2,028 per person for safari with Safari Van, $2,374 per person for safari with Land Cruiser)
                    - Aug 16, 2023 to Aug 19, 2023 at Oldarpoi Main Camp, Masai Mara (Outside the Park)
                    - Aug 19, 2023 to Aug 20, 2023 at Eagle Palace Hotel - Superior/ Empire Twin, Lake Nakuru (Outside the Park)
                    - Aug 20, 2023 to Aug 21, 2023 at Mwanzo Lodge, Lake Naivasha
                    - Aug 21, 2023 to Aug 23, 2023 at AA Lodge, Amboseli - Lodge Room, Amboseli (Outside the Park)
                   </p>
                   <p>
                    Option E3 ($2,413 per person for safari with Safari Van, $2,759 per person for safari with Land Cruiser)
                    - Aug 16, 2023 to Aug 19, 2023 at Olgatuni Camp - Classic Tent, Masai Mara (Within the Park)
                    - Aug 19, 2023 to Aug 20, 2023 at Ziwa Bush Lodge - Executive Room, Lake Nakuru (Outside the Park)
                    - Aug 20, 2023 to Aug 21, 2023 at Lake Naivasha Crescent Camp, Lake Naivasha
                    - Aug 21, 2023 to Aug 23, 2023 at Amboseli Sopa Lodge, Amboseli (Outside the Park)
    
                   </p>
                
            </div>          
        </div>
    </div><br>
</div>

<div class="container">
    <div class="row" style="border: 2px">
        <div class="col-8">
            <h1>Itinerary</h1>
            <h2>
                Day 1 - Nairobi to Masai Mara
            </h2>
            <p style="color:rgb(88, 95, 95)">
                Your tour starts with pick up at 7:30 AM from your Nairobi hotel or Airport and drive to Masai Mara. This drive will take about 5 to 6.5 hours with a scenic stopover at Great Rift Valley. Arrive in Masai Mara shortly after noon and check into your lodge/camp, have hot lunch and then depart for an afternoon game drive.<br><br>

                After the game drive, we head back to lodge/camp to reach by around 5:30 or 6:00 PM, freshen up and enjoy a freshly prepared Dinner. Overnight at your lodge.<<br><br>
                
                Note: The last 1-hour drive to Masai Mara is on the corrugated and bumpy road and may not be comfortable for clients with back problems. Clients with back problems can consider flying directly to (and out of) Masai Mara.
            </p><br><br>

            <h2>Day 2 & Day 3 - Masai Mara</h2>
            <p style="color:rgb(88, 95, 95)">
                
                Today's itinerary is flexible and you can discuss with your guide on the previous evening and plan for today's schedule.<br><br>

                You can either have a relaxed breakfast and depart for full day game drives around 9:00 AM with packed lunch and return back to lodge late afternoon around 6:00 PM.
                 Or you can depart at 6:00 AM on an early morning game drive (This is the best time to see the animals and a good chance to witness hunt/kill). Later return to accommodation for breakfast and relax for a bit and depart on an afternoon game drive with packed lunch. you will stop at a picnic spot for having packed lunch and later depart on a game drive till the park is closed. Around 6:00 PM return to lodge for dinner and overnight stay.
            </p><br><br>


            <h2>Day 4 - Masai Mara to Lake Nakuru</h2>
            <p style="color:rgb(88, 95, 95)">
                
                After a relaxed breakfast and around 10:00 AM checkout and Depart to Lake Nakuru National Park which is about 6.5 hours drive. Upon reaching Nakuru lodge check in, have dinner and relax for the day.<br><br>

                Note: Morning game drives in Masai Mara can be added on day 4 by paying extra USD 85 PP.
                Note: Depending on your itinerary, location of lodge in Nakuru and plan for the next day(if going to Amboseli for example), 
                we might skip morning game drives in Masai mara this day and proceed to Nakuru directly to reach by around 2:00 PM and do afternoon game drives in Nakuru.
            </p><br><br>

            <h2>Day 5 -  Amboseli</h2>
            <p style="color:rgb(88, 95, 95)">
                
                After breakfast, depart for morning game drives around 7:00 AM and continue till about 10:30 AM. Return back to camp to relax and have 
                lunch and then in the afternoon around 3:00 PM proceed for afternoon game drives for 3 hours and return to camp before 6:30 PM.<br><br>

                Note: Since Amboseli is relatively hot, game drives around noon are not usually recommended but can be arranged if you are interested.
            </p>
            <h1>
                Stay Locations
            </h1>
            <p>
                <ul>
                    <li>Day 1 - Masai Mara (Within the Park) or Masai Mara (Outside the Park)</li>
                    <li>
                        Day 2 - Masai Mara (Within the Park) or Masai Mara (Outside the Park)
                    </li>
                    <li>Day 3 - Masai Mara (Within the Park) or Masai Mara (Outside the Park)</li>
                    <li>
                        Day 4 - Lake Nakuru (Within the Park) or Lake Nakuru (Outside the Park)
                    </li>
                    <li>
                        Day 5 - Amboseli (Within the Park) or Amboseli (Outside the Park)
                    </li>
                </ul>
            </p>
            <h1>Meals</h1>
            <p>
                Day 1 - Lunch & Dinner<br>
                Day 2 - Breakfast, Lunch & Dinner<br>
                Day 3 - Breakfast, Lunch & Dinner<br>
                Day 4 - Breakfast, Lunch & Dinner<br>
                Day 5 - Breakfast, Lunch & Dinner

            </p>
            <h1>Drive Times</h1>
            <p>
                Day 1 - Nairobi to Masai Mara takes about 5.5 to 6 hours (284 km)<br>
                Day 4 - Masai Mara to Lake Nakuru takes about 5 to 5.5 hours (250 km)<br>
                Day 5 - Lake Nakuru to Lake Naivasha takes about 1.5 to 2 hours (67 km)<br>
                Day 8 - Amboseli to Nairobi takes about 4 to 4.5 hours (216 km)<br><br>

                Note: These are estimated drive times. Because of the traffic, location of the accommodations, and several other factors, actual drive times may vary. Driving distances are approximate and do not account for exact places.
            </p>
        </div>
            <div class="col-4"> </div>           
    </div>
</div><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Inclusions</h1>
            <p>
                Park Fees (for Non-Residents).<br>

                Daily game drives while on Safari.<br>

                A professional driver/guide.<br>

                4x4 Land Cruiser or Safari Van.<br>

                All Taxes and VAT.<br>

                Meals as per itinerary.<br>

                Drinking water while on safari (2 litres per person per day).
            </p>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Exclusions</h1>
            <p>
                International flights.<br>

                Airport Transfers (Unless mentioned otherwise).i.<br>

                Additional accommodation before and at the end of the tour (Unless mentioned otherwise).<br>
                
                Tips.<br>

                Personal Items (Souvenirs, Travel Insurance, Visa Fees, etc.).<br>

                Government imposed increase of Taxes and or Park Fees.<br>

                Any activities not mentioned in the itinerary.
            </p>
        </div>
        <div class="col-4"></div> --}}
    </div>
</div>


<footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>Contact Information</h4>
          <p>Email: contact@example.com</p>
          <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="col-lg-4">
          <h4>Follow Us</h4>
          <ul class="list-unstyled">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Address</h4>
          <p>123 Park Street, City</p>
          <p>Country, ZIP Code</p>
        </div>
      </div>
    </div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
