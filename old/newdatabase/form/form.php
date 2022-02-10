<?php

include_once 'connection.php';
if(isset($_POST['mydata']))
{
	$h=$_POST['mydata'];
	$xx=mysqli_query($con,"select * from form where Id='$h'");
	while ($row=mysqli_fetch_array($xx)) {
		$name=$row['Name'];
		$address=$row['Address'];
		$mobile=$row['Mobile'];
echo $name;

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="container my-5 p-5 bg-light">
		<div >
			<button class="btn btn-primary mb-4" id="add">ADD</button>
		</div>
		<div class="container bg-white p-3" id="show1" style="display: none">
			<form method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" placeholder="Name" class="form-control" name="name" value="<?php echo $name;?>">
				</div>

				<div class="form-group">
					<label>Address</label>
					<input type="text" placeholder="Address" class="form-control" name="address">
				</div>

				<div class="form-group">
					<label>Mobile</label>
					<input type="text" placeholder="Mobile" class="form-control" name="mobile">
				</div>
				
			
		</div>
		<div>
					<button type="submit" class="btn btn-primary  mb-4 my-5" name="send">SEND</button>
					<button class="btn btn-primary ml-5 mb-4 my-5" id="hide">CANCEL</button>
				</div>

				
	</div>

	<?php
	include_once 'connection.php';
	if (isset($_POST['send'])) {
	$a=$_POST['name'];
	$b=$_POST['address'];
	$c=$_POST['mobile'];
	$z=mysqli_query($con,"insert into form values(0,'$a','$b','$c')");
	
	}
	?>


<div class="container p-5 bg-light border border-dark">
<table border="2" width="100%">
	<tr bgcolor="blue" class="text-white text-center">
		<th>S.No</th>
		<th>NAME</th>
		<th>ADDRESS</th>
		<th>MOBILE</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
<?php
{

	$x=mysqli_query($con,"select * from form ");
	while ($row=mysqli_fetch_array($x)) {
		?>
		<tr>
			<td><?php echo $row['ID']?></td>
			<td><?php echo $row['Name']?></td>
			<td><?php echo $row['Address']?></td>
			<td><?php echo $row['Mobile']?></td>
			<td class="text-center"><button type="submit" name="del" value="<?php echo $row['ID'];?>"><i class="fa fa-trash" ></i></button>
	</td>
	<td class="text-center">
     <button type="submit" value="<?php echo $row[ID];?>" name="mydata" class="editdata"><i class="fa fa-edit" ></i></button>
 </td>
      </tr>
			<?php
	}
}
?>
<?php
include_once 'connection.php';
if (isset($_POST['del']))
{
$g=$_POST['del'];
$h=mysqli_query($con,"delete from form where ID='$g'");
}
?>

</form>
</table>
</div>
<script type="text/javascript">
		$("#add").click(function()
		{
		$("#show1").show();
	});
		$("#hide").click(function(){
			$("#show1").hide();
		});
$(".editdata").click(function(){
			$("#show1").show();
			
		});
		
	</script>
	
</body>
</html>