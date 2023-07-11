<html>
    <head>
        <style>
            .mcard{
                width:300px;
                height:fit-content;
                display:inline-block;
                border: 2px solid black;
                margin: 10px;
                padding: 5px;
            }
            .mcard img{
                width: 270px;
                height: 150px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>
<?php 
include_once "../shared/vendor_valid.php";
include_once "../shared/connection.php";
include "menu.html";
$vendor_id=$_SESSION['vendor_id'];
$result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where customerid=$vendor_id");
while($row=mysqli_fetch_assoc($result)){
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['details'];
    $impath=$row['impath'];
    $cartid=$row['cartid'];
    echo "<div class=' mcard'>
    <h2>$name</h2>
    <h2>$price</h2>
    <img src='$impath'>
    <p>$detail</p>
    <div class='d-flex justify-content-around'>
    <div>
    <a href='removecart.php?cartid=$cartid'>
    <button class='btn btn-danger'>Remove</button>
    </a>
    </div>
    <div>
    <button class='btn btn-warning'>Place Order</button></div>
    </div>
     </div>";
}
?>