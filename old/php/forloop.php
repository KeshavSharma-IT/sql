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

		for ($i=0; $i<=$x ;$i++ ) {
			echo '<br>';
			echo $i;

		}


		}
		
	

?>
</form>

</body>
</html>