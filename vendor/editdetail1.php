<?php 
$pid=$_GET['pid'];
echo "<form action='editdetail.php?pid=$pid&price' method='post'>
<input type='text' name='detail' placeholder='Details'>
<input type='submit' value='Submit'>
</form>"
?>
