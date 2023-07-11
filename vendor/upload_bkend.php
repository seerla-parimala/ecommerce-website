<?php
include "../shared/vendor_valid.php";
include "../shared/connection.php";
$source_path=$_FILES['imfile']['tmp_name'];
date_default_timezone_set('Asia/Kolkata');
$unique="../shared/images/".date("d_M_Y_H_i_s").'.jpg';
move_uploaded_file($source_path,$unique);
$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$vendor=$_SESSION['vendor_id'];
$query="insert into product(name,price,details,impath,uploaded_by) values('$name','$price','$detail','$unique','$vendor')";
$status=mysqli_query($conn,$query);
if($status){
    echo "product uploaded";
    header('location:view.php');
}
else{
    echo "error";
}
 ?>