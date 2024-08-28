<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/photo1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./image/photo11.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./image/photo12.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="./image/photo13.jpg" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        
        <p class="py-3">Welcome to <strong>Hotel Booking</strong>, your trusted partner in finding the perfect stay 
            for your travels. Whether you're planning a business trip, a romantic getaway, or a family vacation,
             we are here to ensure you find the ideal accommodation that meets your needs and exceeds your expectations.</p>
              <a href="about.php" class="btn btn-success">check more</a>
   
    </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
             
            <div class="card" >
    <img class="card-img-top" src="./image/photo 14.jpg" alt="Card image" >
    <div class="card-body text-center">
      <h4 class="card-title">Diamond:</h4>
      <p class="card-text">Price: 10000 - 20000 per day</p>
      <p class="card-text"><strong>Deal: 40% Off</strong> </p>
      <a href="book.php" class="btn btn-primary">Book Now</a>
    </div>
  </div>
  

            </div>

            <div class="col-lg-4 col-md-4 col-12">
             
            <div class="card" >
    <img class="card-img-top" src="./image/photo15.jpg" alt="Card image" >
    <div class="card-body text-center">
      <h4 class="card-title">Gold:</h4>
      <p class="card-text">Price 5000 - 8000 per day </p>
      <p class="card-text"><strong>Deal: 30% Off</strong></p>
      <a href="book.php" class="btn btn-primary">Book Now</a>
    </div>
  </div>
  

            </div>

            <div class="col-lg-4 col-md-4 col-12">
             
            <div class="card" >
    <img class="card-img-top" src="./image/photo16.jpg" alt="Card image" >
    <div class="card-body text-center">
      <h4 class="card-title">Platinum:</h4>
      <p class="card-text">Price 2000 - 4000 per day </p>
      <p class="card-text"><strong>Deal: 20% Off</strong></p>
      <a href="book.php" class="btn btn-primary">Book Now</a>
    </div>
  </div>
  

            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo100.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo101.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo102.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo103.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo104.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo105.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo106.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo107.jpg" alt="" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="./image/photo108.jpg" alt="" class="img-fluid pb-4">
            </div>
           
        </div>

    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
       <form action="userinfo.php"method="post">
        <div class="form-group">
            <label >Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter user  name">

        </div>

        <div class="form-group">
            <label >Email id</label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter your email">

        </div>
        <div class="form-group">
            <label >Mobile Number</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your mobile">

        </div>
        <div class="form-group">
            <label >Comments</label>
            <textarea class="form-control" name="comments" placeholder="Enter your comments here"></textarea>


        </div>

       <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">@Hotel Booking . <br>made by @Praveen</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>