<?php
include_once "../shared/vendor_valid.php";
$customerid=$_SESSION['vendor_id'];
$pid=$_GET['pid'];
include_once "../shared/connection.php";
$check_query="select * from cart where pid=$pid and customerid=$customerid";
$check_result=mysqli_query($conn,$check_query);
$row_count=mysqli_num_rows($check_result);
$row_count=$row_count+1;
//if else insert or update 
$cmd="insert into cart(pid,customerid) values('$pid','$customerid')";
$status=mysqli_query($conn,$cmd);
if($status){
  echo "cart added";
  header('location:view.php');
}
else{
    echo "error";
}
 ?>