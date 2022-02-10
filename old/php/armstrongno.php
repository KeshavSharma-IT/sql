<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="a">
		<input type="submit" name="click">
	</form>
	<?php
	if (isset($_POST['click'])) {
		
		$x=$_POST['a'];

		$t=$x;
		$sum=0;	

while ($t!=0)
{
$r=$t%10;

$sum=$sum+$r;
$t=$t/10;

}
 	echo $sum;		
		
	}




	?>

</body>
</html>