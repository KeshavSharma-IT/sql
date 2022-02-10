
<html>
<head>
	<title></title>
</head>
<body background="C:\wamp\www\image\Wallpapers 2\w1.jpg" style="background-size: cover;">
<center>




	<div style="height: 400px; width: 300px; border-color: black; border:solid; position: relative;top: 150px;" >
		<form method="post" action="">

<a href="index.php">
<input type="button" name="" value="Login"
style="height: 25px; width: 120px; border-radius: 40px; background-color:gray; position: relative;left: 0px; top: 10px;"></a>
<a href="register.php">
<input type="button" name="" value="Regester"
style="height: 25px; width: 120px; border-radius: 40px; background-color:gray; position: relative;left: 0px; top: 10px;"></a><br>

<br>
<img src="k20.jpg" height="50px"; width="50px;" style="border-radius: 100px;"><br>

<br>Email<br>
		<input type="text" name="a" placeholder="email" style="border-radius: 20px;"><br>
password<br>
<input type= "password" name="b" placeholder="password" style="border-radius: 20px;"><br><br>
<input type="submit" name="c" value="Login"
style="height: 35px; width: 120px; border-radius: 40px; background-color: #3AEA80"><br>
<a href style="color: white;">Forget password</a>
</form>
	</div>


	</center>

</body>
</html>

<?php
include_once 'database.php';
if (isset($_POST['c'])) 
{

$x= $_POST['a'];
$y= $_POST['b'];
$z=mysqli_query($con,"select * from loginregister where Email='".$x."' and Password='".$y."'");
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



