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
    die;
}

// $userid=$_SESSION['userid'];
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
                <div class="home">
                    <div class="active1">
                   <a href="home.html">Home</a>
                    </div>
                 </div>
                <div class="home">
                    <button class="product">Products &#8675</button> 
                  
                    <div class="dropdown">
                        <a href="loggedinbags.html">Bags</a>
                        <a href="loggedindress.html">Dress</a>
                        <a href="loggedinheels.html">Heels</a>
                        <a href="loggedinpants.html">Pants</a>
                        <a href="loggedinshirts.html">Shirts</a>
                        <a href="loggedinshoes.html">Shoes</a>
                        <a href="loggedinwatch.html">Watches</a>
                    </div>
                </div>
                <div class="home">
                    <form class="home search" action="search.html">
                        <input class="searchbar" type="search" placeholder="Enter item name" style="width: 220px; height: 36px;">
                        <button class="searchbar" style="font-size: large;">Search</button>
                    </form>
                </div>
                <div class="home login">
                    <a href="signout.php">Signout</a>
                </div>
            </div>
            
            <a href="cart.html" class="home" style="background-color: #fcbad3; border: none; position: absolute; top: 20px; right: 35px;"><i class='fas fa-cart-plus'></i></a></a>
                
            


    <div class="body">
            <!-- BODY WITH TAGLINE -->
            <div class="row1">
                <div class="col1">
                    <h1 style="margin-left: 50px;"> WHERE THE <span style="color:#ed0e63 ;">UNIVERSE</span> COMES TO SHOP!!</h1>
                </div>
                <div class="col1">
                    <img src="images/cart.png" alt="NO CART IMAGE FOUND">
                </div>
            </div>
            <!-- CATEGORIES -->
        <div class="categories">
            <h2 class="title">FEATURED PRODUCTS</h2>
            <div class="container1">
                <div class="row1">
                    <div class="col2">
                        <img src="images/bag5.jpg" style="height: 260px; width: 250px;" alt="NO SHOE IMAGE FOUND">
                    </div>
                    <div class="col2">
                        <img src="images/shirt3.jpg" style="height: 260px; width: 250px;" alt="NO DRESS IMAGE FOUND">
                    </div>
                    <div class="col2">
                        <img src="images/heel6.jpg" style="height: 260px; width: 250px;" alt="NO SHIRT IMAGE FOUND">
                    </div>
                </div>
            </div>
        </div>

            <!-- PRODUCTS -->
            <div class="container1">
                <h2 class="title">PRODUCTS</h2>
                <div class="row1">
                    <div class="col3">
                        <img src="images/bag4.jpg" height="283px" alt="">
                        <h4>Pink Bag</h4>
                        <p>Rs.500</p>
                    </div>
                    <div class="col3">
                        <img src="images/heel4.jpeg" height="283px">
                        <h4>Red Heels</h4>
                        <p>Rs.800</p>
                    </div>
                    <div class="col3">
                        <img src="images/dress4.jpg" style="height: 283px;" alt="">
                        <h4>Blue Dress</h4>
                        <p>Rs.580</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/bag5.jpg" height="283px" alt="">
                        <h4>Cream Bag</h4>
                        <p>Rs.3000</p>
                    </div>
                    <div class="col3">
                        <img src="images/heel5.jpg" height="283px">
                        <h4>Black Heels</h4>
                        <p>Rs.890</p>
                    </div>
                    <div class="col3">
                        <img src="images/dress5.jpg" style="height: 283px;" alt="">
                        <h4>Pink Dress</h4>
                        <p>Rs.780</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/bag6.jpg" height="283px" alt="">
                        <h4>Black Bag</h4>
                        <p>Rs.900</p>
                    </div>
                    <div class="col3">
                        <img src="images/heel6.jpg" height="283px">
                        <h4>Blue-Green Heels</h4>
                        <p>Rs.8000</p>
                    </div>
                    <div class="col3">
                        <img src="images/dress6.jpg" style="height: 283px;" alt="">
                        <h4>White Dress</h4>
                        <p>Rs.1000</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/pant4.jpeg" height="283px" alt="">
                        <h4>Navy Blue Pant</h4>
                        <p>Rs.900</p>
                    </div>
                    <div class="col3">
                        <img src="images/shirt4.jpg" height="283px">
                        <h4>Red Printed Shirt</h4>
                        <p>Rs.850</p>
                    </div>
                    <div class="col3">
                        <img src="images/shoe4.jpg" style="height: 283px;" alt="">
                        <h4>Black Shoes</h4>
                        <p>Rs.600</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/pant5.jpeg" height="283px" alt="">
                        <h4>Cream Pant</h4>
                        <p>Rs.1000</p>
                    </div>
                    <div class="col3">
                        <img src="images/shirt5.jpg" height="283px">
                        <h4>White Printed Shirt</h4>
                        <p>Rs.950</p>
                    </div>
                    <div class="col3">
                        <img src="images/shoe5.jpg" style="height: 283px;" alt="">
                        <h4>Brown Shoes</h4>
                        <p>Rs.800</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/pant6.jpg" height="283px" alt="">
                        <h4> Blue Jeans</h4>
                        <p>Rs.1200</p>
                    </div>
                    <div class="col3">
                        <img src="images/shirt3.jpg" height="283px">
                        <h4>Newspaper Printed Shirt</h4>
                        <p>Rs.1950</p>
                    </div>
                    <div class="col3">
                        <img src="images/shoe6.jpg" style="height: 283px;" alt="">
                        <h4>Black Sneakers</h4>
                        <p>Rs.900</p>
                    </div>
                </div>
                <div class="row1">
                    <div class="col3">
                        <img src="images/watch4.jpg" height="283px" alt="">
                        <h4>Daniel Wellington Watch for Women</h4>
                        <p>Rs.9000</p>
                    </div>
                    <div class="col3">
                        <img src="images/watch5.jpg" height="283px">
                        <h4>Seiko Watch for Men</h4>
                        <p>Rs.85000</p>
                    </div>
                    <div class="col3">
                        <img src="images/watch6.jpg" style="height: 283px;" alt="">
                        <h4>Traser Unisex Watch</h4>
                        <p>Rs.6000</p>
                    </div>
                </div>
            </div>

    </div>
    <!-- THIS DIV ABOVE IS THE CLOSING FOR THE BODY DIV -->

    <!-- FOOTER -->
    <div class="footer">    
        <img src="image_bazaar.png" alt="" class="logofooter">
        <br>Contact us<br>
        Mobile Number: <span style="color: #ed0e63;"> +91 8129759071 </span><br>
        Email: <span style="color: #ed0e63;"> www.bazaarshopping.com</span><br><br>
        &copy; All rights reserved by Bazaar.<br>   
    </div>

    </body>
</html>