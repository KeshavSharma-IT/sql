<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container my-5 mx-5 border-primary border">
	<div class="row my-2">
		<div class="col-md-6">
	<h3 class="text-center text-success ">REGISTER FOR ID CARD</h3>
	<hr class="w-50">
</div>
<div class="col-md-6">
	<input type="file" name="photo" placeholder="photo" id="img1" >
	<button type="button" class="btn btn-success" onclick="abc()">Uplode</button>
	<div style="height: 100px; width: 100px;" class="border borde-dark my-2" id="img2"></div>
</div>
</div>
<hr class="bg-danger">
	<div class="container mb-4">
		<form method="post">
			<div class="form-row form-group">
				<div class="col-md-6">
				<label class="form-group">Name</label>
				<input type="text" name="name" placeholder="enter the name" class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-group">EMP. Code</label>
				<input type="text" name="emp" placeholder="EMP. code" class="form-control">
			</div>
		</div>

			<div class="form-row form-group">
				<div class="col-md-6">
				<label class="form-group">Father name</label>
				<input type="text" name="father" placeholder="father name" class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-group">Mother Name</label>
				<input type="text" name="mother" placeholder="mothername" class="form-control">
			</div>
		</div>

			<div class="form-row form-group">
				<div class="col-md-6">
				<label class="form-group">Designation</label>
				<input type="text" name="designation" placeholder="Designation" class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-group">Date of Join</label>
				<input type="text" name="doj" placeholder="D.O.J" class="form-control">
			</div>
		</div>
<div class="form-group">
			<label class="form-group">Address</label>
			<input type="text" name="address" class="form-control" placeholder="Address">
		</div>
		<div class="form-row form-group">
				<div class="col-md-6">
				<label class="form-group">Employees sign</label>
				<input type="text" name="employees" placeholder="Employees sign" class="form-control">
			</div>

			<div class="col-md-6">
				<label class="form-group">Auth. Sign</label>
				<input type="text" name="sign" placeholder="Auth sign" class="form-control">
			</div>
		</div>

		

		<button class="btn btn-success form-group" type="submit" name="cc" >Sign Up</button>
	</form>
</div>
</div>

<script type="text/javascript">
	function abc(){
		var a;
		a=document.getElementById('img1').value;

		document.getElementById('img2').innerHTML="<img src='"+a+"' height='100px' width='100px'>"
	}
</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<?php
include_once 'database.php';
if(isset($_POST['cc']))
{
	
		$j=$_POST['photo'];
	$a=$_POST['name'];
    $b=$_POST['emp'];
    $c=$_POST['father'];
    $d=$_POST['mother'];
    $e=$_POST['designation'];
    $f=$_POST['doj'];
    $g=$_POST['address'];
    $h=$_POST['employees'];
    $i=$_POST['sign'];
    //print_r("insert into datain values('myphoto',$a',$b,'$c','$d','$e',$f,'$g','$h','$i')");
    //exit;
    $z=mysqli_query($con, "insert into datain values('$j','$a',$b,'$c','$d','$e',$f,'$g','$h','$i')");

 if($z) 
 {
 	echo "success";
 	exit;
 } 
 else{
 	echo "try again";
 	exit;
 }
}
?>
