<html>
<body>
<form method="post" action="">
id<input type="text" name="id"><br>
NAME<input type="text" name="name"><br>
CLASS<input type="text" name="class"><br>
ROLL NO<input type="text" name="roll"><br>
<input type="submit" value="find" name="find"><br>
<input type="submit" value="insert" name="insert"><br>
<input type="submit" value="delete" name="delete"><br>
</body>
</html>

<?php
include_once 'main.php';
if(isset($_POST['insert']))
{
	$idn = $_POST['id'];
	$nm = $_POST['name'];
	$clss = $_POST['class'];
	$rll = $_POST['roll'];
	$a=mysqli_query($con,"insert table keshav values($idn,'$nm','$clss','$rll')");
	if($a)
	{
		echo"successfully";
		exit;
	}
	else
	{
		echo"try again";
		exit;
	}
	}
	?>
