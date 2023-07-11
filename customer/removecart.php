<?php 
$cartid=$_GET['cartid'];
include_once "../shared/connection.php";
$result=mysqli_query($conn,"delete  from cart where cartid=$cartid");
if($result){
    echo "Product deleted";
    header('location:viewcart.php');
}
?>