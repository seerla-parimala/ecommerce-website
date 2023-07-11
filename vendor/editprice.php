<?php 
$pid=$_GET['pid'];
$name=$_POST['price'];
include_once "../shared/connection.php";
$result=mysqli_query($conn,"update product set price='$name'  where pid=$pid");
if($result){
    echo "Product updated";
    header('location:view.php');
}
?>