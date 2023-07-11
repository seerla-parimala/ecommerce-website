<?php 
$pid=$_GET['pid'];
echo "<form action='editprice.php?pid=$pid&price' method='post'>
<input type='text' name='price' placeholder='New Price'>
<input type='submit' value='Submit'>
</form>"
?>
