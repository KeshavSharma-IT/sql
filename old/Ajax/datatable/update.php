<?php
include_once 'dbCon.php'
 
$d=$_POST['ID']
	$z=mysqli_query($con,"delete register where ID='$d'");
	if ($z) {
		echo 1;
	}
	else{
		echo 0;
	}


?>