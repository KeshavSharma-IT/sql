<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

$user=$uri_segments[4];
?>


<?php
include_once 'connection.php';
	if (isset($_POST['search2'])) {
		$a=$_POST['search'];

		$f=mysqli_query($con,"select * from register where  Name='$a'");
		while ($row=mysqli_fetch_array($f)) {
			$name=$row['Username'];
		}
		
	}
	?>	

	<?php
	if (isset($_POST['add'])) {
		$b=$_POST['aa'];
		$c=$_POST['bb'];
		$p=mysqli_query($con,"update register set Person='$c' where Username='$b'");
		if ($p) {
			echo "successful";
		}

		else{
			echo "try again";	
		}
		
	}
?>


	<?php
	if (isset($_POST['request1'])) {
		$b=1;
		$c=$_POST['bb'];

		$p=mysqli_query($con,"update register set Person='', Request='$b' where Username='$c'");
		if ($p) {
			echo "request accept";
		}

		else{
			echo "try again";	
		}
		
	}



	?>

<?php
	if (isset($_POST['request2'])) {
		$b=0;
		$c=$_POST['bb'];

		$p=mysqli_query($con,"update register set Person='', Request='$b' where Username='$c'");
		if ($p) {
			echo "request no accept";
		}

		else{
			echo "try again";	
		}
		
	}



	?>


<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<form method="post">
	<div class="container bg-light mt-5 p-5">
		<div  class="mb-5"><center> welcome <b><?php echo $user;?></b></center>
			<input type="hidden" name="bb" value="<?php echo $user;?>" style="border-width:0px;font-weight: bold;" class="bg-white">	
		</div>
		<div class="row">
			<div class="col-md-8">
				<input type="text" name="search" placeholder="search" class="form-control">
				</div>

				<div class="col-md-2">
				<input type="submit" name="search2" value="search" class="btn btn-success">
				</div>
			</div>
			<div class="mt-2">
				<div ><?php echo $name;?></div>
			<input type="hidden" name="aa"  class="my-5 bg-light" value="<?php echo $name;?>" style="border-width: 0px;">
			<input type="submit" name="add" value="ADD" class="btn btn-success">

		</div>
	<?php
	$g=mysqli_query($con,"select * from register where Username='$user'");
			while ($row=mysqli_fetch_array($g)) {
	echo $row['Person'];
	if($row['Person']!='')
	{
	?>
	<?php echo $row['person'];?>
		<input type="submit" name="request1" value="yes">
		<input type="submit" name="request2" value="no">
		<?php
		}
	}
		?>
		</div>
		</form>

	
																						

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>	