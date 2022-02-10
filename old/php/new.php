<?php
if(isset($_POST['submit']))
{
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$x+$y;
	echo $z;
}
?>