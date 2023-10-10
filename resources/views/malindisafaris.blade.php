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
              .card-body .col-sm-4 img {
                    height: 350px;
                    width: 400px;
                    transition: transform 0.3s ease;
                }

        .card-body .col-sm-4 img:hover {
          transform: scale(1.1); /* Increase the scale to make the image appear larger on hover */
        }
        h1{
          font: 1em sans-serif;
        }
        .container {
    max-width: 100%;
    padding: 0;
    margin: 0;
    width: 100%;
}

.image-container {
    position: relative;
    display: block;
}

.image-container img {
    display: block;
    max-width: 100%;
    height: auto;
    width: 100%;
    object-fit: cover;
    object-position: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.text {
    color: #fff;
    font-size: 20px;
    text-align: center;
    padding: 10px;
}
    </style>
</head>
<body>
    @include ("navbar")

<div class="container">
    <div class="image-container">
        <img src="/images/clown-fish.jpg" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h1>MALINDI SAFARIS</h1>
            </div>
        </div>
    </div><br>

    {{-- <img src="/images/sss.png" alt="Images" class="img-fluid"> --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="font-family:sans-serif; font-size:25px"> “The Coral Garden” </h1>
                <p>
                    From swimming with zebra fish to windsurfing, this beautiful slice of Kenya’s Indian Ocean coastline is provides the perfect getaway. The park is endowed with magnificent resources such as fringing reefs, 
                    coral gardens in the lagoons, sea grass beds, mangroves, mudflats, marine mammals, turtles and various species of shorebirds. Visitors can also enjoy glass bottom boat rides, snorkelling, camping and beach walks in this veritable paradise.
                </p><br>
                
                    <div class="submit-button">
                      <iframe width="747" height="420" src="https://www.youtube.com/embed/6wTUuu6RBKQ" title="Welcome to Malindi, Kenyan Paradise on the Indian Ocean? 🇰🇪" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    </div><br>
   
            <div class="col-12">
                <h3>Marine Life</h3>
                    
                   <p>
                    Prolific marine life includes crabs, corals, sea urchins, jellyfish, sea stars, and sea cucumbers. Different varieties of coral species comprise of Acropora), Turbinaria and Porites                   </p>
              <h3>
                Climate
              </h3>

               <p>
                Temperatures range from 20-300 c and rainfall from 200mm – 700 mm. Two rain seasons: Long rains – March & April & short rains – Nov/ December               <h3>
                Water skiing and windsurfing
               </h3>
               <p>
                It is also the best place for water sports. The park offers wind surfing and water skiing on the calm waters of the Indian Ocean. These activities are done with the assistance of the waves and wind prevailing on the sea.               </p>

                  </div>          
          <h3>
            What to take with you
          </h3>
          <ul>
            <li>
                Footwear, e.g. sandals or flip flops (to protect your feet from the reef)
            </li>
            <li>T-shirts (to protect your body from sunburn) </li>
            <li>Snorkel, mask, fins, all of which are available for hire</li>
            <li>Camera, hat, sunscreen, insect repellant </li>
            <li>Plenty of drinking of water
            </li>
          </ul>
         <h3>
            Boat Riding
         </h3>
          <p>
            Boat rides in Mombasa Marine National Park offers the most magnificent endless views of the blue waters of the ocean at its calm. You will also get a chance to take the most amazing and memorable pictures.          </p>
         
          <h2>
            Park Entry fees for Mombasa Marine National Park
          </h2>
          <p>
            Kenyan citizens, Adults are required to pay KSH 1000 and Children KSH 500.  East African residents , Adults pay KSH 500 while the children pay the same price. For the non residents Adults USD 15 is required at the entrance while non-resident Child will be required to pay USD 10. These prices may change at any time, it is therefore advisable to first check with your tour organizer for the latest park entrance fees.
          </p>

          <div class="card-body">
            <div class="row">
                <div class="col-sm-4 ">
                    <img src="/images/mali2.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
                
                <div class="col-sm-4 ">
                  <img src="/images/mali3.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
                <div class="col-sm-4 ">
                    <img src="/images/mili1.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
               
        
        
                <div class="col-sm-4 ">
                    <img src="/images/Seagrass_Star.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div>
                <div class="col-sm-4 ">
                  <img src="/images/clown-fish.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                     </div><br/>
               
                </div>
            </div>
     <!-- Add more image boxes as needed -->
              </div>

  </div>
</div>

    



<footer class="bg-dark text-white py-4">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <h4>Contact Information</h4>
              <p><i class="fas fa-envelope"></i> Email: <a href="mailto:miwamu@gmail.com">miwamu@gmail.com</a></p>
              <p><i class="fas fa-phone"></i> Phone: <a href="tel:+254790641428">+254 790 641 428</a></p>
          </div>
          <div class="col-md-4">
              <h4>Follow Us</h4>
              <div class="social-icons">
                  <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.google.com"><i class="fab fa-google"></i></a>
                  <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
                  <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                  <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
          <div class="col-md-4">
              <h4>Address</h4>
              <p><i class="fas fa-map-marker"></i> 123 Park Street, City</p>
              <p><i class="fas fa-globe-africa"></i> Kenya, +254</p>
          </div>
      </div>
  </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
