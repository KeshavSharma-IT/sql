<?php
include_once 'connection.php';
if(isset($_POST['data'])){
	$a=$_POST['register_no'];
	$b=$_POST['file'];
	$c=$_POST['sname'];
	$d=$_POST['roll_no'];
	$e=$_POST['class'];
	$f=$_POST['fathername'];
	$g=$_POST['address'];

	$h=mysqli_query($con,"insert into student values('$a','$b','$c','$d','$e','$f','$g')");

	if ($h) {

		echo "success";
	}
	else{
		echo "try again";
	}
}
?>

<?php
if (isset($_POST['search'])) {
	$aa=$_POST['register_no'];

	$z=mysqli_query($con,"select * from student where ID='$aa'");
	while ($row=mysqli_fetch_array($z)) {
		$i=$row['Student_name'];
		$j=$row['Roll_no'];
		$k=$row['Class'];
		$l=$row['Father_name'];
		$m=$row['Address'];
		$n=$row['Photo'];
	}

}

?>




<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container bg-light my-5 p-5">
		<form method="post">
			<div class="form-group">
			<label>ID</label>
			<input type="text" name="register_no" placeholder="register no" style="border-width: 0px;" >
			<input type="submit" name="search" value="search" class="btn btn-success">
		</div>
			<div class="row ">
				
				<div class="col-lg-6 ml-5">
					<label>PHOTO</label>
				</div>
				<div class="col-md-4 mr-5">
					<div class="w-50 border border-primary" style="height: 110px;">
						<img src="<?php echo $n; ?>" style="height: 110px; width: 160px;">

					</div><input type="file" name="file" >
			</div>
		</div>
		<div class="form-group">
			<label>Student Name</label>
			<input type="text" name="sname" placeholder="student name" class="form-control" value="<?php echo $i; ?>">
		</div>
		<div class="form-group">
			<label>Roll no</label>
			<input type="text" name="roll_no" placeholder="roll no" class="form-control" value="<?php echo $j; ?>">
		</div>
		<div class="form-group">
			<label>Class</label>
			<input type="text" name="class" placeholder="class" class="form-control" value="<?php echo $k; ?>">
		</div>
		<div class="form-group">
			<label>Father name</label>
			<input type="text" name="fathername" placeholder="fathername" class="form-control" value="<?php echo $l; ?>">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" placeholder="Address" class="form-control" value="<?php echo $m; ?>">
		</div>

		<div class="form-group">
			
			<input type="submit" name="data" value="SUBMIT" class="form-group btn btn-success" >
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>