<!DOCTYPE html>
<html>
<head>
	<title>college</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
	
		<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				<label>NAME</label>
				<input type="text" name="name" placeholder="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Moblie</label>
				<input type="text" name="mobile" placeholder="mobile" class="form-control">
			</div>

			<div class="form-group">
				<label>Course</label>
				<select class="form-control" name="course">
					<option>Course</option>
					<option>BCA</option>
					<option>BBA</option>
					<option>BSC</option>
					<option>MA</option>
					<option>BA</option>

				</select>
				</div>
				<div class="form-group"> 
				<label class="form-group">Gender</label><br>
				<label class="form-group">Male</label>
				<input type="radio" name="male" value="male">
				<label class="form-group">female</label>
				<input type="radio" name="male" value="female">

      	     <label class="form-group">LGBTQ</label>
				<input type="radio" name="male" value="LGBTQ">
	</div>
	<div class="form-group">
<button type="submit" class="btn btn-success form-group" name="submit"> submit</button>
<a href="login.php">
<button type="button" class="btn btn-success form-group" > admin</button></a>

		</form>
		
		<?php
		include_once 'database.php';
		if(isset($_POST['submit'])){

		$a=$_POST['name'];
		$b=$_POST['email'];
		$c=$_POST['mobile'];
		$d=$_POST['course'];
		$e=$_POST['male'];
if($a!='' && $b!='' && $c!='' && $d!='' && $e!='')
{
	
		$f=mysqli_query($con,"insert into student values('$a','$b','$c','$d','$e')");
		if($f)
		{
			echo "success";
		}
		else
		{
		echo "try again";
	}
	}
	else
	{
	?>
	<script type="text/javascript">
		alert ("record not fill");
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
