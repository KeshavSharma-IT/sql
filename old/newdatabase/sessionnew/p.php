<?php
session_start();


if($_SESSION['Id']=='')
{
header("location:loginpage.php");
}



?>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php

echo $_SESSION['Username'];
echo $_SESSION['Id'];


?></h1>
<a href="destroy.php">Log out</a>
</body>
</html>