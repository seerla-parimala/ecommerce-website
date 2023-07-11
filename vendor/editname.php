<?php 
$pid=$_GET['pid'];
$name=$_POST['Name'];
include_once "../shared/connection.php";
$result=mysqli_query($conn,"update product set name='$name'  where pid=$pid");
if($result){
    echo "Product updated";
    header('location:view.php');
}
?>