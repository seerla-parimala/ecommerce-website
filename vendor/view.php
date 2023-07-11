<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    
        <style>
            .card{
                width:300px;
                height:fit-content;
                display:inline-block;
                border: 2px solid black;
                margin: 10px;
                padding: 5px;
            }
            .card img{
                width: 300px;
                height: 150px;
            }
            .main{
              
              width:300px;
                height:fit-content;
                display:inline-block;
                border: 2px solid black;
               margin: 20px;
                padding: 5px;
                background-color: white;
            }
            .main img{
                width: 275px;
                height: 150px;
            }
            h2{
              color: red;
            }
    
        </style>
    </head>
    <body>
        <?php 
        $bg_color='#dce3f0';
        echo "<body style='background-color:$bg_color;'>'";
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
</html>


<?php 
include "../shared/vendor_valid.php";
include "../shared/connection.php";
include "menu.html";

$vendor=$_SESSION['vendor_id'];
$query="select * from product where uploaded_by=$vendor";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['details'];
    $impath=$row['impath'];
    echo "<div class='main'>
    <h2>$name</h2>
    
    <img src='$impath'>
    <h3>$price</h3>
    <p>$detail</p>
    <div class='d-flex justify-content-around'>
    <a href='deletepdt.php?pid=$pid'>
    <button class='btn btn-danger'>Delete</button>
    </a>
    <div class='dropdown'>
  <button class='btn btn-warning dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    Edit
  </button>
  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
    <a class='dropdown-item' href='editname1.php?pid=$pid'>Name</a>
    <a class='dropdown-item' href='editprice1.php?pid=$pid'>Price</a>
    <a class='dropdown-item' href='editimage1.php?pid=$pid'>Image</a>
    <a class='dropdown-item' href='editdetail1.php?pid=$pid'>Details</a>
  </div>
</div>
    </div>
     </div>";
}

?>