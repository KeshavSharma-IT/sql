<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_segments = explode('/', $uri_path);

$uname='"'.$uri_segments[4].'"'; 

?>

<?php
include_once 'connection.php';
if (isset($_POST['search']))
 {
 	
	$a=$_POST['name'];
	$z=mysqli_query($con,"select * from register where Name='$a'");
	while ($row=mysqli_fetch_array($z)) {
		$username=$row['Username'];
	}
}
?>

<?php
		include_once 'connection.php';
		$aa=mysqli_query($con,'select * from register where Username='.$uname);
while ($row=mysqli_fetch_array($aa)) {

?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form method="post">
	<div class="container bg-white  my-5 border border-primary ">
		
		<center>Welcome <b><?php echo $row['Username'];?></b>
		<input type="hidden" name="bb" value="<?php echo $row['Username'];?>" style="border-width:0px;font-weight: bold;" class="bg-white">	
		</center>


	<div class="bg-light my-5 p-5">
		<div class="row">
		<div class="col-sm-9">
			<?php
			
			if($row['person']!='')
			{
				?>
			
			<?php echo $row['person'];?>
			<input type="submit" value="Yes" name="request_update">
			<input type="submit" value="No" name="request_update1">
			<?php
		}

			?>

		<input type="text" placeholder="search friend" class="form-control" name="name">
	</div>
	<div class="col-sm-3">
		<input type="submit" value="search" name="search" class="btn btn-success">

	</div>
</div>
<?php 
}
?>
<div class="mx-2 my-2"><?php echo $username; ?><input type="hidden" name="aaa" value="<?php echo $username; ?>" style="border-width:0px" class="bg-light">

</div>
<input type="submit" value="add" name="add" class="btn btn-success my-5">
	
</div>
</div>

</form>



<?php
if (isset($_POST['add']))
 {
 	$b=$_POST['aaa'];
 	$c=$_POST['bb'];
 	//echo "insert into friendrequest values('$b')";
//echo "update register set person='$b' where Username='$c'";
//exit;
 	$p=mysqli_query($con,"update register set person='$c' where Username='$b'");
 	if ($p) {
 		echo "request send";
 	}
 	else {
 		echo "request can not be send";
 	}

	
}

?>
<?php
if (isset($_POST['request_update']))
 {
 	$b=1;
 	$c=$_POST['bb'];
 	//echo "insert into friendrequest values('$b')";
//echo "update register set person='$b' where Username='$c'";
//exit;
 	$p=mysqli_query($con,"update register set person='',request='$b' where Username='$c'");
 	if ($p) {
 		echo "request accept";
 	}
 	else {
 		echo "request can not be send";
 	}

	
}


if (isset($_POST['request_update1']))
 {
 	$b=0;
 	$c=$_POST['bb'];
 	//echo "insert into friendrequest values('$b')";
//echo "update register set person='$b' where Username='$c'";
//exit;
 	$p=mysqli_query($con,"update register set person='',request='$b' where Username='$c'");
 	if ($p) {
 		echo "request not accept";
 	}
 	else {
 		echo "request can not be send";
 	}

	
}

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>