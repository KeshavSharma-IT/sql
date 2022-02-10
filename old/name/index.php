<html>
<body>
<form method="post" action="">
<input type="text" name="uname">
<input type="password" name="upass">
<input type="submit" name="submit" value="register">
</form>
</body>
</html>
<?php
include_once 'dbCon.php';

if(isset($_POST['submit']))
{
	
$name = $_POST['uname'];

$pass = $_POST['upass'];

$q=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$pass')");
if($q)
{
echo"success";
exit;
}
else
{
echo"try again";
exit;
}
}
?>