<?php
include_once 'dbCon.php';
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['course'];
$d=$_POST['address'];

$zz=mysqli_query($con,"insert into register values(0,'$a','$b','$c','$d')");
if ($zz)
{
	echo 1;
}
else
{
	echo 0;
}
?>