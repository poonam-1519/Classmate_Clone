<?php
 session_start();

 $update = false;
 $insert = false;
 $delete = false;
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "users";
 
 $conn = mysqli_connect($server,$username,$password,$database);
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $insert = false;

        $pages = $_POST['pages'];
        $size = $_POST['size'];
        $binding = $_POST['binding'];
        $ruling = $_POST['ruling'];

        $insert = "INSERT INTO `books_details` (`Book_pages`, `Book_size`,`Book_binding`, `Book_ruling`) VALUES ('$pages', '$size','$binding','$ruling')";
        $result = mysqli_query($conn, $insert);
        if($result){
            echo '<script>window.location.href ="quickTips.php"</script>';
        }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

    .container {
        display: flex;
        padding: 0;
        margin: 0;
    }

    .part1 {
        background-color: #d6e2fe;
        height: 120vh;
        width: 50%;
    }

    .part1 img {
        margin: auto;
        position: fixed;
        display: flex;
        transform: translate(25%, 25%);
    }

    .part2 h2 {
        text-align: center;
        color: #101452;
        margin-left: 108px;
        margin-top: 34px;

    }

    .part2 h3 {
        color: #001654;
        text-align: center;
        margin-left: 104px;
        font-weight: bold;
    }

    .options {
        height: 678px;
        margin: 31px 64px;
        width: 612px;
        padding: 22px 38px;

    }

    .lables {
        margin-top: 25px;
        font-size: 20px;
        font-weight: bold;
        color: #4f4f4f;
    }

    .pages {
        padding: 30px 11px;
        background: #f4eff4;
        width: 75%;
        margin-left: 58px;
        border-radius: 50px;
        height: 83px;
    }

    .pages a {
        text-decoration: none;
        border-radius: 50px;
        color: #001654;      
        padding: 23px 78px;
    }


    .innner {
        display: flex;
        margin: auto;
        margin-bottom: 20px;
        justify-content: space-between;
    }

    .outline {
        border-radius: 50px;
        display: inline;
    }

    #b1,
    #b3,
    #b5,
    #b7 {
        border: 2px solid #001654;
    }
    .quantity{
        width: 75%;
        display: flex;
        margin-left: 133px;
        height: 56px;      
    }
    .quantity a{
          text-decoration: none;
    }
    .tableof6{
        height: 100%;
        background: #d5e2fd;
        width: 66px;
        margin-right: 17px;
        text-align: center;
        border-radius: 43px;
        display: flex;
    }
    .tableof6:hover{
        background-color: #001150; 
    }
    .table:hover{
        
        color: #ffffff;  
    }
    .table{
        font-size: 17px;
        font-weight: bold;
        color: #7c7c7c;
        margin: auto;
    }
    .btn1{
        border: 2px solid #001150;
        margin: 20px 0px 0 51px;
        border-radius: 38px;
        padding: 14px;
        background: white;
        letter-spacing: 1px;
        font-weight: bold;
        color: #001150;
        width: 74%;
    }
    .btn1:hover{
        background-color: #001150; 
        color: #ffffff;   
    }
  
    .btn2{
        width: 100%;
        color: white;
        padding: 17px;
        background: #000e4e;
        border: none;
        letter-spacing: 1px;
        font-weight: bold;
        border-radius: 50px;
        margin-top: 29px;
        margin-bottom: 42px;
    }
    .btn2:hover{
        background-color: #0023a0; 
        color: #ffffff;   
    }
    .point{
        background: #d5e2fd;
        padding: 0px 9px;
        margin-right: 14px;
        border-radius: 20px;
    }
    
</style>

<body onload="">
    <?php require "partials/_nav.php"; ?>
    <div class="container">

        <div class="part1">
            <img src="Pictures/design1.jpg"
                alt="">
        </div>
        <div class="part2">
            <h2>Start By Choosing Your</h2>
            <h3>NOTEBOOK TYPE</h3>
            <div class="options">
                
                <div class="innner">
                    <span class="lables">Pages</span>
                    <div class="pages">
                        <div class="outline"
                            id="b1"
                            onclick="outline1()"
                            style="padding: 23px 0px;">
                            <a href="#"
                                id="a1"
                                style="font-weight: bold;background: #d6e2fe;">140</a>
                        </div>
                        <div class="outline"
                            id="b2"
                            onclick="outline2()"
                            style="padding: 23px 0px;">
                            <a href="#"
                                id="a2"
                                style="padding: 23px 76px;">172</a>
                        </div>
                    </div>
                </div>
                <div class="innner">
                    <span class="lables">Size</span>
                    <div class="pages"
                        style="padding: 20px 11px;">
                        <div class="outline"
                            id="b3"
                            onclick="outline3()"
                            style="padding: 14px 0px 35px 0px;">
                            <a href="#" id="a3"
                                style="background: #d6e2fe;font-weight: bold;   padding: 14px 38px 35px 34px;">
                                <p style="display: inline-flex;padding: 0;text-align: center;">Long
                                    Notebook<br>
                                    (29.7 x 21 cm)</p>
                            </a>
                        </div>
                        <div class="outline"
                            id="b4"
                            onclick="outline4()"
                            style="padding: 14px 0px 35px 0px;">
                            <a href="#" id="a4"
                                style="padding: 14px 40px 35px 34px;">
                                <p style="display: inline-flex;padding: 0;text-align: center;">Short
                                    Notebook<br>
                                    (24 x 18 cm)</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="innner">
                    <span class="lables">Binding</span>
                    <div class="pages">
                        <div class="outline"
                            id="b5"
                            onclick="outline5()"
                            style="padding: 23px 0px 23px 0px;">
                            <a href="#" id="a5"
                                style="font-weight: bold;background: #d6e2fe;padding: 23px 70px;">Spiral</a>
                        </div>
                        <div class="outline"
                            id="b6"
                            onclick="outline6()"
                            style="padding: 23px 0px 23px 0px;">
                            <a href="#" id="a6"
                                style="padding: 23px 41px;">Center Stapled</a>
                        </div>
                    </div>
                </div>
                <div class="innner">
                    <span class="lables">Ruling</span>
                    <div class="pages">
                        <div class="outline"
                            id="b7"
                            onclick="outline7()"
                            style="padding: 23px 0px 23px 0px;">
                            <a href="#" id="a7"
                                style="background: #d6e2fe;font-weight: bold;padding: 23px 70px;">Ruled</a>
                        </div>
                        <div class="outline"
                            id="b8"
                            onclick="outline8()"
                            style="padding: 23px 0px 23px 0px;">
                            <a href="#" id="a8"
                                style="padding: 23px 65px;">Unruled</a>
                        </div>
                    </div>
                </div>
                
                <div class="quantity">
                    <a href="#"> <div onclick="outline9()" class="tableof6"  id="b9" style="border: 2px solid #001452;"><p id="p1" class="table">6</p></div></a>
                    <a href="#">  <div onclick="outline10()" class="tableof6" id="b10" ><p id="p2" class="table">12</p></div></a>
                    <a href="#"> <div onclick="outline11()" class="tableof6" id="b11" ><p id="p3" class="table">18</p></div></a>
                    <a href="#"> <div onclick="outline12()" class="tableof6" id="b12" ><p id="p4" class="table">24</p></div></a>
                    <a href="#"><div onclick="outline13()" class="tableof6" id="b13"  style="margin: 0;"><p  id="p5"class="table">30</p></div></a>           
                </div>
                <span class="lables">Quantity</span>
                <button class="btn1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Bulk Order</button>
              
                <form action="specification.php" method="post">
                    <a href="quickTips.php">      
                        <button type="submit" class="btn2" onclick="setValue()">Continue</button>
                    </a>
                    <input class="d-none" type="text" id="value1" name="pages"></input>
                    <input class="d-none" type="text" id="value2" name="size"></input>
                    <input class="d-none" type="text" id="value3" name="binding"></input>
                    <input class="d-none" type="text" id="value4" name="ruling"></input>
                    <p style="font-size: 15px;"><em class="point">i</em>Minimum Pack Size is 6</p>
                    <p style="font-size: 15px;"><em class="point">i</em>Shipping charge Rs.80</p>
                    <p style="font-size: 15px;"><em class="point">i</em>MRP inclusive of tax</p>
                    <p style="font-size: 15px;"><em class="point">i</em>Cover page type - Soft cover</p>
                    <p style="font-size: 15px;"><em class="point">i</em>Customized order takes 5-7 days to dispatch & 2-3 more days to delivery (depending upon the delivery location)  </p>                  
                </form>
            </div>
        </div>
        
    </div>
                    
    <script src="specification.js"></script>
    <script>
        function setValue() {
            
    if(b1.style.border === "none"){
        document.getElementById('value1').value =  document.getElementById('b2').innerText;
    }
    else{
        document.getElementById('value1').value =  document.getElementById('b1').innerText;   
    }
    if(b3.style.border === "none"){
        document.getElementById('value2').value =  document.getElementById('b4').innerText;
    }
    else{
        document.getElementById('value2').value =  document.getElementById('b3').innerText;
    }
    if(b5.style.border === "none"){
        document.getElementById('value3').value =  document.getElementById('b6').innerText;
    }
    else{
        document.getElementById('value3').value =  document.getElementById('b5').innerText;
    }
    if(b7.style.border === "none"){
        document.getElementById('value4').value =  document.getElementById('b8').innerText;
    }
    else{
        document.getElementById('value4').value =  document.getElementById('b7').innerText;
    }
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
<script>
   

</script>
</html>
<?php include 'partials/_bulkOrderModal.php'; ?>