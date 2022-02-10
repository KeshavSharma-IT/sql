<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="submit" name="click">
</form>
	<?php
	if (isset($_POST['click'])) {
		
?>
<table border="2">
	<tr><td>
		<?php
		readfile("new.txt");
		?>
	
		
	<?php
	}

	?>
	</td>
		
	</tr>


</table>

</body>
</html>