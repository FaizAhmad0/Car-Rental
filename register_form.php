<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="userAdmin.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <!-- <p class="adReg">Admin register <a href="adminReg.html">here</a></p> -->
            <h2>register now</h2>
            <?php
              if(isset($error)){
                 foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                 };
            };
            ?> 
            <div class="mb-3">
                <input type="name"name="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name">
            </div>
            <div class="mb-3">
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter your email">
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="enter your password">
            </div>
            <div class="mb-3">
                <input name="cpassword" type="password" class="form-control" id="exampleFormControlInput1" placeholder="confirm your password">
            </div>
            <select name="user_type"class="form-control" id="exampleFormControlInput1">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="alert-success">
            <!-- there you have to change -->
            <p class="al">already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>
</body>
</html>