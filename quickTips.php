<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classmate</title>
    <link rel="stylesheet" href="home.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    body{
        top:0;
        left:0;  
        font-family: "Nunito", sans-serif;
    }
    h2{
        font-weight: bold;
        text-align: center;
        color: #3e3d3d;
        margin: 29px 0px;
    }
    .container1,.container2{
        display: flex;
        align-items: center;
        height: 75px;
        border-radius: 17px;
        width: 59%;
        box-shadow: 0px 1px 7px #919191;
        margin: auto;
    }
    .container1,.container2 p{
        /* font-weight: bold; */
        color: #545454;
        text-align: center;
         font-size: 19px;
         margin: auto;  
    } 
    .para{
        /* font-weight: bold; */
        color: #545454;
        text-align: center;
         font-size: 19px;
         margin: auto;  
    }
   .outer{
    width: 60%;
    display: flex;
    height: 358px;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
   }
   .inner{
    height: 152px;
    margin-top: 20px;
    padding: 15px;
    border-radius: 20px;
    display: block;
    width: 49%;
    box-shadow: 0px 1px 7px #919191;
   }
   .image{
    height: 48px;
    display: block;
    margin: auto;
   }
   .row2{
    height: 123px;
    margin: 0;
   }
   .btn{
    margin: auto;
    display: flex;
    width: 19%;
    text-align: center;
    border: none;
    padding: 13px;
    justify-content: center;
    height: 51px;
    color: white;
    border-radius: 41px;
    background: #000e4e;
    font-weight: bold;
    letter-spacing: 1px;
   }
   .btn:hover{  
    color: #ffffff;
    background: #1f2b61; 
   }
   .btn:active{  
    color: #ffffff;
    background: #1f2b61; 
   }
 
  </style>  
  <body onload="check()">  
  <?php require "partials/_nav.php"; ?>
  <h2>Quick tips</h2>
  <div class="container1">
        <img src="Pictures/tips1.jpg" alt="" style="margin-left: 17px;">
        <p  style="margin-left: 17px;">Image size should not exceed 10MB & video size should not exceed 100MB</p>
    </div>
    <div class="container2" style="margin-top: 20px;">
        <img src="Pictures/tips2.jpg" alt="" style="margin-left: 17px;">
        <p>Please avoid uploading images of celebrities, sports stars, TV characters, cartoon characters or images for which you do not own the copyrights.</p>
    </div>
    <div class="outer">
        <div class="inner row1">
            <img class="image" src="Pictures/tips3.jpg" alt="">
            <p class="para">Please ensure to resize the images as necessary to fit the canvas. You can open the canvas & resize the image.</p>
        </div>
        <div class="inner row1">
             <img class="image" src="Pictures/tips4.jpg" alt="">
             <p class="para">Please avoid placing any text too close to the border since there are slight chances that it might get cut.</p>
        </div>
        <div class="inner row2">
             <img class="image" src="Pictures/tips5.jpg" alt="">
             <p class="para">Please Check final preview to see if orientation is correct.</p>
            </div>
            <div class="inner row2">
                <img class="image" src="Pictures/tips6.jpg" alt="">
             <p class="para">Please Check final preview to see if the designs are placed as you wish.</p>
        </div>
    </div>
    <h2 class="mb-0">Terms & Conditions</h2>
    <p class="text-center">Read the terms and conditions before you agree</p>
   <div style="margin: auto;   display: flex;   justify-content: center;">
    <input type="checkbox" onclick="check()"  style="  height: 22px;  margin-top: 0px;  border: 5px solid; width: 39px; " name="" id="check" required>
       <p class="text-center"> checked I agree to these <a style="color: #000e4e;font-size: 13px;" href="terms-conditions.php">Terms & Conditions</a></p>
   </div>
  <a href="customise.php" style="text-decoration: none;"><button class="btn" id="btn" >Customise Now</button></a>

   <script>
    function check() {
        let box = document.querySelector('#check');
        document.getElementById('btn').style.display = "none"; 
    
                if(box.checked == false){
                    document.getElementById('btn').style.display = "none"; 
               }
               if(box.checked == true){
                   document.getElementById('btn').style.display = "block"; 
                }
    }
   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



