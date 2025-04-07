<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>Classmate</title>
    <link rel="stylesheet"
        href="home.css">
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
</head>
<style>
    body {
        top: 0;
        left: 0;
        max-height: 100px;
        font-family: "Nunito", sans-serif;
    }

    h2 {
        margin: 29px 0;
        font-weight: bold;
        font-family: "Nunito", sans-serif;
    }
    .container2{
        padding: 40px;
        height: 28vh;
        box-shadow: 0px 0px 7px #919191;
        border: 1px solid #c7c7c7;
        border-radius: 15px;
        max-width: 96%;
        margin: 31px;
    }
    .heading{
        font-weight: bold;
        line-height: 42px;
        color: #001b69;
    }
    #btn{
        display: block;
        width: 100%;
        border: none;
        margin-top: 28px;
        color: white;
        padding: 15px;
        letter-spacing: 1px;
        border-radius: 30px;
        background: #001b69;
        font-weight: bold;
    }
</style>

<body onload="check()">
    <?php require "partials/_nav.php"; ?>
    <div class="container1 d-flex">
        <img src="Pictures/p1.jpg"
            alt=""
            srcset=""
            style=" height: 126px; margin: 40px;">
    </div>

    
        <h2 class="font-bold px-4">15% discount To users on Ameya games website</h2>
        <p class="px-4 font-bold fs-5">Solving puzzles make us smarter. Beautiful design makes life better. Having spent nearly a decade as a
            teacher, game designer and developer, I saw an opportunity to bring a modern aesthetic to a classic hobby
            many of us have enjoyed since we were young. At Ameya Games, we make innovative and beautiful puzzles and
            games that are not only fun to play but also are a treat to the eyes. I started Ameya Games to put together
            play, creativity and quality to make some really beautiful and delightful games and puzzles. With each
            product you buy, my hope is to inspire you to think creatively, to relax and unwind and, most importantly,
            build better bonds with your friends and family.</p>


        <div class="container2">
                <h4 class="heading">15% discount To users on Ameya games website</h4>
                <h4 class="heading">Code: CLASSMATE15</h4>
                <a href="https://www.ameyagames.com/" target="_blank" style="text-decoration: none;"><button id="btn">Avail This Deal</button></a>
        </div> 
    <?php include "partials/_footer.php"; ?>
    <div class="container1"
        style="padding: 0;height: 30px;width: 100%;max-width: 100%;">
        <p class="text-center text-dark fs-6 my-2">Copyright © 2022 ITC Ltd. All rights reserved.</p>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>