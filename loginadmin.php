<?php

session_start();
$_SESSION['login_status']=false;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$uuser=$_POST['AdminUsername'];
$upass=$_POST['AdminPassword'];


$conn=new mysqli("localhost","root","","acmegrade");
$query="select * from admin where username='$uuser'"; 
echo $query;
$result=mysqli_query($conn,$query);

if (mysqli_num_rows($result) === 1) 
{
    $row = mysqli_fetch_assoc($result);
    $hashed_password_from_db = $row['password'];

    // Verify the hashed password
    if (password_verify($upass, $hashed_password_from_db))
    {
        echo "Login Success";
        $_SESSION['login_status']=true;
         header("Location: adminhome.php");
        die();
    } 
    else
        {
        echo "Invalid Credentials";
        }
} 
    else
    {
    echo "Invalid Credentials";
    }