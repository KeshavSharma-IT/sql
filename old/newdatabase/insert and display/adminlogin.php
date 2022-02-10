
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<td><form method="post">
				ID<br>
				<input type="text" name="a">

				<br>
				password<br>
				<input type="password" name="b">
				<br>
				<input type="submit" name="login">

	</table>

	<?php
	include_once 'love.php';
	if (isset($_POST['login'])) {
		$x=$_POST['a'];
		$y=$_POST['b'];
		// echo "select * from login where ID=".$x.", Password=".$y."";

		$z=mysqli_query($con,"select * from login where ID=".$x.", Password=".$y."");
		if ($z) {
			header ("location:displaydata.php");

		}
		else{
			echo "try again";
			exit;
		}
		
	}

	
	?>

</body>
</html>