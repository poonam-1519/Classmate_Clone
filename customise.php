<?php 
  session_start();
?>
<?php 
  $loggedin = false;
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;}
  require "partials/_dbconnect.php"; 
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>Classmate</title>
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
        font-family: "Nunito", sans-serif;
    }

    .boxes {
        height: 247px;
        cursor: pointer;
        padding: 7px;
        width: 33%;
    }

    .boxes:hover {
        background-color: rgba(0, 204, 255, 0.419);
    }

    .boxes img {
        height: 146px;
        width: 118px;
    }

    .boxes p {
        font-weight: bold;
        color: #605d62;
        margin-left: 10px;
    }

    .hidden,
    .hidden1 {
        display: none;
    }

    .price {
        padding: 2px 44px;
        background: #001864;
        border: none;
        margin-top: 3px;
        font-size: 13px;
        color: white;
        border-radius: 4px;
        font-weight: 700;
    }

    .customise {
        height: 100vh;
        border-right: 1px solid #c3c3c3;
        width: 24%;
    }

    .box1 {
        width: 100%;
        border-bottom: 1px solid #c7c7c7;
        height: 93px;
    }

    .box1 p {
        margin: 23px;
        font-size: 16px;
        color: #60656c;
        font-weight: bold;
    }

    .box1 span {
        color: #001b69;
        font-size: 20px;
        font-weight: bold;
    }

    #box1_btn1 {
        width: 160px;
        color: #001b69;
        border: 2px solid #001b69;
        font-weight: bold;
        font-size: 12px;
        margin-top: 24px;
        height: 51px;
        border-radius: 35px;
    }

    #box1_btn1:hover {
        color: white;
        background: #001b69;
    }

    .box2 {
        width: 100%;
        border-bottom: 1px solid #c7c7c7;
        height: 28%;
    }

    .box2 img {
        height: 44px;
        display: block;
        margin: auto;
        margin-top: 20px;
    }

    .box2 p {
        text-align: center;
        color: #172d74;
        margin-top: 14px;
        font-size: 18px;
        font-weight: bold;
    }

    .more {
        background: none;
        border: none;
        margin-left: 5px;
        text-decoration: underline;
        padding-bottom: 9px;
        font-size: 15px;
    }

    .box3 {
        height: 16%;
        width: 100%;
        border-bottom: 1px solid #9b9b9b;
    }

    .box4 {
        height: 7%;
        width: 100%;
        border-bottom: 1px solid #9b9b9b;
    }

    .box4_1,
    .box4_2 {
        cursor: pointer;
        height: 100%;
        text-align: center;
    }

    .box4_1 p,
    .box4_2 p {
        /* background-color: #a5a5a5; */
        height: 100%;
        font-size: 16px;
        color: #11245c;
        padding-top: 18px;
    }

    .box5 {
        height: 29%;
        width: 100%;
    }

    #input1 {
        padding: 0px 24px;
        height: 44px;
        box-shadow: 0px 0px 4px black;
        border: none;
        width: 76%;
        margin: 15px;
    }

    #input2 {
        height: 45px;
        box-shadow: 0px 0px 4px black;
        border: none;
        width: 14%;
        display: inline;
        margin-top: 14px;
    }

    #box5btn {
        display: block;
        width: 90%;
        margin: auto;
        color: #001b69;
        cursor: not-allowed;
        border: 2px solid #001b69;
        font-weight: bold;
        font-size: 16px;
        margin-top: 15px;
        height: 51px;
        border-radius: 35px;
    }

    #box5btn:hover {
        color: white;
        background: #001b69;
    }

    .box6 {
        height: 254px;
        cursor: pointer;
        display: none;
        width: 100%;
    }

    #box6btn {
        display: block;
        width: 90%;
        margin: auto;
        color: #001b69;
        border: 2px solid #001b69;
        font-weight: bold;
        font-size: 16px;
        margin-top: 15px;
        height: 51px;
        border-radius: 35px;
    }

    #box6btn:hover {
        color: white;
        background: #001b69;
    }

    #modalBtn {
        color: white;
        background: #001b69;
        border: none;
        border: 2px solid #001b69;
        font-size: 14px;
        width: 174px;
        height: 55px;
        cursor: not-allowed;
        border-radius: 35px;
    }
    #total{
        color: white;
        font-size: 14px;
    }
    

    .slide {
        height: 100vh;
        width: 75%;
    }

    .carousel-caption h5 {
        letter-spacing: 4px;
    }

    .box {
        /* background-color: #00BCD4; */
        /* background-image: url('Pictures/DesignsPics/88.jpg'); */
        background-position: center;
        background-size: cover;
        cursor: default;
        width: 165px;
        height: 200px;
        height: 340px;
        background-repeat: no-repeat;
        position: relative;
        user-select: none;
        transform: translate(0%, 0%);
    }

    .box-wrapper {
        /* position: absolute; */
        /* transform-origin: top left; */
        overflow: hidden;
        user-select: none;
    }

    .dot {
        height: 18px;
        width: 18px;
        background-color: rgb(85, 173, 193);
        position: absolute;
        /* border-radius: 100px; */
        border: 1px solid rgb(255, 255, 255);
        user-select: none;
    }

    .dot:hover {
        background-color: #000000;
    }

    .dot.left-top {
        top: -5px;
        left: -5px;
        cursor: nw-resize;
    }

    .dot.left-bottom {
        bottom: -5px;
        left: -5px;
        cursor: sw-resize;
    }

    .dot.right-top {
        top: -5px;
        right: -5px;
        cursor: ne-resize;
    }

    .dot.right-bottom {
        bottom: -5px;
        right: -5px;
        cursor: se-resize;
    }

    .dot.top-mid {
        top: -5px;
        left: calc(50% - 5px);
        cursor: n-resize;
    }

    .dot.left-mid {
        left: -5px;
        top: calc(50% - 5px);
        cursor: w-resize;
    }

    .dot.right-mid {
        right: -5px;
        top: calc(50% - 5px);
        cursor: e-resize;
    }

    .dot.bottom-mid {
        bottom: -5px;
        left: calc(50% - 5px);
        cursor: s-resize;
    }

    .dot.rotate {
        top: -30px;
        left: calc(50% - 5px);
        cursor: url('https://findicons.com/files/icons/1620/crystal_project/16/rotate_ccw.png'), auto;
    }
    ::selection {
        color: rgb(255, 255, 255);
        background: rgb(0, 34, 129);
        }

    .rotate-link {
        position: absolute;
        width: 1px;
        height: 15px;
        background-color: #1E88E5;
        top: -20px;
        left: calc(50% + 0.5px);
        z-index: -1;
    }

    .notebooks {
        height: 191px;
        padding-top: 65px;
        border-radius: 13px;
        text-align: center;
        background-position: center;
        background-size: cover;
        box-shadow: 6px 8px 17px #c5c5c5;
        width: 159px;
        margin: 21px;
    }

    .notebooks p {
        display: inline;
        font-weight: 100;
        color: #001866;
        font-size: 21px;
        margin-right: 3px;
        margin-left: 0;
    }

    .notebooks a {
        text-decoration: none;
        padding-bottom: 3px;
        font-size: 13px;
        color: #001866;
        border-bottom: 2px solid #001866;
    }
    #signInBtn2{
    padding: 0px 0px;
    height: 40px;
    width: 140px;
    background: #001463;
    color: white;
    font-size: 15px;
    border-radius: 9px;
    border: none;
}
</style>

<body onload="check()">
    <?php require "partials/_nav.php"; ?>
    <button class="btn btn-primary d-none"
        type="button"
        id="btn"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBothOptions"
        aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

    <div class="offcanvas offcanvas-end"
        style="width: 29%;"
        data-bs-scroll="true"
        tabindex="-1"
        id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <button type="button"
                style=" width: 100%;   height: 104px;   border: 1px dotted #001b67;   text-align: center;   border-radius: 15px;   font-weight: bold;   color: #001b67;  margin: 0px 10px;  font-size: 20px;"
                data-bs-dismiss="offcanvas"
                aria-label="Close">
                <img src="Pictures/plus.jpg"
                    style="height: 45px; width: 45px; margin-top: 8px;"
                    alt="">
                Customise Notebooks With Your Images/Videos
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="heading"
                style=" display: flex; justify-content: space-between;">
                <p style="  font-size: 22px;  color: #605d62;  font-weight: bold;">Design Categories</p>
                <a onclick="show1()"
                    id="show1"
                    style=" color: #090093;  font-size: 14px;  text-decoration: none;  margin-bottom: 18px;  margin-top: 3px;  border-bottom: 2px solid; "
                    href="#">View All</a>
                <a onclick="hide1()"
                    id="hide1"
                    style="  color: #090093;  font-size: 14px;  display: none;  text-decoration: none;  margin-bottom: 18px;   margin-top: 3px;  border-bottom: 2px solid;"
                    href="#">View Less</a>
            </div>

            <div class="main"
                id="main1"
                style="  height: 69%; /* overflow-y: scroll; */  display: flex;  flex-wrap: wrap;">
                <div class="boxes cats cat1" onclick="Cat(1)"><img src="Pictures/CategoriesPics/1.jpg"
                        alt="">
                    <p>Creations by Adhithi Harikumar</p>
                </div>
                <div class="boxes cats cat2" onclick="Cat(2)"><img src="Pictures/CategoriesPics/2.jpg"
                        alt="">
                    <p>Professionals</p>
                </div>
                <div class="boxes cats cat3" onclick="Cat(3)"><img src="Pictures/CategoriesPics/3.jpg"
                        alt="">
                    <p>Travel</p>
                </div>
                <div class="boxes cats cat4" onclick="Cat(4)"><img src="Pictures/CategoriesPics/4.jpg"
                        alt="">
                    <p>Women's Day</p>
                </div>
                <div class="boxes cats cat5" onclick="Cat(5)"><img src="Pictures/CategoriesPics/5.jpg"
                        alt="">
                    <p>Creations by Rohan Dhotre</p>
                </div>
                <div class="boxes cats cat6" onclick="Cat(6)"><img src="Pictures/CategoriesPics/6.jpg"
                        alt="">
                    <p>Teacher's Day</p>
                </div>
                <div class="boxes cats  hidden cat7" onclick="Cat(7)"><img src="Pictures/CategoriesPics/7.jpg"
                        alt="">
                    <p>Puns</p>
                </div>
                <div class="boxes cats  hidden cat8" onclick="Cat(8)"><img src="Pictures/CategoriesPics/8.jpg"
                        alt="">
                    <p>Gaming</p>
                </div>
                <div class="boxes cats  hidden cat9" onclick="Cat(9)"><img src="Pictures/CategoriesPics/9.jpg"
                        alt="">
                    <p>Millennial Lingo</p>
                </div>
                <div class="boxes cats  hidden cat0" onclick="Cat(0)"><img src="Pictures/CategoriesPics/10.jpg"
                        alt="">
                    <p>Motivational Quotes</p>
                </div>
                <div class="boxes cats  hidden catA" onclick="Cat('A')"><img src="Pictures/CategoriesPics/11.jpg"
                        alt="">
                    <p>New Year</p>
                </div>
                <div class="boxes cats  hidden catB" onclick="Cat('B')"><img src="Pictures/CategoriesPics/12.jpg"
                        alt="">
                    <p>Christmas</p>
                </div>
                <div class="boxes cats  hidden catC" onclick="Cat('C')"><img src="Pictures/CategoriesPics/13.jpg"
                        alt="">
                    <p>Foolball</p>
                </div>
                <div class="boxes cats  hidden catD" onclick="Cat('D')"><img src="Pictures/CategoriesPics/14.jpg"
                        alt="">
                    <p>Eternals</p>
                </div>
                <div class="boxes cats  hidden catE" onclick="Cat('E')"><img src="Pictures/CategoriesPics/15.jpg"
                        alt="">
                    <p>Creations by Abhishek</p>
                </div>
                <div class="boxes cats  hidden catF" onclick="Cat('F')"><img src="Pictures/CategoriesPics/16.jpg"
                        alt="">
                    <p>Father's Day</p>
                </div>
                <div class="boxes cats  hidden catG" onclick="Cat('G')"><img src="Pictures/CategoriesPics/17.jpg"
                        alt="">
                    <p>Mother's Day</p>
                </div>
                <div class="boxes cats  hidden catH" onclick="Cat('H')"><img src="Pictures/CategoriesPics/18.jpg"
                        alt="">
                    <p>Spider-Man - No Way Home</p>
                </div>
                <div class="boxes cats  hidden catI" onclick="Cat('I')"><img src="Pictures/CategoriesPics/19.jpg"
                        alt="">
                    <p>Creations by Vikash</p>
                </div>
                <div class="boxes cats  hidden catJ" onclick="Cat('J')"><img src="Pictures/CategoriesPics/20.jpg"
                        alt="">
                    <p>Creations by Pearl D Souza</p>
                </div>
                <div class="boxes cats  hidden catK" onclick="Cat('K')"><img src="Pictures/CategoriesPics/21.jpg"
                        alt="">
                    <p>Creations by Chowmi Doodles</p>
                </div>
                <div class="boxes cats  hidden catL" onclick="Cat('L')"><img src="Pictures/CategoriesPics/22.jpg"
                        alt="">
                    <p>Chhota Bheem</p>
                </div>
                <div class="boxes cats  hidden catM" onclick="Cat('M')"><img src="Pictures/CategoriesPics/23.jpg"
                        alt="">
                    <p>FIFA WC Winners Commemorative Covers</p>
                </div>
                <div class="boxes cats  hidden catN" onclick="Cat('N')"><img src="Pictures/CategoriesPics/24.jpg"
                        alt="">
                    <p>Mathematics Lover</p>
                </div>
            </div>

            <div class="heading"
                style=" display: flex; justify-content: space-between;">
                <p style=" font-size: 22px; color: #605d62; font-weight: bold;">Explore Designs</p>
                <a onclick="show2()"
                    id="show2"
                    style=" color: #090093;  font-size: 14px; text-decoration: none;  margin-bottom: 18px; margin-top: 3px; border-bottom: 2px solid; "
                    href="#">View All</a>
                <a onclick="hide2()"
                    id="hide2"
                    style=" color: #090093;  font-size: 14px; display: none; text-decoration: none;  margin-bottom: 18px; margin-top: 3px; border-bottom: 2px solid;"
                    href="#">View Less</a>
            </div>

            <div class="main"
                id="main2"
                style=" height: 69%; display: flex; flex-wrap: wrap;">
                <div class="boxes catC"
                    onclick="back(document.getElementById('price1').src)"><img id="price1"
                        src="Pictures/DesignsPics/1.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat0"
                    onclick="back(document.getElementById('price2').src)"><img id="price2"
                        src="Pictures/DesignsPics/2.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat0"
                    onclick="back(document.getElementById('price3').src)"><img id="price3"
                        src="Pictures/DesignsPics/3.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat0"
                    onclick="back(document.getElementById('price4').src)"><img id="price4"
                        src="Pictures/DesignsPics/4.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat0"
                    onclick="back(document.getElementById('price5').src)"><img id="price5"
                        src="Pictures/DesignsPics/5.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat0"
                    onclick="back(document.getElementById('price6').src)"><img id="price6"
                        src="Pictures/DesignsPics/6.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price7').src)"><img id="price7"
                        src="Pictures/DesignsPics/7.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price8').src)"><img id="price8"
                        src="Pictures/DesignsPics/8.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price9').src)"><img id="price9"
                        src="Pictures/DesignsPics/9.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price10').src)"><img id="price10"
                        src="Pictures/DesignsPics/10.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price11').src)"><img id="price11"
                        src="Pictures/DesignsPics/11.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price12').src)"><img id="price12"
                        src="Pictures/DesignsPics/12.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price13').src)"><img id="price13"
                        src="Pictures/DesignsPics/13.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price14').src)"><img id="price14"
                        src="Pictures/DesignsPics/14.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price15').src)"><img id="price15"
                        src="Pictures/DesignsPics/15.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price16').src)"><img id="price16"
                        src="Pictures/DesignsPics/16.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price17').src)"><img id="price17"
                        src="Pictures/DesignsPics/17.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price18').src)"><img id="price18"
                        src="Pictures/DesignsPics/18.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price19').src)"><img id="price19"
                        src="Pictures/DesignsPics/19.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price20').src)"><img id="price20"
                        src="Pictures/DesignsPics/20.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price21').src)"><img id="price21"
                        src="Pictures/DesignsPics/21.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price22').src)"><img id="price22"
                        src="Pictures/DesignsPics/22.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price23').src)"><img id="price23"
                        src="Pictures/DesignsPics/23.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price24').src)"><img id="price24"
                        src="Pictures/DesignsPics/24.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price25').src)"><img id="price25"
                        src="Pictures/DesignsPics/25.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price26').src)"><img id="price26"
                        src="Pictures/DesignsPics/26.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price27').src)"><img id="price27"
                        src="Pictures/DesignsPics/27.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price28').src)"><img id="price28"
                        src="Pictures/DesignsPics/28.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price29').src)"><img id="price29"
                        src="Pictures/DesignsPics/29.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price30').src)"><img id="price30"
                        src="Pictures/DesignsPics/30.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price31').src)"><img id="price31"
                        src="Pictures/DesignsPics/31.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price32').src)"><img id="price32"
                        src="Pictures/DesignsPics/32.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price33').src)"><img id="price33"
                        src="Pictures/DesignsPics/33.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price34').src)"><img id="price34"
                        src="Pictures/DesignsPics/34.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price35').src)"><img id="price35"
                        src="Pictures/DesignsPics/35.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price36').src)"><img id="price36"
                        src="Pictures/DesignsPics/36.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price37').src)"><img id="price37"
                        src="Pictures/DesignsPics/37.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price38').src)"><img id="price38"
                        src="Pictures/DesignsPics/38.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price39').src)"><img id="price39"
                        src="Pictures/DesignsPics/39.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price40').src)"><img id="price40"
                        src="Pictures/DesignsPics/40.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price41').src)"><img id="price41"
                        src="Pictures/DesignsPics/41.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price42').src)"><img id="price42"
                        src="Pictures/DesignsPics/42.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price43').src)"><img id="price43"
                        src="Pictures/DesignsPics/43.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price44').src)"><img id="price44"
                        src="Pictures/DesignsPics/44.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price45').src)"><img id="price45"
                        src="Pictures/DesignsPics/45.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price46').src)"><img id="price46"
                        src="Pictures/DesignsPics/46.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price47').src)"><img id="price47"
                        src="Pictures/DesignsPics/47.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price48').src)"><img id="price48"
                        src="Pictures/DesignsPics/48.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price49').src)"><img id="price49"
                        src="Pictures/DesignsPics/49.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price50').src)"><img id="price50"
                        src="Pictures/DesignsPics/50.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catC"
                    onclick="back(document.getElementById('price51').src)"><img id="price51"
                        src="Pictures/DesignsPics/51.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price52').src)"><img id="price52"
                        src="Pictures/DesignsPics/52.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price53').src)"><img id="price53"
                        src="Pictures/DesignsPics/53.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price54').src)"><img id="price54"
                        src="Pictures/DesignsPics/54.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price55').src)"><img id="price55"
                        src="Pictures/DesignsPics/55.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price56').src)"><img id="price56"
                        src="Pictures/DesignsPics/56.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price57').src)"><img id="price57"
                        src="Pictures/DesignsPics/57.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price58').src)"><img id="price58"
                        src="Pictures/DesignsPics/58.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price59').src)"><img id="price59"
                        src="Pictures/DesignsPics/59.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price60').src)"><img id="price60"
                        src="Pictures/DesignsPics/60.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1"
                    onclick="back(document.getElementById('price61').src)"><img id="price61"
                        src="Pictures/DesignsPics/61.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price62').src)"><img id="price62"
                        src="Pictures/DesignsPics/62.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price63').src)"><img id="price63"
                        src="Pictures/DesignsPics/63.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price64').src)"><img id="price64"
                        src="Pictures/DesignsPics/64.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price65').src)"><img id="price65"
                        src="Pictures/DesignsPics/65.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price66').src)"><img id="price66"
                        src="Pictures/DesignsPics/66.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price67').src)"><img id="price67"
                        src="Pictures/DesignsPics/67.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price68').src)"><img id="price68"
                        src="Pictures/DesignsPics/68.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price69').src)"><img id="price69"
                        src="Pictures/DesignsPics/69.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price70').src)"><img id="price70"
                        src="Pictures/DesignsPics/70.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price71').src)"><img id="price71"
                        src="Pictures/DesignsPics/71.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price72').src)"><img id="price72"
                        src="Pictures/DesignsPics/72.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price73').src)"><img id="price73"
                        src="Pictures/DesignsPics/73.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price74').src)"><img id="price74"
                        src="Pictures/DesignsPics/74.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price75').src)"><img id="price75"
                        src="Pictures/DesignsPics/75.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat3"
                    onclick="back(document.getElementById('price76').src)"><img id="price76"
                        src="Pictures/DesignsPics/76.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catB"
                    onclick="back(document.getElementById('price77').src)"><img id="price77"
                        src="Pictures/DesignsPics/77.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat8"
                    onclick="back(document.getElementById('price78').src)"><img id="price78"
                        src="Pictures/DesignsPics/78.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price79').src)"><img id="price79"
                        src="Pictures/DesignsPics/79.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price80').src)"><img id="price80"
                        src="Pictures/DesignsPics/80.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price81').src)"><img id="price81"
                        src="Pictures/DesignsPics/81.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price82').src)"><img id="price82"
                        src="Pictures/DesignsPics/82.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price83').src)"><img id="price83"
                        src="Pictures/DesignsPics/83.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price84').src)"><img id="price84"
                        src="Pictures/DesignsPics/84.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price85').src)"><img id="price85"
                        src="Pictures/DesignsPics/85.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price86').src)"><img id="price86"
                        src="Pictures/DesignsPics/86.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price87').src)"><img id="price87"
                        src="Pictures/DesignsPics/87.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price88').src)"><img id="price88"
                        src="Pictures/DesignsPics/88.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price89').src)"><img id="price89"
                        src="Pictures/DesignsPics/89.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price90').src)"><img id="price90"
                        src="Pictures/DesignsPics/90.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price91').src)"><img id="price91"
                        src="Pictures/DesignsPics/91.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price92').src)"><img id="price92"
                        src="Pictures/DesignsPics/92.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price93').src)"><img id="price93"
                        src="Pictures/DesignsPics/93.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat2"
                    onclick="back(document.getElementById('price94').src)"><img id="price94"
                        src="Pictures/DesignsPics/94.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price95').src)"><img id="price95"
                        src="Pictures/DesignsPics/95.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price96').src)"><img id="price96"
                        src="Pictures/DesignsPics/96.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price97').src)"><img id="price97"
                        src="Pictures/DesignsPics/97.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price98').src)"><img id="price98"
                        src="Pictures/DesignsPics/98.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catN"
                    onclick="back(document.getElementById('price99').src)"><img id="price99"
                        src="Pictures/DesignsPics/99.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat0"
                    onclick="back(document.getElementById('price100').src)"><img id="price100"
                        src="Pictures/DesignsPics/100.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price101').src)"><img id="price101"
                        src="Pictures/DesignsPics/101.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price102').src)"><img id="price102"
                        src="Pictures/DesignsPics/102.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price103').src)"><img id="price103"
                        src="Pictures/DesignsPics/103.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price104').src)"><img id="price104"
                        src="Pictures/DesignsPics/104.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price105').src)"><img id="price105"
                        src="Pictures/DesignsPics/105.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price106').src)"><img id="price106"
                        src="Pictures/DesignsPics/106.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price107').src)"><img id="price107"
                        src="Pictures/DesignsPics/107.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price108').src)"><img id="price108"
                        src="Pictures/DesignsPics/108.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price109').src)"><img id="price109"
                        src="Pictures/DesignsPics/109.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price110').src)"><img id="price110"
                        src="Pictures/DesignsPics/110.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price111').src)"><img id="price111"
                        src="Pictures/DesignsPics/111.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price112').src)"><img id="price112"
                        src="Pictures/DesignsPics/112.jpg"><button class="price">₹100</button></div>
                <div class="boxes cat1 hidden1"
                    onclick="back(document.getElementById('price113').src)"><img id="price113"
                        src="Pictures/DesignsPics/113.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price114').src)"><img id="price114"
                        src="Pictures/DesignsPics/114.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price115').src)"><img id="price115"
                        src="Pictures/DesignsPics/115.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price116').src)"><img id="price116"
                        src="Pictures/DesignsPics/116.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price117').src)"><img id="price117"
                        src="Pictures/DesignsPics/117.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price118').src)"><img id="price118"
                        src="Pictures/DesignsPics/118.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price119').src)"><img id="price119"
                        src="Pictures/DesignsPics/119.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price120').src)"><img id="price120"
                        src="Pictures/DesignsPics/120.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price121').src)"><img id="price121"
                        src="Pictures/DesignsPics/121.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price122').src)"><img id="price122"
                        src="Pictures/DesignsPics/122.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price123').src)"><img id="price123"
                        src="Pictures/DesignsPics/123.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price124').src)"><img id="price124"
                        src="Pictures/DesignsPics/124.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price125').src)"><img id="price125"
                        src="Pictures/DesignsPics/125.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price126').src)"><img id="price126"
                        src="Pictures/DesignsPics/126.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price127').src)"><img id="price127"
                        src="Pictures/DesignsPics/127.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price128').src)"><img id="price128"
                        src="Pictures/DesignsPics/128.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat4"
                    onclick="back(document.getElementById('price129').src)"><img id="price129"
                        src="Pictures/DesignsPics/129.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat5"
                    onclick="back(document.getElementById('price130').src)"><img id="price130"
                        src="Pictures/DesignsPics/130.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat5"
                    onclick="back(document.getElementById('price131').src)"><img id="price131"
                        src="Pictures/DesignsPics/131.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat5"
                    onclick="back(document.getElementById('price132').src)"><img id="price132"
                        src="Pictures/DesignsPics/132.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat5"
                    onclick="back(document.getElementById('price133').src)"><img id="price133"
                        src="Pictures/DesignsPics/133.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat5"
                    onclick="back(document.getElementById('price134').src)"><img id="price134"
                        src="Pictures/DesignsPics/134.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat6"
                    onclick="back(document.getElementById('price135').src)"><img id="price135"
                        src="Pictures/DesignsPics/135.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat6"
                    onclick="back(document.getElementById('price136').src)"><img id="price136"
                        src="Pictures/DesignsPics/136.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat6"
                    onclick="back(document.getElementById('price137').src)"><img id="price137"
                        src="Pictures/DesignsPics/137.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat6"
                    onclick="back(document.getElementById('price138').src)"><img id="price138"
                        src="Pictures/DesignsPics/138.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat7"
                    onclick="back(document.getElementById('price139').src)"><img id="price139"
                        src="Pictures/DesignsPics/139.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat7"
                    onclick="back(document.getElementById('price140').src)"><img id="price140"
                        src="Pictures/DesignsPics/140.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat7"
                    onclick="back(document.getElementById('price141').src)"><img id="price141"
                        src="Pictures/DesignsPics/141.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat7"
                    onclick="back(document.getElementById('price142').src)"><img id="price142"
                        src="Pictures/DesignsPics/142.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat9"
                    onclick="back(document.getElementById('price143').src)"><img id="price143"
                        src="Pictures/DesignsPics/143.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 cat9"
                    onclick="back(document.getElementById('price144').src)"><img id="price144"
                        src="Pictures/DesignsPics/144.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price145').src)"><img id="price145"
                        src="Pictures/DesignsPics/145.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price146').src)"><img id="price146"
                        src="Pictures/DesignsPics/146.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price147').src)"><img id="price147"
                        src="Pictures/DesignsPics/147.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price148').src)"><img id="price148"
                        src="Pictures/DesignsPics/148.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price149').src)"><img id="price149"
                        src="Pictures/DesignsPics/149.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catA"
                    onclick="back(document.getElementById('price150').src)"><img id="price150"
                        src="Pictures/DesignsPics/150.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catD"
                    onclick="back(document.getElementById('price151').src)"><img id="price151"
                        src="Pictures/DesignsPics/151.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catD"
                    onclick="back(document.getElementById('price152').src)"><img id="price152"
                        src="Pictures/DesignsPics/152.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catD"
                    onclick="back(document.getElementById('price153').src)"><img id="price153"
                        src="Pictures/DesignsPics/153.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catD"
                    onclick="back(document.getElementById('price154').src)"><img id="price154"
                        src="Pictures/DesignsPics/154.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catD"
                    onclick="back(document.getElementById('price155').src)"><img id="price155"
                        src="Pictures/DesignsPics/155.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catE"
                    onclick="back(document.getElementById('price156').src)"><img id="price156"
                        src="Pictures/DesignsPics/156.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catE"
                    onclick="back(document.getElementById('price157').src)"><img id="price157"
                        src="Pictures/DesignsPics/157.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catE"
                    onclick="back(document.getElementById('price158').src)"><img id="price158"
                        src="Pictures/DesignsPics/158.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catE"
                    onclick="back(document.getElementById('price159').src)"><img id="price159"
                        src="Pictures/DesignsPics/159.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catE"
                    onclick="back(document.getElementById('price160').src)"><img id="price160"
                        src="Pictures/DesignsPics/160.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catF"
                    onclick="back(document.getElementById('price161').src)"><img id="price161"
                        src="Pictures/DesignsPics/161.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catF"
                    onclick="back(document.getElementById('price162').src)"><img id="price162"
                        src="Pictures/DesignsPics/162.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catF"
                    onclick="back(document.getElementById('price163').src)"><img id="price163"
                        src="Pictures/DesignsPics/163.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catF"
                    onclick="back(document.getElementById('price164').src)"><img id="price164"
                        src="Pictures/DesignsPics/164.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catF"
                    onclick="back(document.getElementById('price165').src)"><img id="price165"
                        src="Pictures/DesignsPics/165.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catG"
                    onclick="back(document.getElementById('price166').src)"><img id="price166"
                        src="Pictures/DesignsPics/166.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catG"
                    onclick="back(document.getElementById('price167').src)"><img id="price167"
                        src="Pictures/DesignsPics/167.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catG"
                    onclick="back(document.getElementById('price168').src)"><img id="price168"
                        src="Pictures/DesignsPics/168.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catG"
                    onclick="back(document.getElementById('price169').src)"><img id="price169"
                        src="Pictures/DesignsPics/169.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catG"
                    onclick="back(document.getElementById('price170').src)"><img id="price170"
                        src="Pictures/DesignsPics/170.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catH"
                    onclick="back(document.getElementById('price171').src)"><img id="price171"
                        src="Pictures/DesignsPics/171.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catH"
                    onclick="back(document.getElementById('price172').src)"><img id="price172"
                        src="Pictures/DesignsPics/172.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catH"
                    onclick="back(document.getElementById('price173').src)"><img id="price173"
                        src="Pictures/DesignsPics/173.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catH"
                    onclick="back(document.getElementById('price174').src)"><img id="price174"
                        src="Pictures/DesignsPics/174.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catH"
                    onclick="back(document.getElementById('price175').src)"><img id="price175"
                        src="Pictures/DesignsPics/175.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price176').src)"><img id="price176"
                        src="Pictures/DesignsPics/176.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price177').src)"><img id="price177"
                        src="Pictures/DesignsPics/177.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price178').src)"><img id="price178"
                        src="Pictures/DesignsPics/178.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price179').src)"><img id="price179"
                        src="Pictures/DesignsPics/179.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price180').src)"><img id="price180"
                        src="Pictures/DesignsPics/180.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price181').src)"><img id="price181"
                        src="Pictures/DesignsPics/181.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price182').src)"><img id="price182"
                        src="Pictures/DesignsPics/182.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price183').src)"><img id="price183"
                        src="Pictures/DesignsPics/183.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price184').src)"><img id="price184"
                        src="Pictures/DesignsPics/184.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catI"
                    onclick="back(document.getElementById('price185').src)"><img id="price185"
                        src="Pictures/DesignsPics/185.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catJ"
                    onclick="back(document.getElementById('price186').src)"><img id="price186"
                        src="Pictures/DesignsPics/186.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catJ"
                    onclick="back(document.getElementById('price187').src)"><img id="price187"
                        src="Pictures/DesignsPics/187.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catK"
                    onclick="back(document.getElementById('price188').src)"><img id="price188"
                        src="Pictures/DesignsPics/188.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catK"
                    onclick="back(document.getElementById('price189').src)"><img id="price189"
                        src="Pictures/DesignsPics/189.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catK"
                    onclick="back(document.getElementById('price190').src)"><img id="price190"
                        src="Pictures/DesignsPics/190.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catK"
                    onclick="back(document.getElementById('price191').src)"><img id="price191"
                        src="Pictures/DesignsPics/191.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catK"
                    onclick="back(document.getElementById('price192').src)"><img id="price192"
                        src="Pictures/DesignsPics/192.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catL"
                    onclick="back(document.getElementById('price193').src)"><img id="price193"
                        src="Pictures/DesignsPics/193.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catL"
                    onclick="back(document.getElementById('price194').src)"><img id="price194"
                        src="Pictures/DesignsPics/194.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catL"
                    onclick="back(document.getElementById('price195').src)"><img id="price195"
                        src="Pictures/DesignsPics/195.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catL"
                    onclick="back(document.getElementById('price196').src)"><img id="price196"
                        src="Pictures/DesignsPics/196.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catL"
                    onclick="back(document.getElementById('price197').src)"><img id="price197"
                        src="Pictures/DesignsPics/197.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catM"
                    onclick="back(document.getElementById('price198').src)"><img id="price198"
                        src="Pictures/DesignsPics/198.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catM"
                    onclick="back(document.getElementById('price199').src)"><img id="price199"
                        src="Pictures/DesignsPics/199.jpg"><button class="price">₹100</button></div>
                <div class="boxes hidden1 catM"
                    onclick="back(document.getElementById('price200').src)"><img id="price200"
                        src="Pictures/DesignsPics/200.jpg"><button class="price">₹100</button></div>
               
            </div>
        </div>
    </div>
    <div class="d-flex">

        <div class="customise"
            id="customise">
            <div class="box1 d-flex">
                <p><span id="Rupees">₹ 100</span><br>Per Notebook Price</p>
                <!-- Button trigger modal -->
                <button id="box1_btn1"
                onclick="Verify()"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Save & Continue</button>

                <!-- Modal -->
                <div class="modal fade"
                    id="exampleModal2"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl"
                        style="margin-top: 50px;">
                        <div class="modal-content"
                            style="box-shadow: 0px 0px 93px #000000;border-radius: 0px;padding: 47px;">
                            <form action="checkout.php" method="post">
                            <div class="modal-header  d-block"
                                style="border: none;">
                                <button id="box1_btn2"
                                    type="button"
                                    style="width: 152px;border: none;background: none;letter-spacing: 1px;"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"><b>✖ Final Preview </b></button>
                                <div class="d-flex"
                                    style="justify-content: space-between; margin-top: 34px;float: right;">
                                    <!-- <h1 class="modal-title fs-4 mx-4 fw-semibold"
                                        id="exampleModalLabel"
                                        style="letter-spacing: 1px; margin-left: 14px;"><span class="fs-4" id="selectedNo">0</span>/6 Notebooks selected in the
                                        pack</h1> -->
                                    <a href="checkout.php"> 
                                        <button type="submit" onclick="valueSender()" name="Ammount" id="modalBtn" disabled>Add To Cart - ₹ 0 </button>
                                    </a>
                                    
                                <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->
                                </div>
                            </div>
                            <div class="modal-body"
                                style="height: 464px;display: flex; flex-wrap: wrap;">
                                <div class="notebooks" id="Save1">
                                    <p class="hideThis1">+</p><a onclick="goToSlide(0)" class="hideThis1" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                                <div class="notebooks" id="Save2">
                                    <p class="hideThis2">+</p><a onclick="goToSlide(1)" class="hideThis2" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                                <div class="notebooks" id="Save3">
                                    <p class="hideThis3">+</p><a onclick="goToSlide(2)" class="hideThis3" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                                <div class="notebooks" id="Save4">
                                    <p class="hideThis4">+</p><a onclick="goToSlide(3)" class="hideThis4" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                                <div class="notebooks" id="Save5">
                                    <p class="hideThis5">+</p><a onclick="goToSlide(4)" class="hideThis5" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                                <div class="notebooks" id="Save6">
                                    <p class="hideThis6">+</p><a onclick="goToSlide(5)" class="hideThis6" href="#" data-bs-dismiss="modal">Add Notebook</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box2">
                <img src="Pictures/qrCode.jpg"
                    alt="">
                <p>Video Price - ₹ 50 Per Notebook</p>
                <p> <input class="text-center"
                        type="checkbox"
                        name=""
                        id="checkbox"
                        onclick="showQR()"
                        style="height: 19px;  width: 40px;">Add your own video to your<br> notebook!</p>
                <div class="text-center">
                    <h5 class="d-inline">How to add</h5><button class="more"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Know More</button>
                </div>

                <!-- Modal -->
                <div class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content"
                            style="height: 79vh;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5"
                                    id="exampleModalLabel">How To Add</h1>
                                <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body"
                                style="padding: 45px; text-align: center;">
                                <h5 style="color: black; font-weight: bold;">How to add a video to your personalized
                                    notebook</h5>
                                <ol type="1"
                                    style="text-align: center; color: #3c4043;  font-size: 19px;">
                                    <li>Enable the add video button in the previous screen.</li>
                                    <li> You can add the video after the order payment has been made successfully. Once
                                        the video has been successfully uploaded to one notebook, you can repeat the
                                        process for the other notebooks.</li>
                                    <li>After you have uploaded each video to its corresponding notebook, we will
                                        examine and approve it in the backend. If the approval is successful, we will
                                        let you know.</li>
                                    <li> Once you receive your notebooks, you can simply scan the QR code and watch your
                                        video play on it.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box3">
                <h6 style="margin: 22px 0 0 33px; font-weight: bold; color: #142b71;">Edit Panel</h6>

                <div style="display: flex;justify-content: space-around;margin-top: 7px; cursor: pointer;">
                    <img src="Pictures/dustbin.jpg"
                        alt=""
                        style="height: 33px;width: 33px;"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop1">
                    <img src="Pictures/copy.jpg"
                        alt=""
                        id="duplicateAllImg"
                        style="height: 29px;display: none;"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2">
                </div>
                <div class="d-flex mt-3"
                    style="justify-content: center;">
                    <h5 class="d-inline"
                        style=" cursor: pointer;"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop1">Delete Panel</h5>
                    <!-- Modal -->
                    <div class="modal fade"
                        id="staticBackdrop1"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header"
                                    style="border: none;">
                                    <h2 class="modal-title"
                                        id="staticBackdropLabel"
                                        style="font-weight: bold;">Confirm to delete </h2>
                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5> Are you sure you want to clear the design?</h5>
                                </div>
                                <div class="modal-footer"
                                    style="border: none;">
                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                        style=" background: white;border: 1px solid #142b71; font-size: 14px;  border-radius: 5px;  color: #142b71; padding: 7px 19px;">Cancel</button>
                                    <button type="button"
                                        onclick="window.location.reload();"
                                        class="btn btn-primary"
                                        style=" padding: 7px 19px; background: #001d76;  font-size: 14px;">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 
                        id="duplicateAllText"
                        style="margin-left: 89px; cursor: pointer;display: none;"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2">Duplicate All</h5>
                    <!-- Modal  -->
                    <div class="modal fade"
                        id="staticBackdrop2"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header"
                                    style="border: none;">
                                    <h2 class="modal-title"
                                        id="staticBackdropLabel"
                                        style="font-weight: bold;">Confirm to duplicate</h2>
                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5> Are you sure you want to duplicate the design to all the notebooks?</h5>
                                </div>
                                <div class="modal-footer"
                                    style="border: none;">
                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                        style=" background: white;border: 1px solid #142b71; font-size: 14px;  border-radius: 5px;  color: #142b71; padding: 7px 19px;">Cancel</button>
                                    <button type="button"           
                                        class="btn btn-primary"
                                        data-bs-dismiss="modal"
                                        id="dpl"
                                        style=" padding: 7px 19px; background: #001d76;  font-size: 14px;">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box4 d-flex">
                <div class="box4_1 w-50"
                    id="back1"
                    onclick="addText()">
                    <p class="d-block">+ Add Text</p>
                </div>
                <div class="box4_2 w-50"
                    id="back2"
                    onclick="upload()">
                    <p class="d-block"
                        style="background: none;"><img src="Pictures/uploadImage.jpg"
                            alt=""
                            style="    height: 27px;"> Upload</p>
                </div>
            </div>

            <div class="box5"
                id="addText">
                <div class="d-flex">
                    <input type="text"
                        name=""
                        id="input1"
                        placeholder="Type Something">
                    <input type="color"
                        name=""
                        id="input2"
                        value="#06005C">
                </div>
                <div class="d-flex"
                    style="padding: 0px 14px; margin-top: 11px;">
                    <button id="bold"
                        style="border: none;
                font-size: 23px;
                background: #000d7e;
                margin-right: 10px;
                color: rgb(255, 255, 255);
                font-weight: bold;
                padding: 1px 13px;">B</button>
                    <button id="italic"
                        style="border: none;
                               font-size: 25px;
                               color: white;
                               background: #000d7e;
                               margin-right: 10px;
                               font-family: 'Courier New', Courier, monospace;
                               padding: 1px 13px;"><em>I</em></button>
                    <div class="form-floating"
                        style="  width: 164px;  margin-right: 12px;">
                        <select class="form-select"
                            id="floatingSelect"
                            aria-label="Floating label select example">
                            <option style="font-size: 17px;"
                                selected>Arial</option>
                            <option style="font-size: 17px;"
                                value="1">cursive</option>
                            <option style="font-size: 17px;"
                                value="1">fantasy</option>
                            <option style="font-size: 17px;"
                                value="1"> monospace</option>
                            <option style="font-size: 17px;"
                                value="1">Sans-Serif</option>
                            <option style="font-size: 17px;"
                                value="2">Times New Roman</option>
                            <option style="font-size: 17px;"
                                value="3">Verdana</option>
                        </select>
                        <label for="floatingSelect">Font-Family</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select"
                            id="floatingSelect"
                            aria-label="Floating label select example">
                            <option value="1">12</option>
                            <option value="2">14</option>
                            <option value="3">16</option>
                            <option value="4">18</option>
                            <option value="5">20</option>
                            <option value="6"
                                selected>22</option>
                            <option value="7">24</option>
                        </select>
                        <label for="floatingSelect">Size</label>
                    </div>
                </div>
                <button id="box5btn" disabled>Apply</button>


            </div>

            <div class="box6"
                id="upload">

                <img src="Pictures/uploadicon.jpg"
                    alt=""
                    style="height: 56px; margin: auto;display: block;margin-top: 12px;">
                <p class="d-block text-center fs-5 mx-4 my-3">Browse and choose the file you want to upload</p>
                <button id="box6btn"> <input id="fileElem"
                        type="file"
                        accept="image/jpeg, image/png, image/jpg"
                        style="  width: 24%;   height: 23%;  position: absolute;   bottom: 4%;  cursor: pointer;  opacity: 0; left: 0%;" />

                    <a href="#"
                        id="fileSelect"></a>
                    <div id="fileList"></div>Upload
                </button>
            </div>
        </div>

        <div class="slider mt-5" 
            style="margin: auto;">
            <div id="carouselExampleCaptions"
                class="carousel slide"
                style=" width: 80vh; margin: auto;height: 640px;">
                <div class="carousel-indicators">
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner h-100" >
                    <div class="carousel-item active h-100"
                        id="carousel-item0">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container0"
                            style=" height: 400px;  width: 330px; margin: auto;user-select: none;overflow: hidden;border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper1">
                                <div class="box"
                                    id="box0">
                                    <div class="dot rotate"
                                        id="rotate1"></div>
                                    <div class="dot left-top"
                                        id="left-top1"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom1"></div>
                                    <div class="dot top-mid"
                                        id="top-mid1"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid1"></div>
                                    <div class="dot left-mid"
                                        id="left-mid1"></div>
                                    <div class="dot right-mid"
                                        id="right-mid1"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom1"></div>
                                    <div class="dot right-top"
                                        id="right-top1"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/11.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;"
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">1/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        id="carousel-item1">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container1"
                            style="height: 400px;  width: 330px; margin: auto;user-select: none;overflow: hidden; border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper2">
                                <div class="box"
                                    id="box1">
                                    <div class="dot rotate"
                                        id="rotate2"></div>
                                    <div class="dot left-top"
                                        id="left-top2"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom2"></div>
                                    <div class="dot top-mid"
                                        id="top-mid2"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid2"></div>
                                    <div class="dot left-mid"
                                        id="left-mid2"></div>
                                    <div class="dot right-mid"
                                        id="right-mid2"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom2"></div>
                                    <div class="dot right-top"
                                        id="right-top2"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/12.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;"
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">2/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        id="carousel-item2">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container2"
                            style="height: 400px;  width: 330px; margin: auto;user-select: none;border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;overflow: hidden;background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper3">
                                <div class="box"
                                    id="box2">
                                    <div class="dot rotate"
                                        id="rotate3"></div>
                                    <div class="dot left-top"
                                        id="left-top3"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom3"></div>
                                    <div class="dot top-mid"
                                        id="top-mid3"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid3"></div>
                                    <div class="dot left-mid"
                                        id="left-mid3"></div>
                                    <div class="dot right-mid"
                                        id="right-mid3"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom3"></div>
                                    <div class="dot right-top"
                                        id="right-top3"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/12.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;"
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">3/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        id="carousel-item3">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container3"
                            style="height: 400px;  width: 330px; margin: auto;user-select: none;border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;overflow: hidden;background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper4">
                                <div class="box"
                                    id="box3">
                                    <div class="dot rotate"
                                        id="rotate4"></div>
                                    <div class="dot left-top"
                                        id="left-top4"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom4"></div>
                                    <div class="dot top-mid"
                                        id="top-mid4"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid4"></div>
                                    <div class="dot left-mid"
                                        id="left-mid4"></div>
                                    <div class="dot right-mid"
                                        id="right-mid4"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom4"></div>
                                    <div class="dot right-top"
                                        id="right-top4"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/12.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;"
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">4/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>
                    <div class="carousel-item  h-100"
                        id="carousel-item4">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container4"
                            style="height: 400px;  width: 330px; margin: auto;user-select: none;border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;overflow: hidden;background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper5">
                                <div class="box"
                                    id="box4">
                                    <div class="dot rotate"
                                        id="rotate5"></div>
                                    <div class="dot left-top"
                                        id="left-top5"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom5"></div>
                                    <div class="dot top-mid"
                                        id="top-mid5"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid5"></div>
                                    <div class="dot left-mid"
                                        id="left-mid5"></div>
                                    <div class="dot right-mid"
                                        id="right-mid5"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom5"></div>
                                    <div class="dot right-top"
                                        id="right-top5"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/12.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;"
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">5/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>
                    <div class="carousel-item h-100"
                        id="carousel-item5">
                        <div class="image" onmouseenter="showDots()" onmouseleave="hideDots()"
                            id="image-container5"
                            style="height: 400px;  width: 330px; margin: auto;user-select: none;border: 1px solid black; margin-top: 64px;background-repeat: no-repeat;overflow: hidden; background-size: contain;background-position: center;">
                            <div class="box-wrapper"
                                id="box-wrapper6">
                                <div class="box"
                                    id="box5">
                                    <div class="dot rotate"
                                        id="rotate6"></div>
                                    <div class="dot left-top"
                                        id="left-top6"></div>
                                    <div class="dot left-bottom"
                                        id="left-bottom6"></div>
                                    <div class="dot top-mid"
                                        id="top-mid6"></div>
                                    <div class="dot bottom-mid"
                                        id="bottom-mid6"></div>
                                    <div class="dot left-mid"
                                        id="left-mid6"></div>
                                    <div class="dot right-mid"
                                        id="right-mid6"></div>
                                    <div class="dot right-bottom"
                                        id="right-bottom6"></div>
                                    <div class="dot right-top"
                                        id="right-top6"></div>
                                    <div class="rotate-link"></div>
                                </div>
                            </div>
                            <img class="qr"
                                src="Pictures/qrCode.jpg"
                                alt=""
                                style="position: absolute; float: right; width: 47px; right:30%; bottom: 32%;">
                            <!-- <img src="Pictures/CategoriesPics/12.jpg" alt="" style="height: 100%;width: 100%;margin: 0;">   -->
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#"
                                class="fw-semibold"
                                style="font-size: 12px; text-decoration: none;color: #1100ff;letter-spacing: 1px;   "
                                onclick="showModal()">CHANGE DESIGN</a>
                            <h5 class="text-black fw-semibold fs-5">6/6</h5>
                            <p class="text-black fw-semibold">Notebooks</p>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev"
                    style="background: #00000054;">
                    <span class="carousel-control-prev-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next"
                    style="background: #00000054;">
                    <span class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none" id="msg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="border: none;">       
            </div>
            <div class="modal-body">
                    <h3 class="text-center" style="font-weight: bold;">You are not logged in!</h3>
                    <h6 class="text-info text-center" >For customising books, please make sure you are logged in!</h6>
                    <p class="text-warning text-center">Otherwise you will lose your customized order...</p>
            </div>
            <div class="modal-footer">
                
                <a href="login.php"><button id="signInBtn2">Sign In/Sign Up</button></a>
            </div>
            </div>
        </div>
        </div>


        <?php if(!$loggedin) echo'<script> function showMsg() { document.getElementById("msg").click();  }</script>'; ?>
    <script>
        function check() {
            document.getElementById('btn').click();  
            // document.getElementById('box1_btn1').click();
            document.getElementById('back1').style.background = "#a5a5a5";

            const element = document.getElementById("offcanvasWithBothOptions");
            if (element.className.includes("show") == true) {
                document.getElementById('customise').style.display = "none";
            }

            // Show qr code
            var elements = document.getElementsByClassName('qr'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = "none";
            }
            hideDots();
            var temp = document.getElementsByClassName("carousel-item"); // get all elements        
            for (let index = 0; index < 6; index++) { 
                    document.getElementById(`right-mid${index+1}`).style.display = "none";
                    document.getElementById(`left-mid${index+1}`).style.display = "none";
                    document.getElementById(`top-mid${index+1}`).style.display = "none";
                    document.getElementById(`bottom-mid${index+1}`).style.display = "none";
                    document.getElementById(`left-top${index+1}`).style.display = "none";
                    document.getElementById(`right-top${index+1}`).style.display = "none";
                    document.getElementById(`right-bottom${index+1}`).style.display = "none";
                    document.getElementById(`left-bottom${index+1}`).style.display = "none";
            }
            showMsg();
        }
        function show1() {
            document.getElementById('main1').style.height = "auto";
            var elements = document.getElementsByClassName('cats'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                document.getElementById('hide1').style.display = "block";
                document.getElementById('show1').style.display = "none";
                elements[i].style.display = "block";
            }
        }
        function hide1() {
            var elements = document.getElementsByClassName('hidden'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                document.getElementById('hide1').style.display = "none";
                document.getElementById('show1').style.display = "block";
                elements[i].style.display = "none";
            }
        }
        function show2() {
            document.getElementById('main2').style.height = "auto";
            var elements = document.getElementsByClassName('hidden1'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                document.getElementById('hide2').style.display = "block";
                document.getElementById('show2').style.display = "none";
                elements[i].style.display = "block";
            }
        }
        function hide2() {
            var elements = document.getElementsByClassName('hidden1'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                document.getElementById('hide2').style.display = "none";
                document.getElementById('show2').style.display = "block";
                elements[i].style.display = "none";
            }
        }

        function addText() {
            // Display
            document.getElementById('addText').style.display = "block";
            document.getElementById('upload').style.display = "none";
            // Background
            document.getElementById('back1').style.background = "#a5a5a5";
            document.getElementById('back2').style.background = "none";

        }
        function upload() {
            // Display
            document.getElementById('addText').style.display = "none";
            document.getElementById('upload').style.display = "block";
            // Background
            document.getElementById('back1').style.background = "none";
            document.getElementById('back2').style.background = "#a5a5a5";
        }

        function showModal() {
            document.getElementById('btn').click();
            const element = document.getElementById("offcanvasWithBothOptions");
            if (element.className.includes("show") == true) {
                document.getElementById('customise').style.display = "none";
            } 1
        }

        function showQR() {
            let box = document.querySelector('#checkbox');
            var elements = document.getElementsByClassName('qr'); // get all elements
            for (var i = 0; i < elements.length; i++) {
                if (box.checked == false) {
                    document.getElementById('Rupees').innerHTML = "₹ 100";
                    elements[i].style.display = "none";
                }
                if (box.checked == true) {
                    document.getElementById('Rupees').innerHTML = "₹ 150";
                    elements[i].style.display = "block";
                }
            }
        }
    </script>
    <script>
        setInterval(checkForClass, 100);
        function checkForClass() {
            const element = document.getElementById("offcanvasWithBothOptions");
            if (element.className.includes("show") == false) {
                document.getElementById('customise').style.display = "block";
                clearInterval();
            }
        }
    </script>
    <script>
        function rmBack() {
            for (let index = 0; index < 6; index++) {
                var element = document.getElementById(`carousel-item${index}`); // get all elements        
                if (element.className.includes('active') == true) {
                    document.getElementById(`image-container${index}`).style.backgroundImage = "none";
                    var element = document.getElementById(`box${index}`).style.display = "block";
                }
            }
        }
    

        // Uplaoding a image
        const fileSelect = document.getElementById("fileSelect"),
            fileElem = document.getElementById("fileElem"),
            fileList = document.getElementById("fileList");

        fileSelect.addEventListener("click", function (e) {
            if (fileElem) {
                fileElem.click();
            }
            e.preventDefault();
        }, false);

        fileElem.addEventListener("change", handleFiles, false);

        function handleFiles() {
            if (!this.files.length) { } else {
                const list = document.createElement("ul");
                fileList.appendChild(list);
                for (let i = 0; i < this.files.length; i++) {
                    rmBack();

                    var img = document.createElement("img");
                    img.src = URL.createObjectURL(this.files[i]);
                    var source = img.src;

                    // for CSS Background-image
                    for (let index = 0; index < 6; index++) {
                        var element = document.getElementById(`carousel-item${index}`); // get all elements        
                        if (element.className.includes('active') == true) {
                            let backImage = document.getElementById(`box${index}`);
                            backImage.style.backgroundImage = `url(${img.src})`;
                            document.getElementById('duplicateAllText').style.display = "block";
                            document.getElementById('duplicateAllImg').style.display = "block";
                           
                                    document.querySelector('#dpl').addEventListener('click', function(){ 
                                       
                                       
                                        document.getElementById('box0').style.backgroundImage = `url(${img.src})`;
                                        document.getElementById('box1').style.backgroundImage = `url(${img.src})`;
                                        document.getElementById('box2').style.backgroundImage = `url(${img.src})`;
                                        document.getElementById('box3').style.backgroundImage = `url(${img.src})`;
                                        document.getElementById('box4').style.backgroundImage = `url(${img.src})`;
                                        document.getElementById('box5').style.backgroundImage = `url(${img.src})`;
                                        // // backImage.style.backgroundImage = `url(${img.src})`;
                                    });
                                    // }  
                                    
                                }
                        }
                    }
                }
            }
           
        



    </script>

    <script>
          function removeActive() {
            for (let index = 0; index < 6; index++) {
                var element = document.getElementById(`carousel-item${index}`); // get all elements        
                if (element.className.includes('active') == true) {
                    element.classList.remove("active");
                }
            }
          }
        function goToSlide(no) {
            removeActive();
            var element = document.getElementById(`carousel-item${no}`);
            element.classList.add("active");
        }

     
    </script>

   

    <script>
        function back(str) {
            //  let img_src = document.getElementById("price1").src;
            
            for (let index = 0; index < 6; index++) {
                var element = document.getElementById(`carousel-item${index}`); // get all elements        
                if (element.className.includes('active') == true) {
                    var element = document.getElementById(`box${index}`).style.display = "none";
                    document.getElementById(`image-container${index}`).style.backgroundImage = `url(${str})`;
                    document.getElementById('duplicateAllText').style.display = "block";
                    document.getElementById('duplicateAllImg').style.display = "block";
                    // This is for Save modal
                   
                    document.getElementById(`Save${index+1}`).style.backgroundImage = `url(${str})`;
    
                    var divsToHide = document.getElementsByClassName(`hideThis${index+1}`); //divsToHide is an array
                    for(var i = 0; i < divsToHide.length; i++){
                        divsToHide[i].style.display = "none"; // depending on what you're doing
                    }        
                
                    
                    }               
                }
            }
              
    </script>
<script>
    function Verify() {

        let save1 =  document.getElementById('Save1').style.backgroundImage !== '';
        let save2 =  document.getElementById('Save2').style.backgroundImage !== '';
        let save3 =  document.getElementById('Save3').style.backgroundImage !== '';
        let save4 =  document.getElementById('Save4').style.backgroundImage !== '';
        let save5 =  document.getElementById('Save5').style.backgroundImage !== '';
        let save6 =  document.getElementById('Save6').style.backgroundImage !== '';
        if(save1 == true && save2 == true && save3 == true && save4 == true && save5 == true && save6 == true ){
            document.getElementById('modalBtn').style.cursor = "pointer";
            let btn = document.getElementById('modalBtn');
            btn.disabled = false;
          
            let box = document.querySelector('#checkbox');
                if (box.checked == true) {
                    document.getElementById('modalBtn').innerText = 'Add To Cart - ₹ 900';
                }
                else {
                    document.getElementById('modalBtn').innerText = 'Add To Cart - ₹ 600';
                }
        }
    }   
    
</script>
    <script> // script for change image with its corners 
        // Points for box 1
        let id1 = document.getElementById("box0");
        let id1_1 = document.getElementById("box-wrapper1");
        var a1 = document.getElementById("right-mid1");
        var b1 = document.getElementById("left-mid1");
        var c1 = document.getElementById("top-mid1");
        var d1 = document.getElementById("bottom-mid1");
        var e1 = document.getElementById("left-top1");
        var f1 = document.getElementById("right-top1");
        var g1 = document.getElementById("right-bottom1");
        var h1 = document.getElementById("left-bottom1");
        showPoints(id1, id1_1, a1, b1, c1, d1, e1, f1, g1, h1);

        // Points for box 2
        let id2 = document.getElementById("box1");
        let id2_1 = document.getElementById("box-wrapper2");
        var a2 = document.getElementById("right-mid2");
        var b2 = document.getElementById("left-mid2");
        var c2 = document.getElementById("top-mid2");
        var d2 = document.getElementById("bottom-mid2");
        var e2 = document.getElementById("left-top2");
        var f2 = document.getElementById("right-top2");
        var g2 = document.getElementById("right-bottom2");
        var h2 = document.getElementById("left-bottom2");
        showPoints(id2, id2_1, a2, b2, c2, d2, e2, f2, g2, h2);

        // Points for box 3
        let id3 = document.getElementById("box2");
        let id3_1 = document.getElementById("box-wrapper3");
        var a3 = document.getElementById("right-mid3");
        var b3 = document.getElementById("left-mid3");
        var c3 = document.getElementById("top-mid3");
        var d3 = document.getElementById("bottom-mid3");
        var e3 = document.getElementById("left-top3");
        var f3 = document.getElementById("right-top3");
        var g3 = document.getElementById("right-bottom3");
        var h3 = document.getElementById("left-bottom3");
        showPoints(id3, id3_1, a3, b3, c3, d3, e3, f3, g3, h3);

        // Points for box 4
        let id4 = document.getElementById("box3");
        let id4_1 = document.getElementById("box-wrapper4");
        var a4 = document.getElementById("right-mid4");
        var b4 = document.getElementById("left-mid4");
        var c4 = document.getElementById("top-mid4");
        var d4 = document.getElementById("bottom-mid4");
        var e4 = document.getElementById("left-top4");
        var f4 = document.getElementById("right-top4");
        var g4 = document.getElementById("right-bottom4");
        var h4 = document.getElementById("left-bottom4");
        showPoints(id4, id4_1, a4, b4, c4, d4, e4, f4, g4, h4);

        // Points for box 5
        let id5 = document.getElementById("box4");
        let id5_1 = document.getElementById("box-wrapper5");
        var a5 = document.getElementById("right-mid5");
        var b5 = document.getElementById("left-mid5");
        var c5 = document.getElementById("top-mid5");
        var d5 = document.getElementById("bottom-mid5");
        var e5 = document.getElementById("left-top5");
        var f5 = document.getElementById("right-top5");
        var g5 = document.getElementById("right-bottom5");
        var h5 = document.getElementById("left-bottom5");
        showPoints(id5, id5_1, a5, b5, c5, d5, e5, f5, g5, h5);

        // Points for box 6
        let id6 = document.getElementById("box5");
        let id6_1 = document.getElementById("box-wrapper6");
        var a6 = document.getElementById("right-mid6");
        var b6 = document.getElementById("left-mid6");
        var c6 = document.getElementById("top-mid6");
        var d6 = document.getElementById("bottom-mid6");
        var e6 = document.getElementById("left-top6");
        var f6 = document.getElementById("right-top6");
        var g6 = document.getElementById("right-bottom6");
        var h6 = document.getElementById("left-bottom6");
        showPoints(id6, id6_1, a6, b6, c6, d6, e6, f6, g6, h6);

        function showPoints(id1, id2, a, b, c, d, e, f, g, h) {
            var box = id1;
            var boxWrapper = id2;
            const minWidth = 40;
            const minHeight = 40;

            var initX, initY, mousePressX, mousePressY, initW, initH, initRotate;

            function repositionElement(x, y) {
                boxWrapper.style.left = x + 'px';
                boxWrapper.style.top = y + 'px';
            }

            function resize(w, h) {
                box.style.width = w + 'px';
                box.style.height = h + 'px';
            }


            function getCurrentRotation(el) {
                var st = window.getComputedStyle(el, null);
                var tm = st.getPropertyValue("-webkit-transform") ||
                    st.getPropertyValue("-moz-transform") ||
                    st.getPropertyValue("-ms-transform") ||
                    st.getPropertyValue("-o-transform") ||
                    st.getPropertyValue("transform")
                "none";
                if (tm != "none") {
                    var values = tm.split('(')[1].split(')')[0].split(',');
                    var angle = Math.round(Math.atan2(values[1], values[0]) * (180 / Math.PI));
                    return (angle < 0 ? angle + 360 : angle);
                }
                return 0;
            }

            function rotateBox(deg) {
                boxWrapper.style.transform = `rotate(${deg}deg)`;
            }

            // drag support
            boxWrapper.addEventListener('mousedown', function (event) {
                if (event.target.className.indexOf("dot") > -1) {
                    return;
                }

                initX = this.offsetLeft;
                initY = this.offsetTop;
                mousePressX = event.clientX;
                mousePressY = event.clientY;


                function eventMoveHandler(event) {
                    repositionElement(initX + (event.clientX - mousePressX),
                        initY + (event.clientY - mousePressY));
                }

                boxWrapper.addEventListener('mousemove', eventMoveHandler, false);
                window.addEventListener('mouseup', function eventEndHandler() {
                    boxWrapper.removeEventListener('mousemove', eventMoveHandler, false);
                    window.removeEventListener('mouseup', eventEndHandler);
                }, false);

            }, false);
            // done drag support

            // handle resize
            var rightMid = a;
            var leftMid = b;
            var topMid = c;
            var bottomMid = d;

            var leftTop = e;
            var rightTop = f;
            var rightBottom = g;
            var leftBottom = h;

            function resizeHandler(event, left = false, top = false, xResize = false, yResize = false) {
                initX = boxWrapper.offsetLeft;
                initY = boxWrapper.offsetTop;
                mousePressX = event.clientX;
                mousePressY = event.clientY;

                initW = box.offsetWidth;
                initH = box.offsetHeight;

                initRotate = getCurrentRotation(boxWrapper);
                var initRadians = initRotate * Math.PI / 180;
                var cosFraction = Math.cos(initRadians);
                var sinFraction = Math.sin(initRadians);
                function eventMoveHandler(event) {
                    var wDiff = (event.clientX - mousePressX);
                    var hDiff = (event.clientY - mousePressY);
                    var rotatedWDiff = cosFraction * wDiff + sinFraction * hDiff;
                    var rotatedHDiff = cosFraction * hDiff - sinFraction * wDiff;

                    var newW = initW, newH = initH, newX = initX, newY = initY;

                    if (xResize) {
                        if (left) {
                            newW = initW - rotatedWDiff;
                            if (newW < minWidth) {
                                newW = minWidth;
                                rotatedWDiff = initW - minWidth;
                            }
                        } else {
                            newW = initW + rotatedWDiff;
                            if (newW < minWidth) {
                                newW = minWidth;
                                rotatedWDiff = minWidth - initW;
                            }
                        }
                        newX += 0.5 * rotatedWDiff * cosFraction;
                        newY += 0.5 * rotatedWDiff * sinFraction;
                    }

                    if (yResize) {
                        if (top) {
                            newH = initH - rotatedHDiff;
                            if (newH < minHeight) {
                                newH = minHeight;
                                rotatedHDiff = initH - minHeight;
                            }
                        } else {
                            newH = initH + rotatedHDiff;
                            if (newH < minHeight) {
                                newH = minHeight;
                                rotatedHDiff = minHeight - initH;
                            }
                        }
                        newX -= 0.5 * rotatedHDiff * sinFraction;
                        newY += 0.5 * rotatedHDiff * cosFraction;
                    }

                    resize(newW, newH);
                    repositionElement(newX, newY);
                }


                window.addEventListener('mousemove', eventMoveHandler, false);
                window.addEventListener('mouseup', function eventEndHandler() {
                    window.removeEventListener('mousemove', eventMoveHandler, false);
                    window.removeEventListener('mouseup', eventEndHandler);
                }, false);
            }


            rightMid.addEventListener('mousedown', e => resizeHandler(e, false, false, true, false));
            leftMid.addEventListener('mousedown', e => resizeHandler(e, true, false, true, false));
            topMid.addEventListener('mousedown', e => resizeHandler(e, false, true, false, true));
            bottomMid.addEventListener('mousedown', e => resizeHandler(e, false, false, false, true));
            leftTop.addEventListener('mousedown', e => resizeHandler(e, true, true, true, true));
            rightTop.addEventListener('mousedown', e => resizeHandler(e, false, true, true, true));
            rightBottom.addEventListener('mousedown', e => resizeHandler(e, false, false, true, true));
            leftBottom.addEventListener('mousedown', e => resizeHandler(e, true, false, true, true));

            resize(300, 200);
            repositionElement(200, 200);
        }
    </script>
      <script>
        function hideDots() {
            for (let index = 0; index < 6; index++) {
                var element = document.getElementById(`carousel-item${index}`); // get all elements        
                if (element.className.includes('active') == true) {
                    document.getElementById(`right-mid${index+1}`).style.display = "none";
                    document.getElementById(`left-mid${index+1}`).style.display = "none";
                    document.getElementById(`top-mid${index+1}`).style.display = "none";
                    document.getElementById(`bottom-mid${index+1}`).style.display = "none";
                    document.getElementById(`left-top${index+1}`).style.display = "none";
                    document.getElementById(`right-top${index+1}`).style.display = "none";
                    document.getElementById(`right-bottom${index+1}`).style.display = "none";
                    document.getElementById(`left-bottom${index+1}`).style.display = "none";
                }
            }
        }
        function showDots() {
            for (let index = 0; index < 6; index++) {
                var element = document.getElementById(`carousel-item${index}`); // get all elements        
                if (element.className.includes('active') == true) {
                    document.getElementById(`right-mid${index+1}`).style.display = "block";
                    document.getElementById(`left-mid${index+1}`).style.display = "block";
                    document.getElementById(`top-mid${index+1}`).style.display = "block";
                    document.getElementById(`bottom-mid${index+1}`).style.display = "block";
                    document.getElementById(`left-top${index+1}`).style.display = "block";
                    document.getElementById(`right-top${index+1}`).style.display = "block";
                    document.getElementById(`right-bottom${index+1}`).style.display = "block";
                    document.getElementById(`left-bottom${index+1}`).style.display = "block";
                }
            }
        }
      </script>

      <script>
        // Script for show designs by categories
        function Cat(no) {
            var elements = document.getElementsByClassName('boxes'); // get all elements
            hide1();
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].className.includes(`cat${no}`) == true) {
                    document.getElementById('main1').style.height = "33%";
                 elements[i].style.display = "block";
                 }
                else{
                 elements[i].style.display = "none";
                }
            }
           
        }
      </script>
      <script>
        function valueSender()
{

        var a= document.getElementById('modalBtn').innerText ;
        let slice = a.slice(-5);
        localStorage.setItem("myValue", slice);
        window.location.href="checkout.php";    
        localStorage.setItem("clicked", 1)
}
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>