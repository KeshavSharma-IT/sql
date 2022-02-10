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
		
		$x=$_POST['a'];

		$y=str_word_count("$x");

		echo $y;
	}
?>
</body>
</html>