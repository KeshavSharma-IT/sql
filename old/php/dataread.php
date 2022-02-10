<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form method="post">
	<input type="submit" name="click">
</form>
<?php
if(isset($_POST['click']))
{
readfile("new.txt");
}
?>
</body>
</html>