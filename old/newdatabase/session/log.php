<?php
include_once 'connection.php';
session_start();

$a=$_POST['username'];
$b=$_POST['password'];
$z=mysqli_query($con,"select * from login where Username='$a' and Password='$b'");
$c=mysqli_num_rows($z);
echo $c;
if ($c>0) {

	while($row=mysqli_fetch_array($z))
	{
		$myid=$row['ID'];
	}
	$_SESSION['ID']=$myid;
	$_SESSION['Username']=$a;


}

?>