<?php

$uuser=$_POST['VendorUsername'];
$upass=$_POST['VendorPassword'];
// $cipher_text=md5($upass);
$hashed_password = password_hash($upass, PASSWORD_DEFAULT);

$conn=new mysqli("localhost","root","","acmegrade");
$status=mysqli_query($conn,"insert into vendor(username,password) values ('$uuser', '$hashed_password')");
if($status)
{
    echo "Registration Success";
    header("Location: login.html");
    die();

}
else
{
    echo "Registration Failed <br>";
    echo mysqli_error($conn);
}
?>