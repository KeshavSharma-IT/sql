<?php
include_once 'connection.php';

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['course'];
$d=$_POST['address'];


$z=mysqli_query($con,"insert into reg values(0,'$a','$b','$c','$d')");
if ($z) {
	echo 1;
}
else{
	echo 0;
}

?>