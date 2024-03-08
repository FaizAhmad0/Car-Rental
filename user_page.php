<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="user.css">

</head>
<body>
   <div>
      <div>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo"><a href="index.html">GoDrive</a></h1>
                
                <ul class="nav-links">
                    <li><a href="#">AboutUs</a></li>
                    <li><a href="#">ContactUs</a></li>
                </ul>
            </div>
        </nav>
   </div>
   <div class="mainBox">
      <div class="userCompo">
         <div class="content">
         <h5 class="wlcm">Welcome <span><?php echo $_SESSION['user_name'] ?></span></h5>
         </div>
         <div class="d-grid gap-3">
            <button class="btn btn-outline-primary" type="button">My orders</button>
            <button class="btn btn-outline-primary" type="button">Payments</button>
            <button class="btn btn-outline-primary" type="button">Gift cards</button>
            <button class="btn btn-outline-primary" type="button">My coupons</button>
            <button class="btn btn-outline-primary" type="button">My wish-lists</button>
            <a href="logout.php" class="btn btn-outline-danger"><img src="assets/logout.jpg" alt="">  logout</a>

         </div>
      </div>
      <div class="itemDetail">
         <div>
            <h2>You don't have any-order now </h2>
            <a class="btn btn-outline-success" href="index.html">Click here to rent car</a>
         </div>
         <div class="faqs">
            <h4>FAQs</h4>
            <p class="question">What happens when I update my email address (or mobile number)?</p>
            <p class="answer">Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</p>
            <p class="question">When will my Flipkart account be updated with the new email address (or mobile number)?</p>
            <p class="answer">It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</p>
            <p class="question">What happens to my existing Flipkart account when I update my email address (or mobile number)?</p>
            <p class="answer">Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.</p>
         </div>
      </div>
   </div>
</body>
</html>