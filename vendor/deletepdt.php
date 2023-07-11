<?php 
$pid=$_GET['pid'];
include_once "../shared/connection.php";
$result=mysqli_query($conn,"delete  from product where pid=$pid");
if($result){
    echo "Product deleted";
    header('location:view.php');
}
?>