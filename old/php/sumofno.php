<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="a">
	<input type="submit" name="click">
<?php
if (isset($_POST)) {
	$sum=0;
	$x=$_POST['a'];

	for ($i=1; $i<=$x ; $i++) { 
		$sum=$sum+$i;
	}
	echo $sum;
}

  ?>

</body>
</html>