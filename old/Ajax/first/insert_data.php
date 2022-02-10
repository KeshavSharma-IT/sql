<?php
include_once 'connection.php';

$a=$_POST['username'];
$b=$_POST['password'];

$z=mysqli_query($con,"insert into login values(0,'$a','$b')");
if ($z) {
	echo 1;
}
else{
	echo 0;
}
?>