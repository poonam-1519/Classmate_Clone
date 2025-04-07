<?php
session_start();
$loggedin = true;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit; 
}
echo '

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    body{
      font-family: "Nunito", sans-serif;
    }
    .box{
          
          margin: 10px;
          box-shadow: 0px 0px 6px #b9b9b9;
          padding: 0;
          width: 48%;
          border-radius: 24px;
    }
    .inner{
          cursor: pointer;
          height: 85px;
          align-items: center;
          justify-content: center;
          width: 85px;
          background-color: #d8e4f8;
          border-radius: 65px;
          display: flex;
          margin: auto;
    }
    .inner img{
      height: 30px;
      width: 30px;
    }
  </style>
  <body>';
 require "partials/_nav.php"; 
echo '
 <div class="container" style="display: flex; justify-content: center;">
  <div class="insider" style="
      width: 119px;
      border-radius: 120px;
      padding: 12px;
      border: 1px solid;
      height: 123px;
      margin: 30px 0px 16px 0px;">
    <p style="    
      font-size: 4rem;
      text-align: center;
      background: #d9e4f9;
      border-radius: 88px;">';
    
      $letter = $_SESSION['username'];
      echo  strtoupper($letter[0]);
    
    echo '</p>
  </div>
</div>
<h2 class="text-center">Welcome back!</h2>
<h4 class="text-center" style="font-weight: bolder;">
';
 echo $_SESSION['username']; echo '</h4>

<div class="container d-flex" 
style="    
      height: 44vh;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 98%;
      margin: auto;
      padding-bottom: 42px;">
  <div class="box d-flex">
    <div class="inner">
      <img src="Pictures/accountsettings.png" alt="">
    </div>
  </div>
  <div class="box d-flex">
    <div class="inner">
      <img src="Pictures/orderHistory.png" alt="">
    </div>
  </div>
  <div class="box d-flex">
    <div class="inner">
      <img src="Pictures/notification.png" alt="">
    </div>
  </div>
  <div class="box d-flex">
    <div class="inner">
      <img src="Pictures/support.png" alt="">
    </div>
  </div>
</div>

';  
include "partials/_footer.php"; 
echo'<div class="container1" style="padding: 0;height: 30px;width: 100%;max-width: 100%;">
  <p class="text-center text-dark fs-6 my-2">Copyright © 2022 ITC Ltd. All rights reserved.</p>
</div>';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>