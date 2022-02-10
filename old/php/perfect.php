<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="a">
	<input type="submit" name="click">

	<?php
	
	if (isset($_POST['click'])) {
		
		$sum=0;
		$x=$_POST['a'];

		for ($i=1;$i<=$x-1;$i++) { 
			if ($x%$i==0) {
				
				$sum=$sum+$i;
			}
		}

			if ($sum==$x) {
				echo "perfect no";
			}
			else  {
				echo "non perfrct no";
			}
			
		

	}

	?> 

</body>
</html>