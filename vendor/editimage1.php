<?php 
$pid=$_GET['pid'];
echo "<form action='editimage.php?pid=$pid&name' method='post' enctype='multipart/form-data'>
<input name='imfile' type='file' accept='.jpg'>
<input type='submit' value='Submit'>
</form>"
?>
