<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="a">
	<input type="text" name="b">
	<input type="submit" name="click">
	<a href="adminlogin.php"><input type="button" name="display" value="display" ></a>
</form>

<?php
include_once 'love.php';
 
if (isset($_POST['click']))
 {
 	$x=$_POST['a'];
 	$y=$_POST['b'];
 	$z=mysqli_query($con,"insert into displaytable values('$x','$y')");
 	if ($z) {
 		echo "sucessfull";
 		
 	}
	
	else{
		echo "try again";
		
	}
}

?>



</body>
</html>