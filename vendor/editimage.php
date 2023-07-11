<?php 
include_once "../shared/connection.php";
$pid=$_GET['pid'];
$source_path=$_FILES['imfile']['tmp_name'];
date_default_timezone_set('Asia/Kolkata');
$unique_p="../shared/images/".date("d_M_Y_H_i_s").'.jpg';
move_uploaded_file($source_path,$unique_p);

$result=mysqli_query($conn,"update product set impath='$unique_p'  where pid=$pid");
if($result){
    echo "Product updated";
    header('location:view.php');
}
?>