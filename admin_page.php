<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
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

            </div>
        </nav>
   </div>
   <div class="mainBox">
      <div class="userCompo">
         <div class="content">
         <h5 class="wlcm">Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h5>
         <div class="d-grid gap-1">
            <a href="index.html" class="btn btn-outline-primary">Home</a>
            <button class="btn btn-outline-primary" type="button">PAYMENTS</button>
            <button class="btn btn-outline-primary" type="button">GIFT CARDS</button>
            <button class="btn btn-outline-primary" type="button">MY COUPONS</button>
            <button class="btn btn-outline-primary" type="button">MY WISH LIST</button>
            <a href="logout.php" class="btn btn-outline-danger"><img src="assets/logout.jpg" alt="">  logout</a>

         </div>
         </div>
      </div>
      <div class="itemDetail">
         <div>
            <a class="btn btn-outline-success" href="index.html">Click here to add car</a>
         </div>
         
      </div>
   </div>
</body>
</html>