<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="a" placeholder="upper">
	<input type="text" name="b" placeholder="lower">
	<input type="submit" name="click">
<?php
if (isset($_POST['click'])) {
	$x=$_POST['a'];
	$y=$_POST['b'];
	$u=strtoupper("$x"); 

	$l=strtolower("$y");
	echo "$u";
	echo "<br>";
	echo "$l";
}
	
?>
</form>

</body>
</html>