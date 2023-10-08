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
                <h1>NGUUNI PARK</h1>
            </div>
        </div>
    </div><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>
                    PLAN YOUR TRIP TO NGUUNI PARK
                </h1>
            <img src="/images/flying-safari.jpg" alt="Images" class="img-fluid">
    
            </div>
            <div class="col-4">
             <h1>Nguuni Park</h1><br><br>
         <p>
            Expansive preserve featuring animals such as ostriches & giraffes, with picnics & guides available.
        </p></div>
        </div>
      </div>
        </div><br>

    

       <div class="container">
        <div class="row" style="border: 2px">
            <div class="col-8">
                <div class="container">
                    <div class="row" style="border: 2px">
                        <div class="col-8">
                            <ul>
                                <li>Address: Off Kiembeni Road, Mombasa</li>
                                <li>Hours: 
                                    Thursday	9 am–5 pm<br>
                                    Friday	9 am–5 pm<br>
                                    Saturday	9 am–5 pm<br>
                                    Sunday	9 am–5 pm<br>
                                    Monday	9 am–5 pm<br>
                                    Tuesday	9 am–5 pm<br>
                                    Wednesday	9 am–5 pm
                                </li>
                                <li>Notable animals: Potty, Owen, Cleo, Mzee, Sally, Toto</li>
                                <li>Phone: 0700 337068</li>
                                <li>Opened: 1984</li>
                            </ul>
                        </div>
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
                        Great little nature reserve get really close to the animals also have picnic tables to enjoy the view great day out 😄 and admission is 350 for Kenyans and 800 for none residents
                        children under 10 is 100 so great value
                       </p>                
                </div>          
            </div>
        </div><br>
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
