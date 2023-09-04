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

    </style>
</head>
<body>
    @include ("navbar")


<div class="container">
    <div class="image-container">
        <img src="/images/nmj.jpg" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h2>Nairobi National Park</h2>
            </div>
            <div class="submit-button">
                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
            </div>
        </div>
    </div><br><br><br>

    <h2>Overview</h2>

    <p>
        
        Welcome to Kenya’s most accessible yet incongruous safari experience. Set on the city’s southern outskirts, Nairobi National Park (at 117 sq km, one of Africa’s smallest) has abundant wildlife that can, in places, be viewed against a backdrop of city skyscrapers and planes coming in to land – it's 
        one of the only national parks on earth bordering a capital city. Remarkably, the animals seem utterly unperturbed by it all.see in the <a href="gallery">gallery</a>



<br><br>

    </p>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg">
                <p>
                    The park has acquired the nickname ‘Kifaru Ark’, a testament to its success as a rhinoceros (kifaru in Kiswahili) sanctuary. The park is home to the world's densest concentration of black rhinos (more than 50), though even the park's strong antipoaching measures couldn't prevent poachers from killing one of the rhinos in August 2013 and then again in January 2014.
                     They were the first such attacks in six years, and reflect the current sky-high Asian black-market price for rhino horn.
                    </p>                
            </div>
        </div>
        
    </div><br>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg">
                <h2>Attractions</h2>
               <p>
                Lions and hyenas are also commonly sighted within the park; rangers at the entrance usually have updates on lion movements. You’ll need a bit of patience and a lot of luck to spot the park’s resident cheetahs and leopards. Other regularly spotted species include gazelles, warthogs, zebras, giraffes, ostriches and buffaloes.

                The park’s wetland areas sustain approximately 400 bird species, which is more than in the whole of the UK.
               </p>

                
            </div>
        </div>
        
    </div><br>
<div class="card">
    <div class="card-header" style="color:white;">
    </div>
    <div class="card-body">
        <div class="row">
            <h1>
                Nearby Nairobi attractions
            </h1><br><br>
            <div class="col-sm-3 ">
                <h2>
                    Nairobi Safaris Walk
                </h2>
                <p>
                    Just outside the main entrance to Nairobi National Park, off Langata Rd, this safari walk is a sort of zoo-meets-nature-boardwalk, with lots of birds as well as other wildlife, including a pygmy hippo, a bongo, 
                    an albino zebra and a white rhino, as well as primates and big cats. Children in particular love the chance to get closer to the animals than they're likely to be able to do in a national park.
                </p>
            </div><br/>
            
            <div class="col-sm-3 ">
                <h2>
                    Animal orphanage
                </h2>
                <p>
                    Just inside the main gate to Nairobi National Park, this animal orphanage houses formerly wild animals 
                    that have been recovered by park rangers. Although the conditions in which the animals are kept are less than inspiring, the orphanage does protect animals that would have died without human intervention. It also serves as a valuable education centre for locals and schoolchildren who might not otherwise have the chance to interact with wildlife.
                </p>
            </div><br/>
            <div class="col-sm-3 ">
                <h2>
                    Bomas Of Kenya
                </h2>
                <p>
                    The talented resident artists at this cultural centre perform traditional dances and songs taken from the country’s various tribal groups, including Arabic-influenced Swahili taarab music, Kalenjin warrior dances, Embu drumming and Kikuyu circumcision ceremonies. It’s touristy, of course, but still a spectacular afternoon out. 
                    The complex consists of a number of bomas (villages), each constructed in the architectural style of Kenya's major ethnic groups.
                </p>
            </div><br/>
            <div class="col-sm-3 ">
                <h2>
                    Ivory-Burning Site
                </h2>
                <p>
                    This is one the most important landmarks in the annals of conservation: it was here that Kenyan president Daniel arap Moi made a dramatic statement to poachers by setting fire to 11 tonnes of seized ivory in 1989. 
                    The event improved Kenya’s conservation image at a time when East African wildlife was being decimated by relentless poaching, and it's widely credited as playing a role in turning the tide against poaching in Kenya.
                </p>
            </div><br/>

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
