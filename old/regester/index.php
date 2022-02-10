
<html>
<head>
	<title>LOG In and Registar</title>
	<style>
		div{

			height: 400px;
			width: 300px;
			background-color: skyblue;
			position: relative;
			top: 130px;
			border-radius: 15px;

		}
}


	</style>
</head>
<body><center>

	<div><br><b><a href="twoinonelogin.php"> LOGIN</a> &nbsp;&nbsp;/&nbsp;&nbsp;<a href="index.php">
		REGISTER</a><b>
		<hr color="black"><br>
		<form method="post" action="">
		
	
	<input type="text" placeholder="FIRST NAME" name="a"><br>
				<br><input type="text" placeholder="LAST NAME" name="b"><br>
				<br>
				<input type="text" placeholder="Username" name="c"><br>
				<br>
				<input type="Password" placeholder="Password" name="d"><br><br>
				<input type="submit" value="REGISTER" name="submit"><BR>
				&nbsp;&nbsp;&nbsp;
</form>

</div>



</center>
</body>
</html>

<?php

include_once 'love.php';
if(isset($_POST['submit']))
{
$f= $_POST['a'];
$L= $_POST['b'];
$E= $_POST['c'];
$P= $_POST['d'];
$x=mysqli_query($con,"insert into ids values('$f','$L','$E','$P')");
if($x)
{
	echo"sucessfull";
	exit;
}
else
{
	echo"try";
	exit;
}
}


?>