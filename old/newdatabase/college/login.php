<!DOCTYPE html>
<html>
<head>
	<title>instagram</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
		<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			<div class="text-center mb-3" style="font-family:lucida handwriting; font-size:30px;"><b>instagram</b></div>
			<div class="form-group">
				<label class="form-group">username</label>
				<input type="text" name="username" placeholder="username" class="form-control" id="username"  onkeyup="ab()">
				
			</div>
			<div class="form-group">
				<label class="form-group">Password</label>
				<input type="password" name="pass" placeholder="Password" class="form-control" id="password" onkeyup="ab()">
				
			</div>
			<div class="form-group">
				<input type="submit" name="login" value="LOGIN" class="btn btn-primary " onclick="abc()">
			
				<a href="index.php"><input type="button" value="Register" class="btn btn-success ml-5"></a>
			</div>
			<div>
			<label id="error"></label>
		</div>	
		
		</form>

		<?php
		include_once 'database.php';
		if (isset($_POST['login']))
		{
			$a=$_POST['username'];
			$b=$_POST['pass'];
			if ($a!='' && $b!='') {
				
			$z=mysqli_query($con,"select * from admin where ID='$a' and Password='$b'");
			if ($z) {
				header("location:table.php");

				
			}
		

			
			else{
				echo "try again";
			}
		}
			else
			{
				?>
				<script type="text/javascript">
					alert("recode not fill");
				</script>
				<?php
			}
			
		}
		?>


		









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>