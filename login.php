<?php
    $showSuccess = false;
    $showError = false;
   

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
   

        $sql = "SELECT * FROM `customer` WHERE `username`='$username'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            while( $row=mysqli_fetch_assoc($result)){
                  if(password_verify($password,$row['password'])){
                    $showSuccess = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: welcome.php");
                  }
                  else{
                    $showError = true;
                   }
            }
        }
        else{
         $showError = true;
        }
      } 
?>

<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    
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
    <strong>Success!</strong>You scuccessfully logged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Invalid input
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
 ?>

 

<div id="formbox" class="container my-5" style="width: 28%;border-radius: 17px;display: flex;flex-direction: column; padding: 50px;
    box-shadow: 0px 0px 48px #0000006e;">
    <h2 class="text-center text-white">Login</h2>
 <form action="login.php" method="post" style="letter-spacing: 1px;">
  <div class="mb-3">
    <label for="username" class="form-label text-white" style="letter-spacing: 1px;">Username</label>
    <input type="text" class="form-control" id="username" name="username"  aria-describedby="emailHelp" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="password" class="form-label text-white" style="letter-spacing: 1px;">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
</div>
  
  <button type="submit" class="btn btn-primary" style="display: block; margin-top: 45px;width: 100%;letter-spacing: 1px;">Login</button>
  <p style="margin-top: 12px;text-align: center;" class="text-white">
      Don't have an account <a href="signup.php" style="color: #81e2ff;letter-spacing: 1px;"><u>Sign Up</u></a>
  </p>
</form>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>