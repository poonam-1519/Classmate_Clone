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
if(isset($_GET['delete'])){
    $order_no = $_GET['delete'];
    $delete = true;
    $deleted = "DELETE FROM `books_details` WHERE `Order_no`='$order_no'";
    $result = mysqli_query($conn, $deleted);
  }
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


</style>

<body >
    <?php require "partials/_nav.php"; ?>

    <div class="container" style="min-height: 50vh; width: 100%;">
        <h2 style="font-weight: bold; margin-top: 45px;">My Orders</h2>
        <!-- Data Table -->
  <div class="container my-5" style="    box-shadow: 0px 0px 21px #6792a6;
    border-radius: 17px;
    background: #c9c9f8;">
  
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Order no.</th>
          <th scope="col">Size</th>
          <th scope="col">Pages</th>
          <th scope="col">Binding</th>
          <th scope="col">Ruling</th>
          <th scope="col">On</th>
          <th style="text-align: right;" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php
              $sql = "SELECT * FROM `books_details`";
              $result = mysqli_query($conn, $sql);
            
            if(!$result==0){
                $incr = 1;
                while ($num = mysqli_fetch_assoc($result)) {    
                      echo "<tr>
                      <th scope='row'>" . $incr . ".</th>
                      <td>" . $num['Book_size'] . "</td>
                      <td>" . $num['Book_pages'] . "</td>
                      <td>" . $num['Book_binding'] . "</td>
                      <td>" . $num['Book_ruling'] . "</td>
                      <td>" . $num['Order_time'] . "</td>
                      <td style='text-align: right;'><button class='delete btn btn-sm btn-secondary' id=d".$num['Order_no'].">Delete</button></td>
                      </tr>"; 
                      $incr += 1;
                    }
               }
          ?>
      </tbody>
    </table>
  </div>
    </div>


    <?php require "partials/_footer.php"; ?>
    <div class="container1"
        style="padding: 0;height: 30px;width: 100%;max-width: 100%;">
        <p class="text-center text-dark fs-6 my-2">Copyright © 2022 ITC Ltd. All rights reserved.</p>
    </div>
    <script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
       order_no = e.target.id.substr(1,);
        if(confirm("Do you want delete this order?")){
          console.log("Yes");
          window.location = `/CollegeProject/myOrder.php?delete=${order_no}`;
        }
        else{
          console.log("No");
        }
      })
    })
  </script>
      
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>




