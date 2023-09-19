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

    </style>
</head>
<body>
    @include ("navbar")

<div class="container">
    <div class="image-container">
        <img src="/images/clown-fish.jpg" alt="Images" class="img-fluid">
        <div class="overlay">
            <div class="text">
                <h1>MOMBASA SAFARIS</h1>
            </div>
            <div class="submit-button">
                <button type="submit" class="btn btn-success"><a href="/book">book now</a></button>
            </div>
        </div>
    </div><br>
    <h1>MOMBASA MARINE NATIONAL</h1>

    {{-- <img src="/images/sss.png" alt="Images" class="img-fluid"> --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    Mombasa Marine National Park and Reserve is situated on the Northern shores of Mombasa approximately 15 kilometers north of Mombasa Island off Nyali, Bamburi and Shanzu beaches. The park is an aquatic and scenic
                     destination with great ocean ecosystem created by sea features which makes the park more tranquil. These features include the coral reefs. With their different colors, sizes and shapes, 
                     the coral reefs are very much visible in the park while on diving experiences. 
                    They include the Favia coral, Pavona coral, brain coral, Acropora coral among others. The park is both a marine park and a national reserve. This marine park is approximately 10 kilometers squared and the reserve covers 200 square kilometers.
                </p>
                <div class="col-12">
                    <p>
                        Mombasa Marine National Park is situated in Mombasa, one of the most visited tourist destinations in Kenya. It encloses within it a part of the back reef,
                         lagoon as well as the reef crest habitats of the Bamburi Nyali fringing reef. Both the park and the reserve are usually utilized amongst the marine protected areas. This is one of the most visited marine parks of Kenya. 
                        You can easily spot the coral reefs in the waters here. The coastline of the park is incredibly facilitated with innumerable tourist activities.
                    </p>
                    <div class="submit-button">
                        <iframe width="952" height="559"  src="https://www.youtube.com/embed/tgR9N25g7H8" title="Breathtaking Experience: How We Fed Fish At Mombasa Marine Park" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    </div>

   
            <div class="col-12">
                <h1>Marine Life</h1><br>
                    
                   <h2>
                    Activities in Mombasa Marine National Park
                   </h2>
              <h3>
                Sun Bathing
              </h3>

               <p>
                On the sandy beaches along the shoes of the Indian Ocean, visitors can enjoy the warm sun and the cool breeze of the ocean.               </p>
               <h3>
                Water skiing and windsurfing
               </h3>
               <p>
                It is also the best place for water sports. The park offers wind surfing and water skiing on the calm waters of the Indian Ocean. These activities are done with the assistance of the waves and wind prevailing on the sea.               </p>

                  </div>          
          <h3>
            Snorkeling
          </h3>
          <p>
            Snorkeling in Mombasa Marine National Park involves sailing in the waters of the Indian Ocean in a glass bottom boat to view the aquatic life in the waters of the ocean. You will get a chance to see sea cucumbers, sea horses, urchins, multicolored angel fish, lion fish among other aquatic life.
          </p>
         <h3>
            Boat Riding
         </h3>
          <p>
            Boat rides in Mombasa Marine National Park offers the most magnificent endless views of the blue waters of the ocean at its calm. You will also get a chance to take the most amazing and memorable pictures.          </p>
            <h3>
                DivingScuba
            </h3>
        <p>
            DivingScuba diving here is an all year round activity, mainly because of the calm protected conditions of the inside lagoon. Water temperatures are at an amazing 25-31°C/77-87.8°F so no need for wet suits!! The fact that it is within shallow waters allows for spectacular underwater life with breathtaking colors of the marine life. Open to all level of divers, night dives can also be arranged
        </p>
          <h2>
            Park Entry fees for Mombasa Marine National Park
          </h2>
          <p>
            Kenyan citizens, Adults are required to pay KSH 100 and Children KSH 100.  East African residents , Adults pay KSH 100 while the children pay the same price. For the non residents Adults USD 15 is required at the entrance while non-resident Child will be required to pay USD 10. These prices may change at any time, it is therefore advisable to first check with your tour organizer for the latest park entrance fees.
          </p>

          <div class="card-body">
            <div class="row">
                <div class="col-sm-4 ">
                    <img src="/images/Coral Gardens.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
                
                <div class="col-sm-4 ">
                  <img src="/images/Fishers.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
                <div class="col-sm-4 ">
                    <img src="/images/Reef 2.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
               
        
        
                <div class="col-sm-4 ">
                    <img src="/images/Seagrass_Star.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
                <div class="col-sm-4 ">
                    <img src="/images/MombasaTown.jpg" alt="Images" class="img-fluid" style="height: 350px; width:400px">
                </div><br/>
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
          <p>123 Park Street, City</p>
          <p>Kenya, +254</p>
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
