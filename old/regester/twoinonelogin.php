
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



		
.button{
	height: 20px;
	width: 168px;
	background-color: green;
}


	</style>
</head>
<body><center>
	<form method="post" action="">

	<div><br><b><a href="twoinonelogin.php"> LOGIN</a> &nbsp;&nbsp;/&nbsp;&nbsp;<a href="index.php">REGISTER</a><b>
		<hr color="black"><br>
		<img src="k20.jpg" height="50px"; width="50px"><br>
				<b>Keshav Sharma</b><br>
				<input type="text" placeholder="Username" name="a"><br>
				<br>
				<input type="Password" placeholder="Password" name="b"><br><br>
				<input type="submit" value="LOGIN" name="login"><BR>
				&nbsp;&nbsp;&nbsp;Forget username / Password


</div>.



</form>
</center>
</body>
</html>

<?php
include_once 'love.php';
if (isset($_POST['login'])) 
{

$x= $_POST['a'];
$y= $_POST['b'];
$z=mysqli_query($con,"select * from ids where Email='".$x."' and Password='".$y."'");
if($z)
{
	header("location:k20.jpg");
	exit;

}
else
{
	echo"try again";
	exit;
}

}
?>



