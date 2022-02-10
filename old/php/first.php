
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="a">
		<input type="text" name="b"><br><br>
		<input type="submit" name="click">

		
		<?php
		if (isset($_POST['click'])) {
			
		

	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$x+$y;

	echo $z;
	
}

?>
	
</form>
</body>
</html>