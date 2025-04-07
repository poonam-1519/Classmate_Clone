<?php
    $showSuccess = false; 
    $showError = false;
    $exists = false;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Check whether user exists or not
    $existSql = "SELECT * FROM `customer` WHERE `username`='$username'";
    $result = mysqli_query($conn,$existSql);
    $numExitsRows = mysqli_num_rows($result);
    if($numExitsRows>0){
        $exists = true;
    }
   else{

         if($password == $cpassword){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `customer` (`username`, `password`, `Date&Time`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showSuccess = true;
            }
        }
            else{
                $showError = true;
            }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
   body{
        background-image: url('Pictures/ruvim-noga-pazM9TQJ2Ck-unsplash.jpg'); 
        background-position: center;
        background-repeat: no-repeat;
        font-family: 'Nunito', sans-serif;
        background-size: cover;
        height: 100vh;
    }
    #formbox{
       backdrop-filter: blur(28px); 
       border: 1px solid white;
    }
  </style>
  </head>
  <body>
 <?php require "partials/_nav.php"; ?>
 <?php 
 if($showSuccess){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is created now you can login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>  Pasword is not matched.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 if($exists){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Opps!</strong>Username alread exists!😕
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 ?>

 

 <div id="formbox" class="container my-5" style="width: 28%;border-radius: 17px; display: flex; flex-direction: column; padding: 50px;">
    <h2 class="text-center text-white">Sign Up</h2>
 <form action="signup.php" method="post"  style="letter-spacing: 1px;">
  <div class="mb-3">
    <label for="username" class="form-label text-white">Username</label>
    <input type="text" class="form-control" id="username" name="username"  aria-describedby="emailHelp" required minlength="4" maxlength="11" autocomplete="off">
</div>
<div class="mb-3">
    <label for="password" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="password" name="password" required minlength="4" maxlength="24">
</div>
<div class="mb-3">
    <label for="cpassword" class="form-label text-white">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" required minlength="4" maxlength="24">
    <div id="emailHelp" class="form-text text-white">Make sure you entered same password</div>
  </div>
  
  <button type="submit" class="btn btn-primary" style="display: block; margin-top: 45px;width: 100%;">Sign Up</button>
  <p style="margin-top: 12px;text-align: center;" class="text-white">
      Alread have an account <a href="login.php" style="color: #81e2ff; }"><u>Login</u></a>
  </p>
</form>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>