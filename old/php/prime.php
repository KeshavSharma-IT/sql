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
		if (isset($_POST)) {
			$c=0;
			$x=$_POST['a'];

			for ($i=1; $i<=$x ; $i++) { 
				
				if ($x%$i==0)
				 {
					$c++;
				}
			}
				if ($c==2) {
					echo "prime no";
					
				
			}
			else {
				echo "non prime";

			}

		}


		?>

</body>
</html>