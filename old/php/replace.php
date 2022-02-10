<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="text" name="c">
		<input type="submit" name="click">

		<?php

		if (isset($_POST['click'])) {
			
			$x=$_POST['a'];
			$y=$_POST['b'];
			$z=$_POST['c'];

			$p=str_replace($x, $y, $z);

			echo $p;



		}

		?>

</body>
</html>