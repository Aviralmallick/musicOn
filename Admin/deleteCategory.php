<?php
include "db.php" ;
$id=$_GET['serialNo'];
$sql="delete from addcategory where id='$id'";
mysqli_query($con,$sql);
header("location:viewCategory.php");

?>