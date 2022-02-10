<?php
include_once 'dbCon.php';
session_start();
$c=$_POST['username'];
$d=$_POST['password'];

$zz=mysqli_query($con,"select * from logindata where Username='$c' and Password='$d'");
$cc=mysqli_num_rows($zz);

echo $cc;
if($cc>0)
{
	while ($row=mysqli_fetch_array($zz))
	{
		$myid=$row['Id'];
	}
	$_SESSION['Id']=$myid;
	$_SESSION['Username']=$c;


}






?>
