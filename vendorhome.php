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


?>

<html>
    <head>
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
                    <a href="signout.php">Signout</a> 
                </div>
                 </div>
            
            <a href="cart.html" class="home" style="background-color: #fcbad3; border: none; position: absolute; top: 20px; right: 35px;"><i class='fas fa-cart-plus'></i></a></a>
                
            <div class="vendorboxmain">
                <form action="vendorupload.php" enctype="multipart/form-data" method="post" class="vendorbox">
                    <input type="text" name="name" placeholder="Product Name" class="vendorbox1">
                    <input type="number" name="price" placeholder="Product Price" class="vendorbox2">
                    <textarea name="detail" id="" cols="30" rows="5" placeholder="Enter details" class="vendorbox3"></textarea>
                    <input type="file"name="pdtimg" accept="" class="vendorbox4">
                    <button class="vendorbtn">Upload</button>
                </form>
            </div>


    
    <!-- FOOTER
    <div class="footer">    
        <img src="image_bazaar.png" alt="" class="logofooter">
        <br>Contact us<br>
        Mobile Number: <span style="color: #ed0e63;"> +91 8129759071 </span><br>
        Email: <span style="color: #ed0e63;"> www.bazaarshopping.com</span><br><br>
        &copy; All rights reserved by Bazaar.<br>   
    </div> -->

    </body>
</html>