
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="">

	<input type="text" name="a"><br>
	<input type="password" name="b"><br>
	<input type="submit" name="c" value="login"><br>
</form>
<?php
include_once 'love.php';
if (isset($_POST['c'])) 
{

$x= $_POST['a'];
$y= $_POST['b'];
$z=mysqli_query($con,"select * from login where Email_id='".$x."' and Password='".$y."'");
if($z)
{
	header("location:facebook.html");
	exit;

}
else
{
	echo"try again";
	exit;
}

}
?>



</body>
</html>