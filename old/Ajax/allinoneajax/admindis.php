<?php
include_once 'connection.php';

$a=$_POST['name'];
$b=$_POST['email'];
	
$f=mysqli_query($con,"select count(*) as count_recode from admin where Username='$a' and Password='$b'");
if ($f)
{
	while($row=mysqli_fetch_array($f))
	{
		if($row['count_recode']>0)
			echo 1;
		else
		
			echo 2;
		
	}
	}
else{
	echo 0;
}


?>