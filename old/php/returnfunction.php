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

	if (isset($_POST['click'])) 
	{
		function add(int x)
		{
		return $x;
		}

		$t=add($x=$_POST['$a']);

		echo $t;		



	}


	?>

</body>
</html>