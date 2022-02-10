
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

			<div class="container my-5 w-25 p-5  border border-primary">
		<form method="post">
			
			<div class="form-group">
				<input type="text" name="username" placeholder="username" class="form-control">
			</div>			
			<div class="form-group">
				<input type="text" name="password" placeholder="password" class="form-control">
			</div>
			<div >
				<input type="submit"  value="login" name="login" class="form-group mt-4 btn btn-success mr-5">
				

				<a href="login.php"><input type="button"  value="Register" class="form-group mt-4 btn btn-success mr-2">

					</a>
			</div>
		</form>
	</div>
	<?php
	include_once 'connection.php';
	if(isset($_POST['login'])){
	$a=$_POST['username'];
	$b=$_POST['password'];

	$f=mysqli_query($con,"select * from register where Username='$a' and Password='$b'");
	if($f)
	{	while($row=mysqli_fetch_array($f))
		{

		header("location:firstpage.php/".$row['Username']);
	}
	}
	else{
	echo "try again";
}
}

	?>

	







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>