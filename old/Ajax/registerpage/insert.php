<?php
include_once "connection.php";

$a=$_POST['Name'];
$b=$_POST['Password'];
$c=$_POST['Email'];
$d=$_POST['Mobile_no'];
$e=$_POST['Address'];
$f=$_POST['City'];
$g=$_POST['State'];
$h=$_POST['District'];
$i=$_POST['Zip'];
$j=$_POST['Check'];

$z=mysqli_query($con,"insert into reg values(0,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
if ($z) {
	echo 1;
}
else{
	echo 0;
}

?>