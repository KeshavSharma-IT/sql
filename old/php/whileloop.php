
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
		
		$i=1;
		while ($i<=$x) {
			echo $i;
			$i++;
		}

	}
	 ?>
</form>
</body>
</html>