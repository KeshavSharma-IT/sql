<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row">

	<!--<div class="container text-center border my-5 " style="height: 400px; width:320px;">
		<h2 class="text-success">EMPLOYEE CARD</h2>
		<hr class="bg-dark">
		<div class="border border-dark mx-5 my-3" style="height: 100px; width: 100px;position: relative;left:40px;"></div>
		<form>
		<table>

			<tr >
				<td>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="disname"></td>
			</tr>
			<tr>
				<td>Emp Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="disemp"></td>
			</tr>
			<tr>
				<td>Designation</td>
				<td><input type="text" name="disdesignation"></td>
			</tr>
			<tr>
				<td>D.F.J&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><input type="text" name="disdoj"></td>
			</tr>
		</table>
	</form>
		
	</div>
-->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

		
				<div class="container text-center border my-5" style="height: 400px; width:320px;">
		<h2 class="text-success">EMPLOYEE CARD</h2>
		<hr class="bg-dark">
		<form method="post" action="">
		<input type="text" name="search" >
		<button type="submit" class="btn btn-success" name="submit">search</button>
			</form>
<?php
include_once 'database.php';
$Name="";
$Emp_Id="";
$Designation="";
$D_F_J="";
if(isset($_POST['submit']))
{
   $id= $_POST['search'];


$c=mysqli_query($con,"select * from datain where Emp_code=".$id);




while($row=mysqli_fetch_array($c))
{
$Name=$row['Name'];
$Emp_Id=$row['Emp_code'];
$Designation=$row['Designation'];
$D_F_J=$row['D.F.J'];
//$url=$row['url'];

}

}

?>
<div class="border border-dark mx-5 my-3" style="height: 100px; width: 100px;position: relative;left:40px;"></div>

			<label class="form-group">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="disname" class="form-group" value="<?php echo $Name; ?>">
			<label class="form-group">Emp Id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="disemp" class="form-group" value="<?php echo $Emp_Id; ?>">
			<label class="form-group">Designation</label>&nbsp;<input type="text" name="disdesignation" class="form-group" value="<?php echo $Designation; ?>">
			<label class="form-group">D.F.J</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="disdoj" class="form-group" value="<?php echo $D_F_J; ?>">
	
	</div>
</div>


