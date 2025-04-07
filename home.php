<?php 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;}
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
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Nunito", sans-serif;
        backdrop-filter: blur(28px);
        height: 100vh;
    }
    .number{
        font-size: 22px;
        background: #ebebeb;
        color: #585858;
        padding: 0px 9px 0px 9px;
        border-radius: 26px;
    }
    .box2 li{
      margin-bottom: 15px;
    }
    .box2 button{
      margin-top: 57px;
      font-size: 18px;
      background-color: #001b69;
      color: white;
      border: none;
      padding: 12px 27px 12px 27px;
      border-radius: 50px;
    }
    .container img{
      height: 83vh;
    }
    .items {
    position: relative;
    width: 101%;
    overflow-x: hidden;
    overflow-y: hidden;
    white-space: nowrap;
    transition: all 0.2s;
    transform: scale(0.98);
    will-change: transform;
    user-select: none;
    cursor: pointer;
  }
    /* .items1 {
    position: relative;
    width: 101%;
    overflow-x: hidden;
    overflow-y: hidden;
    white-space: nowrap;
    transition: all 0.2s;
    transform: scale(0.98);
    will-change: transform;
    user-select: none;
    cursor: pointer;
  } */
  .items.active {
    background: rgba(255,255,255,0.3);
    cursor: grabbing;
    cursor: -webkit-grabbing;
    transform: scale(1);
  }

  .item {
    display: inline-block;
    border-radius: 32px;
    min-height: 320px;
    min-width: 315px;
    margin: 2em 1em;
  }
  #slide1 {
    color: lighten(#18214a, 25%);
    background-color: lighten(skyblue, 60%);
    grid-area: main;
    padding: 0;
    overflow-x: hidden;
    overflow-y: hidden;
  }
  #slide2 {
    color: lighten(#18214a, 25%);
    background-color: lighten(skyblue, 60%);
    grid-area: main;
    padding: 0;
    overflow-x: hidden;
    overflow-y: hidden;
  }
  .sb{
    margin: 0px 37px;
    padding: 15px 40px;
    border-radius: 45px;
    font-size: 20px;
    border: none;
    background: #001866;
    color: white;
  }
  .sb:hover{
    background: linear-gradient(155deg,#000000,#053c5c);
    color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;
  }
  </style>
  <body> 
  <?php require "partials/_nav.php"; ?>
 <div class="container" style="max-width: 1434px;">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner my-5" style=" overflow: hidden; border-radius: 11px;">
        <div class="carousel-item active">
          <a href="specification.php"><img src="Pictures/1.jpg" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
         <a href="specification.php"><img src="Pictures/2.jpg" class="d-block w-100" alt="..."></a> 
        </div>
        <div class="carousel-item">
         <a href="specification.php"><img src="Pictures/3.jpg" class="d-block w-100" alt="..."></a> 
        </div>
        <div class="carousel-item">
         <a href="specification.php"><img src="Pictures/4.jpg" class="d-block w-100" alt="..."></a> 
        </div>
        <div class="carousel-item">
          <a href="specification.php"><img src="Pictures/5.jpg" class="d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>
 </div>

 <h3 style="text-align: center; font-size: 19px;font-weight: 500;">Relive Your Special Moments</h3>
 <h3 style="text-align: center; font-size: 31px;font-weight: 900; margin-top: 28px; margin-bottom: 40px;">With Personalized Notebooks</h3>

 <div class="box2 box" style="display: flex;width: 82%;margin: auto;">
    <div class="image_part1">
      <img src="Pictures/6.jpg" alt="" srcset="" / style=" width: 100%; margin: auto; ">
    </div>
    <div class="image_part2" style="margin-left: 150px;">
      <h3 class="box2_heading" style="font-size: 19px; margin-top: 80px;font-weight: 900;">Hold on to all your picture-perfect moments with our customized notebooks in just 4 simple steps.</h3>
      <ul style="list-style: none; padding: 41px 0 0 0;">
        <li><span class="number">1</span><span style="font-size: 19px;margin-left: 10px;">Select notebook specs</span></li>
        <li><span class="number">2</span><span style="font-size: 19px;margin-left: 10px;">Upload the images for notebook covers</span></li>
        <li><span class="number">3</span><span style="font-size: 19px;margin-left: 10px;">You can add a video to your notebook if you wish to</span></li>
        <li><span class="number">4</span><span style="font-size: 19px;margin-left: 10px;">Pay for your order and upload the video from your profile section</span></li>
      </ul>
      <a href="specification.php"> <button>Design Now</button></a>
     
    </div>
  </div> 
  
<div class="container" style="display: flex;">
  <div class="part1" style="margin: 58px 0 0 45px;">
    <video autoplay loop >  
      <source src="Pictures/how-to-use-ar.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="part2" style="width: 100%;">
    <h5 class="text-center" style="margin-top: 240px;">Capture Your Stories With</h5>
    <h2 class="text-center " style="font-weight: 900;"> Personalised Video Notebooks</h2>
  </div>
</div>

<div class="container" style="padding: 2px 0;height: 560px;width: 100%;background-color: aliceblue; margin-top: 29px;max-width: 100%;">
  <h5 class="text-center" style="margin-top: 24px;">Choose From Our</h5>
  <h2 class="text-center mb-3" style="font-weight: 900;">Exciting Cover Designs</h2>
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
         <div class="carousel-inner" style="
                height: 342px;
                color: white;
                background: linear-gradient(155deg,#000000,#053c5c);
                backdrop-filter: blur(61px);
                width: 44%;
                box-shadow: 0px 0px 49px #000000;
                border-radius: 29px;
                padding: 18px 0px 0px 13px;
                margin: auto;">
            <div class="carousel-item active"> 
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">Gaming</h2>
                <img src="Pictures/cover1.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
            <div class="carousel-item">     
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">Millennial <br>Lingo</h2> 
                <img src="Pictures/cover2.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
            <div class="carousel-item">     
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">Motivational<br> Quotes</h2> 
                <img src="Pictures/cover3.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
            <div class="carousel-item">     
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">New Year</h2> 
                <img src="Pictures/cover4.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
            <div class="carousel-item">     
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">Professional</h2> 
                <img src="Pictures/cover5.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
            <div class="carousel-item">     
                <h2 style="text-align: center; font-size: 43px; width: 54%; margin: auto;margin-top: 90px; float: left;color: #00e7ff; text-shadow: 0px 0px 11px #00fbff;">Puns</h2> 
                <img src="Pictures/cover6.jpg" style="height: 300px; width: 220px;" alt="...">
            </div>
         </div>
    </div>
        <div class="buttons" style=" display: flex; justify-content: center; margin-top: 30px;height: 58px;">
          <button class="sb" data-bs-target="#carouselExampleRide" data-bs-slide="prev" style="padding: 0 8px; margin-top: 13px; height: 36px;background: #222222;">←</button>
          <a href="specification.php"><button class="sb">Explore</button></a>
          <button class="sb" data-bs-target="#carouselExampleRide" data-bs-slide="next" style="padding: 0 8px; margin-top: 13px; height: 36px;background: #222222;">→</button>
        </div>
  </div>

<div class="container" style="padding: 0;height: 446px;width: 100%;background-color: rgb(255, 255, 255);max-width: 100%;">
  <h5 class="text-center" style="margin-top: 24px;">Exciting Designs From Our</h5>
  <h2 class="text-center" style="font-weight: 900;">Creator Community</h2>
      <div id="slide2">
          <div class="items">
              <div class="item item1" style="background: #e38d4c;">
                  <img src="Pictures/design2.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br>Venugopal</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
              <div class="item item2" style="background: #532c47;">
                  <img src="Pictures/design3.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br> Harendra</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
              <div class="item item3" style="background: #ffd6d6;">
                  <img src="Pictures/design4.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br> Kaushal</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
              <div class="item item4" style="background: #c55254;">
                  <img src="Pictures/design5.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br>Sharad</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
              <div class="item item5" style="background: #d2b26f;">
                  <img src="Pictures/design6.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br>Pankaj</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
              <div class="item item6" style="background: #c9abb1;">
                  <img src="Pictures/design7.jpg" style="height: 200px; width: 150px; display: block; margin: auto;margin-top: -30px;" alt="">
                   <h2 style="text-align: start;margin: 0 40px;font-weight: bolder; color: #4f4f4f;">Creations by <br>Vikash</h2>
                   <a href="specification.php"><img src="Pictures/right_button.png" style="height: 60px;width: 60px; bottom: 0; float: right;" alt=""></a>
                </div>
          </div>
      </div>
</div>  

<div class="container" style="padding: 0;height: 343px;width: 100%;background-color: rgb(255, 255, 255);max-width: 100%;">
  <h5 class="text-center" style="margin-top: 24px;">Overwhelming Words</h5>
  <h2 class="text-center"style="font-weight: 900;">From Our Customers</h2>
  
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img style="height: 60px; width: 60px; border-radius: 50px;display: block; margin: auto;" src="Pictures/customer1.jpg" alt="">
        <p style="width: 550px; display: block; margin: auto; font-size: 19px;text-align: center;">I really didn’t have a clue on how to personalize a notebook for a gifting choice.
          Thanks to classmateshop, it was real quick and got delivered in no time at all!</p>
          <h5 class="text-center mt-3" style="font-weight: bold;" >Rakesh</h5>
          <p class="text-center fs-5">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
          </p>
      </div>
      <div class="carousel-item">
        <img style="height: 60px; width: 60px; border-radius: 50px;display: block; margin: auto;" src="Pictures/customer2.jpg" alt="">
        <p style="width: 550px; display: block; margin: auto; font-size: 19px;text-align: center;">I am a huge fan of Marvel movies and this is where I got a chance to get all my favorite superheroes on notebook covers, They look super cool, and my friends are raving about it. Thanks Classmate!</p>
          <h5 class="text-center mt-3" style="font-weight: bold;" >Kartik</h5>
          <p class="text-center fs-5">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
          </p></div>
      <div class="carousel-item">
        <img style="height: 60px; width: 60px; border-radius: 50px;display: block; margin: auto;" src="Pictures/customer3.jpg" alt="">
        <p style="width: 550px; display: block; margin: auto; font-size: 19px;text-align: center;">Loved the look of my new notebooks! The customization process was so easy and I would highly recommend your website to anyone who likes to design their notebooks.</p>
          <h5 class="text-center mt-3" style="font-weight: bold;" >Vignesh</h5>
          <p class="text-center fs-5">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
            <img src="Pictures/star.png" style="height: 27px;" alt="">
          </p></div>
    </div>
  </div>
</div>  

<div class="container" style="padding: 0;height: 419px;width: 100%; background-image: linear-gradient(180deg, rgb(54 75 179), #18214a);max-width: 100%;color:white ;">
  <h5 class="text-center" style="margin-top: 24px;padding-top: 30px;">Avail exciting offers and the best deals Partners hub</h5>
  <h2 class="text-center" style="margin-bottom: 35px; font-weight: 900;">Classmate Business Partners</h2>
  <div class="partners d-flex" style="height: 60%;width: 95%;margin: auto;">
    <div class="p" style="height: 100%;margin-right: 22px; border-radius: 21px;width: 51%; background-color: #ffffff;">
      <img src="Pictures/p1.jpg" alt="" srcset="" style="height: 100px;margin: 18px 0px 0px 114px;width: 131px;">
      <h5 class="text-dark text-center my-3 mx-4">15% discount To users on Ameya games website</h5>
      <a href="partner1.php" style="text-decoration: none; color: #1f377b;">
        <p style="border-bottom: 2px solid #222f6e; width: 83px; margin: auto;font-size: 12px;">Take me There</p>
      </a>
    </div>
    <div class="p" style="height: 100%;margin-right: 22px;border-radius: 21px;width: 51%; background-color: #ffffff;">
      <img src="Pictures/p2.jpg" alt="" srcset="" style="height: 118px;width: 155px;margin: 9px 0px 0px 118px;">
      <h5 class="text-dark text-center my-2 mx-4">10% Coupon Site Wide for users on website</h5>
      <a href="partner2.php" style="text-decoration: none; color: #1f377b;">
        <p style="border-bottom: 2px solid #222f6e; width: 83px; margin: auto;font-size: 12px;">Take me There</p>
      </a>
    </div>
    <div class="p" style="height: 100%;margin-right: 22px;border-radius: 21px;width: 51%; background-color: #ffffff;">
      <img src="Pictures/p3.jpg" alt="" srcset="" style="height: 112px;margin: 14px 0px 0px 115px;width: 147px;">
      <h5 class="text-dark text-center my-2 mx-4">Flat 20% off on all purchase in OMGS website</h5>
      <a href="partner3.php" style="text-decoration: none; color: #1f377b;">
        <p style="border-bottom: 2px solid #222f6e; width: 83px; margin: auto;font-size: 12px;">Take me There</p>
      </a>
    </div>
    <div class="p" style="height: 100%;border-radius: 21px;width: 51%; background-color: #ffffff;">
      <img src="Pictures/p4.jpg" alt="" srcset="" style="height: 109px; margin: 12px 0px 0px 92px; width: 185px;">
      <h5 class="text-dark text-center my-2 mx-4">15% off on all products in Mortal Soul website</h5>
      <a href="partner4.php" style="text-decoration: none; color: #1f377b;">
        <p style="border-bottom: 2px solid #222f6e; width: 83px; margin: auto;font-size: 12px;">Take me There</p>
      </a>
    </div>
  </div>
</div>

<?php include "partials/_footer.php"; ?>
<div class="container" style="padding: 0;height: 30px;width: 100%;max-width: 100%;">
  <p class="text-center text-dark fs-6 my-2">Copyright © 2022 ITC Ltd. All rights reserved.</p>
</div>  

  <script>
    const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  // console.log(walk);
});
  </script>
    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>



