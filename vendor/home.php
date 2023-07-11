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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <style>
        .sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 200px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

img{
    width:600px;
    height: 400px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}
.logout{
    bottom: 0px;
}

/* Style page content */
.main {
  margin-left: 215px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.font{
    font-size: 30px;
}
.main {
            
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            
           
        }
  
        .main::before {
            content: '';
            background: url('https://images.pexels.com/photos/7319193/pexels-photo-7319193.jpeg?auto=compress&cs=tinysrgb&h=650&w=940') 
                no-repeat center center/cover;
            position: absolute;
            opacity: 0.8;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="sidenav">
        <a href="upload.php">Upload Product</a>
        <a href="view.php">View Products</a>
        <a href="#">View Orders</a>
        <a href="logout.php" class="logout">Logout</a>
      </div>
      
      <!-- Page content -->
      
      <div class="main">
        
      </div>
</body>
</html>