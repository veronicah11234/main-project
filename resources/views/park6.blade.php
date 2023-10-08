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

    .card-body .col-sm-4 img {
                    height: 350px;
                    width: 500px;
                    transition: transform 0.3s ease;
                }

        .card-body .col-sm-4 img:hover {
          transform: scale(1.1); /* Increase the scale to make the image appear larger on hover */
        }
        h1{
          font: 1em sans-serif;
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
                <h1>NGUUNI PARK</h1>
            </div>
        </div>flying-safari
    </div><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <p>
                    The Mara Naboisho Conservancy in southwest Kenya is a dream for wildlife enthusiasts. As well as cheetah, elephant and giraffe, the area has one of the highest concentrations of lion in the world. 
                </p>
            <img src="/images/amboseeli.jpg" alt="Images" class="img-fluid" style="height: 400px; width:700px;">
    
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
            <div class="row">
                <div class="col-8">
                    <table>
                       <p>
                        Rebuilt and refurbished in 2023, Naboisho Camp offers nine spacious and beautifully furnished tents. And because it’s based in a private conservancy adjacent to the Masai Mara National Reserve, Naboisho is one of the best camps for your safari in the Mara, known for its amazing guiding. A Kenyan safari at Naboisho goes beyond the usual game drives. Explore the Mara on foot, keep your eyes peeled on a night drive or spend an unforgettable night camping in the bush for a real safari adventure. With 266 species of birds to spot, there are also ample birdwatching opportunities.                   </p>                
                </div>          
            </div>
        </div><br>
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
                              <img src="/images/gamedrive .jpg" alt="Images" class="img-fluid">
                              <h1>Game Drive</h1>
                          </div>
                          
                          <div class="col-sm-4 ">
                            <img src="/images/hot-air.jpg" alt="Images" class="img-fluid">
                            <h1>
                             Balloon safaris
                            </h1>
                          </div>
                          <div class="col-sm-4 ">
                              <img src="/images/flying-safari.jpg" alt="Images" class="img-fluid">
                              <h1>
                                village visit
                              </h1>
                          </div>                    
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
