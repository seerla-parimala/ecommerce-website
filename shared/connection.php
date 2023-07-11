<?php 
$conn= new mysqli('localhost','root','','ecommerce','12345');
if($conn->connect_error){
    echo "connection failed";
    die;
}
?>