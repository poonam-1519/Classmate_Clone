<?php 
session_start();
?>
<?php 
  $loggedin = false;
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;}
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
    max-height: 100px;
    font-family: "Nunito", sans-serif;
}
h3{
    font-weight: bold;
    margin: 26PX 74px;
    letter-spacing: 1px;
}
h4{
    font-weight: bold;
    color: #4e4e4e;
}
.container{
    margin-left: 63px;
}
.box1{
    width: 50%;
    /* border: 1px solid; */
    height: 476px;
}
.box1 ul{
    font-size: 18px;
  
    padding: 0;
    list-style: none;
    font-weight: bolder;
    color: #4e4e4e;
}
.box1 li{
    margin-bottom: 18px;
    padding-bottom: 19px;
    border-bottom: 2px solid #efefef;
}
.box2{
    height: 712px;
    border-radius: 28px;
    box-shadow: 0px 0px 27px #b3b3b3;
    padding: 42px 38px;
    margin-left: 75px;
    width: 38%;
}
#total1{
    float: right;
    color: #001b69;
    font-size: 17px;
    font-weight: bold;
}
.bt1{
    margin-top: 20px;
    background: white;
    border-radius: 25px; 
    color: #001866;
    font-weight: bold;
    font-size: 14px;
    border: 1px solid #001866;
    padding: 10px 25px;
}
.bt1:hover{
    background: #001866;
    color: white;
  
}
.insideBox{
    background: #f5f8ff;
    height: 201px;
    margin-top: 16px;
    padding-right: 8px;
    padding-top: 16px;
}
.insideBox ul{
    font-size: 14px;
    color: #001463;
}
.box2 p{
    font-size: 15px;
    font-weight: bold;
}
.Points{
    font-size: 13px;
    color: #4e4e70;
    margin-bottom: 24px;
    font-weight: bold;
}
.Amount{
    font-weight: bold;
    color: #4e4e70;
    font-size: 18px;
}
#payNow1{
    border-radius: 26px;
    font-size: 12px;
    cursor: not-allowed;
    padding: 10px 63px;
    color: white;
    background: #001866;
    border: none;
}
#signInBtn{
    padding: 0px 0px;
    height: 57px;
    width: 152px;
    background: #001463;
    color: white;
    font-size: 15px;
    border-radius: 32px;
    border: none;
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

<body>
    <?php require "partials/_nav.php"; ?>
    <h3>Checkout Information</h3>
    
    <div class="container d-flex">
        <div class="box1">
        <hr>
        <ul>
            <div style="border-bottom: 2px solid #efefef;" class="d-flex justify-content-between">
                <li  style="border:none;margin-top: 14px;">Contact Information</li>
              
            </div>
            <li style="margin-top: 20px;">Shipping Address</li>
            <li>Billing Address</li>
            <li>Shipping Method</li>
            <li>Payment Mode</li>
        </ul>
        </div>
        <div class="box2">
            <h4>Order Details</h4>
            <h6 class="d-inline">Total Amount:</h6>
            <span id="total1">₹ 0</span>
            <button class="d-block bt1" data-bs-toggle="modal" data-bs-target="#cartModal">View Details</button>
            <div class="insideBox">
                <ul>
                    <li>Customized order takes 5 to7 days to dispatch and 2 to 3 more days to delivery ( depending upon the delivery location)</li>
                    <li>Country of origin: India</li>
                    <li>Sold by <a href="#" style="color: #001b69;">The Tech Tonic</a></li>
                    <li>MRP Inclusive of tax</li>
                    <li>Delivery of the orders would be carried out by 3rd party courier services</li>
                </ul>
            </div>
            <hr>
            <p class="d-block">Payment Breakdown</p>
            <div class="d-flex justify-content-between"><span class="Points">Cart Total</span><span id="cartTotal1" class="Amount">₹ 0</span></div>
            <div class="d-flex justify-content-between"><span class="Points">Coupon Discount</span><span class="Amount">₹ 0</span></div>
            <div class="d-flex justify-content-between"><span class="Points">Shipping Charges </span><span class="Amount" style="font-size: 14px;">₹ 80</span></div>
            <div class="d-flex justify-content-between" style="height: 41px;"><span class="Points" style="font-size: 18px;">Total Price <br><span style="font-size: 10px; color: orange;">Inclusive of GST*</span></span><span id="totalPrice1" class="Amount">₹ 0</span></div>
            <hr>
            <div class="d-flex justify-content-between"><span id="final1" style="font-size: 18px;color: #001b69;font-weight: bold;">₹ 0</span><button id="payNow1" disabled>Pay Now</button></div>
        </div>
    </div>



    <script>
    
        var b1 = localStorage.getItem("myValue");


        if(b1 === "₹ 600"){
            document.getElementById('total1').innerText = "₹ 680";
            document.getElementById('cartTotal1').innerText = "₹ 600";
            document.getElementById('totalPrice1').innerText ="₹ 680";
            document.getElementById('final1').innerText ="₹ 680";
        }
        if(b1 === "₹ 900"){
            // alert("helo");
            document.getElementById('total1').innerText = "₹ 980";
            document.getElementById('cartTotal1').innerText = "₹ 900";
            document.getElementById('totalPrice1').innerText = "₹ 980";
            document.getElementById('final1').innerText ="₹ 980";
        }
      
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>




