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
  <p>24/7 Customer Support: Our dedicated customer service team is always available to assist you, from booking to check-out.</p>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
       <form action="userinfo.php"method="post">
        <div class="form-group">
            <label >Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">

        </div>

        <div class="form-group">
            <label >Email id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">

        </div>
        <div class="form-group">
            <label >Mobile Number</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">

        </div>
        <div class="form-group">
            <label >Comments</label>
            <textarea class="form-control" name="comments"></textarea>


        </div>

       <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">@Hotel Booking . <br>made by @Praveen</p>
</footer>
</body>
</html>
