
<html>
<head>
	<title></title>
</head>
<body background="C:\wamp\www\image\Wallpapers 2\w1.jpg" style="background-size: cover;">
<center>

<form method="post" action="">


	<div style="height: 400px; width: 300px; border-color: black; border:solid; position: relative;top: 150px;" >
		
<a href="index.php">
<input type="button" name="" value="Login"
style="height: 25px; width: 120px; border-radius: 40px; background-color:gray; position: relative;left: 0px; top: 10px;"></a>
<a href="register.php">
<input type="button" name="" value="Regester"
style="height: 25px; width: 120px; border-radius: 40px; background-color:gray; position: relative;left: 0px; top: 10px;"></a><br>

<br>
<br>First name<br>
<input type="text" name="a" placeholder="First name" style="border-radius: 20px;"><br>
Second name<br>
<input type= "text" name="b" placeholder="Second name" style="border-radius: 20px;"><br>
Email<br>
<input type="text" name="c" placeholder="email" style="border-radius: 20px;"><br>
password<br>
<input type= "text" name="d" placeholder="password" style="border-radius: 20px;"><br><br>
<input type="submit" name="e" value="Regester"
style="height: 35px; width: 120px; border-radius: 40px; background-color: #3AEA80"><br>

</form>
	</div>

	</center>

</body>
</html>



<?php
include_once 'database.php';
if(isset($_POST['e']))
 {
$f=$_POST['a'];
$m=$_POST['b'];
$r=$_POST['c'];
$s=$_POST['d'];

$x=mysqli_query($con,"insert into loginRegister values('$f', '$m','$r','$s')");
if($x)
 {

echo "scussesful";
exit;
}
else
{
echo "try again";
exit;
}


}
?>

