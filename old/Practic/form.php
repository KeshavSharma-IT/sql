
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container border my-5  ">
		<h2 class="text-center text-primary ">HELLO ITS KESHAV HERE</h2>
		<hr class="bg-primary">

	<div class="container mb-5 ">
		<form method="post">
		<div class="form-row ">
			<div class="col-md-6 form-group">
				<label class="form-group">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Name">
			</div>

			<div class="col-md-6 form-group">
				<label class="form-group">Last name</label>
				<input type="text" name="lastname" class="form-control" placeholder="Enter lastName">
			</div>
		</div>

		<div class="form-row ">
			<div class="col-md-6 form-group">
				<label class="form-group">Email</label>
				<input type="text" name="email" class="form-control" placeholder="Enter Email">
			</div>

			<div class="col-md-6 form-group">
				<label class="form-group">Password</label>
				<input type="Password" name="password" class="form-control" placeholder="Password">
			</div>
		</div>

		<input class="btn  btn-success" type="submit" name="submit" value="submit">

</div>
</div>



</form>
</body>
</html>

<?php
include_once 'data.php';
if (isset($_POST['submit']))
 {
 	
 	
 	$a= $_POST['name'];
 	$b= $_POST['lastname'];
 	$c= $_POST['email'];
 	$d= $_POST['password'];

 $f=mysqli_query($con, "insert into formpre values('$a','$b','$c','$d')");
 
 if($f)
 {
 echo "success";
 exit;
}

 else  {
 		echo"try again";
 		exit;
 	}	
	
}
?>