<?php 
session_start();
if(!isset($_SESSION['login'])){
 echo "Invalid credentials";
 die;
}
if($_SESSION['login']==false){
    echo "unauthorised attempt";
    die;
}
$email=$_SESSION['vendor_email'];
 ?>