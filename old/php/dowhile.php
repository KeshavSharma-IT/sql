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

		$x=$_POST['a'];
		$i=1;
		$sum=0;
		do {
			$sum=$sum+$i;
			$i++;


		}
		while ($i<=$x );
		echo $sum;
		
	}

	  ?>

</body>
</html>