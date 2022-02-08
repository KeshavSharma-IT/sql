<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form method="post">
	<div class="container my-5 ">
		<div class="row ">
			
			<div class="col-6 my-5 border border-dark p-5">
				<div class="form-group">
					<label class="form-group">Name</label>
					<input type="text" class="form-control" name="a" placeholder="name">
				</div>
				<div class="form-group">
					<label class="form-group">Email</label>
					<input type="text" class="form-control" name="b" placeholder="email">
				</div>
				<div class="form-group">
					<label class="form-group">Password</label>
					<input type="text" class="form-control" name="c" placeholder="password">
				</div>
				<div>
					<input type="submit" name="sub" class="btn btn-danger" value="submit">
					<a href="login.php"><input type="button" name="logins" class="btn btn-success mx-5" value="login"></a>
			</div>
		</div>

</div>
</div>
</form>
<?php
include_once 'con.php';
if (isset($_POST['sub'])) {
	
	$f=$_POST['a'];
	$g=$_POST['b'];
	$h=$_POST['c'];
	
	$i=mysqli_query($con,"insert into register values('$f','$g','$h')");
	if ($i) {
		
		echo "succesful";
		exit;
	}
	else{
		echo "try again";
		exit;
	}
}

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>