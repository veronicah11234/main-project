<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .card-body .col-sm-4 img {
                    height: 350px;
                    width: 400px;
                    transition: transform 0.3s ease;
                }

        .card-body .col-sm-4 img:hover {
          transform: scale(1.1); /* Increase the scale to make the image appear larger on hover */
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
    <div class="card">
        <div class="card-header" style="color:rgb(134, 109, 109);">
            Park gallery
        </div>
        <div class="card-body" style="border-radius:3px ">
            <div class="row">
                <div class="col-sm-3 ">
                    <img src="/images/img6.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img3.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img1.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img2.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
               
        
        
                <div class="col-sm-3 ">
                    <img src="/images/img7.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img9.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img3.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img4.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>

                <div class="col-sm-3 ">
                    <img src="/images/img5.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img6.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img7.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img8.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>


                <div class="col-sm-3 ">
                    <img src="/images/img9.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img10.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img11.jpg" alt="Images" class="img-fluid" style="height: 260px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img12.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>

                <div class="col-sm-3 ">
                    <img src="/images/img13.jpg" alt="Images" class="img-fluid" style="height: 220px;">
                </div><br>
                 <div class="col-sm-3 ">
                    <img src="/images/img14.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img15.jpg" alt="Images" class="img-fluid" style="height: 280px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img2.jpg" alt="Images" class="img-fluid" style="height: 258px;">
                </div><br>

                <div class="col-sm-3 ">
                    <img src="/images/img5.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img7.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img9.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div><br>
                <div class="col-sm-3 ">
                    <img src="/images/img1.jpg" alt="Images" class="img-fluid" style="height: 250px;">
                </div>
                
               
                </div>
            </div>
            </div>
    
        </div>
         
</body>
</html>