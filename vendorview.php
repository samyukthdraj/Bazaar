<html>
    <head>
        <style>
            .card
            {
                display: flex;
                justify-content: space-around;
            }
            .card-img-top
            {
                width : 19rem;
                height: 20rem;
            }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- #fcbad3 is the pink shade used -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <title>BAZAAR</title>
    <body>
        <!-- HEADER -->
            <div class="header">
                <div class="logo">
                    <img class="logo" src="image_bazaar.png" alt="Logo Image">
                </div>
                <div class="homev">
                    <!-- <div class="active1"> -->
                   
                    <a href="loggedinhome.php">Home</a>
                    <a href="vendorhome.php">Upload Products</a>
                    <a href="vendorview.php">View Products</a>
                    <!-- <a href="vendororders.php">View Orders</a>   -->
                    <!-- MAKE A SIGNOUT PAGE -->
                    <a href="signout.html">Signout</a> 
                </div>
                 </div>
            
            <a href="cart.html" class="home" style="background-color: #fcbad3; border: none; position: absolute; top: 20px; right: 35px;"><i class='fas fa-cart-plus'></i></a></a>
                

<?php

session_start();
if(!isset($_SESSION['login_status']))
{
    echo"Illegal Login";
    die;
}
if($_SESSION['login_status']==false)
{
    echo"Login Failed, Unauthorised attempt";
}

$conn=new mysqli("localhost","root","","acmegrade");
$result=mysqli_query($conn, "select * from products");

echo "<div class='d-flex'>";
while($row=mysqli_fetch_assoc($result))
{
    $pid=$row['productid'];
   $name=$row['name'];
   $price=$row['price'];
   $detail=$row['detail'];
   $imgpath=$row['imgpath'];


    
   echo " <div class='card' style='width: 19rem;'>
   <img src='$imgpath' class='card-img-top' alt='...'>
   <div class='card-body'>
     <h5 class='card-title'>$name</h5>
     <h5 class='card-title'>Rs $price </h5>
     <p class='card-text'>$detail</p>
     <a href='vendordelete.php?productid=$pid' class='btn btn-danger'>Delete</a>
   </div>
 </div>";
}
echo "</div>";
?>


