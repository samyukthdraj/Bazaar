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

$pid=$_GET['productid'];

$status=mysqli_query($conn,"delete from products where productid=$pid");

if($status)
{
    echo "Deleted Product Successfully";
    header("location: vendorview.php");
}
else
{
    echo "Failed to delete";
    mysqli_error($conn);
}