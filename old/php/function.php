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
	if (isset($_POST['click'])) {
		
		function add()
		{
			$x=$_POST['a'];
			echo $x;

		}
		add();


		




	}

	  ?>
</body>
</html>