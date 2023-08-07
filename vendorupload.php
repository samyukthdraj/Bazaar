<?php

echo "RECEIVED";
print_r($_POST);
print_r($_FILES);

$file_name = $_FILES['pdtimg']['name'];
$upload_dir = "uploads/";
$file_path = $upload_dir . $file_name;

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

if (move_uploaded_file($_FILES['pdtimg']['tmp_name'], $file_path)) {
    echo "File Uploaded Successfully";
} else {
    echo "Failed Upload";
}
// $file_name=$_FILES['pdtimg']['name'];
// $file_path="/uploads".$file_name;
// move_uploaded_file($_FILES['pdtimg']['tmp_name'],$file_path);

$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];

$conn=new mysqli("localhost","root","","acmegrade");

$status=mysqli_query($conn,"insert into products (name,price,detail,imgpath) values ('$name',$price,'$detail','$file_path')");

if($status)
{
    echo "Product Uploaded Successfully";
     header("location:vendorview.php");
}
else
{
    echo "Failed Upload";
    mysqli_error($conn);
}
?>
