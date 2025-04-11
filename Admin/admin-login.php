<?php
session_start() ;
include "db.php" ;
$email=$_POST['email'] ;
$pass=$_POST['pass'] ;

if($con){
	//echo "connected";
	$sql="select * from admin where email='$email' and password='$pass '";
	$x=mysqli_num_rows(mysqli_query($con,$sql));
	if($x==1){
		$_SESSION['email']=$email;
		header("location:dashboard.php");


	}
	else{ ?>
<script>
alert("wrong login details");
window.location="index.php";
</script>
<?php
	}
}
?>
