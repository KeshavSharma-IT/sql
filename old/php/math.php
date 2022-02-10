<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="a" placeholder="value of a">
	<input type="text" name="b" placeholder="value of b">
	<input type="submit" name="click">
	
	
</form>
<?php
if (isset($_POST['click'])) {
	$x=$_POST['a'];
	$y=$_POST['b'];

	 echo "convert a=";
	 echo (abs($x));

echo "<br>value of pi=";
	 echo (pi());

	 echo "<br>min=";
	 echo (min($x,$y));
	
   echo "<br>max=";
	 echo (max($x,$y));

	  echo "<br>sqrt=";
	 echo (sqrt($x));


}
?>
</body>
</html>