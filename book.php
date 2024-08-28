<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="jumbotron">
  <h1>Hotel Booking</h1>
  <p>Best Price Guarantee: We strive to offer you the best prices available, with exclusive deals and discounts to help you save on your stay.</p>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Book Now</h2>
        
        <p class="text-center"><strong> <span class="text-danger">Deal: 20% Off</span></strong></p>
        
    </div>
    <div class="w-50 m-auto">
       <form action="customerinfo.php"method="post">
        <div class="form-group">
            <label >Name <span class="text-danger">*</span></label>
            <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter your name">

        </div>

        <div class="form-group">
            <label >Email id <span class="text-danger">*</span></label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter your name">

        </div>
        <div class="form-group">
            <label >Mobile Number <span class="text-danger">*</span></label>
            <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter your mobile">

        </div>
        <div class="form-group">
        <label for="gender">Gender<span class="text-danger">*</span></label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="m">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="f">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="other" name="gender" class="custom-control-input" value="o">
                        <label class="custom-control-label" for="other">Other</label>
                    </div>
                </div>
              </div>


       
        <div class="form-group">
          
           
            <label for="Booking Type">Booking Type <span class="text-danger">*</span></label>
      <select id="inputState" class="form-control" name="bookingtype">
        <option selected>Choose...</option>
        <option value="Diamond">Diamond</option>
        <option value="Gold">Gold</option>
        <option value="Platinum">Platinum</option>
      </select>

        </div>

       <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">@Hotel Booking</p>
</footer>
</body>
</html>
