<?php
$email=$_POST['email'];
$password=$_POST['pass1'];
$mobile=$_POST['mobileno'];
$address=$_POST['address'];
include_once "../shared/connection.php";
$cmd="insert into vendor_user(email,password,mobile_no,pickup_address) values('$email','$password','$mobile','$address')";
$status=mysqli_query($conn,$cmd);
if($status){
    echo "registration success";
    header('location:index.html');
}
else{
    echo "email already exists";
}

?>