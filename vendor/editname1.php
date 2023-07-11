<?php 
$pid=$_GET['pid'];
echo "<form action='editname.php?pid=$pid&name' method='post'>
<input type='text' name='Name' placeholder='New Name'>
<input type='submit' value='Submit'>
</form>"
?>

