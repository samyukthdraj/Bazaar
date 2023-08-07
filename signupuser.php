<?php

$uuser=$_POST['UserUsername'];
$upass=$_POST['UserPassword'];
// $cipher_text=md5($upass);
$hashed_password = password_hash($upass, PASSWORD_DEFAULT);

$conn=new mysqli("localhost","root","","acmegrade");
$status=mysqli_query($conn,"insert into user(username,password) values ('$uuser', '$hashed_password')");
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