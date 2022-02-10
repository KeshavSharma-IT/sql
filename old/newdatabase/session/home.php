<?php
session_start();

if ($_SESSION['ID']=='') {
	header("location:index.php");
}
?>


<html>
<head>
	<title></title>
</head>
<body>
	<h1> 	WELCOME MR.
	<?php
	echo $_SESSION['Username'];
	echo $_SESSION['ID'];
?>
</h1>

<a href="destroy.php"><button class="btn btn-success">LOGOUT</button></a>
</body>
</html>