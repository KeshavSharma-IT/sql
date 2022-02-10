
			<?php
			include_once 'database.php';
			if (isset($_POST['click'])) {
				
				$a=$_POST['search2'];
				$b=$_POST['name'];
				$c=$_POST['address'];
				$d=$_POST['moblie'];
				//if ($a!='' && $b!='' && $c!='' && $d!='') 
				//{
				
				$f=mysqli_query($con,"insert into card values('$a','$b','$c','$d')");
				if ($f) 
				{
					echo "successful";
				}
				else
				{
					echo "try again";
				}
				
				//}
			}

			

			
			$name="";
			$address="";
			$no="";
			if(isset($_POST['searchdata']))
			{
				$id=$_POST['search2'];

				$h=mysqli_query($con,"select * from card where ID=$id");
				while($row=mysqli_fetch_array($h))
				{

						$name=$row['Name'];
						$address=$row['Address'];
						$no=$row['mobile_no'];

						
				}
			}


			?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title>instagram</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
		<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			<div class="form-group">
				<label>Search</label>
				<input type="text" name="search2" placeholder="search" class="form-control my-2">
				<input type="submit" name="searchdata" value="Search" class="btn btn-success form-control">
			</div>

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
			</div>

			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="moblie" class="form-control" value="<?php echo $no; ?>">
			</div>

			<div class="form-group">
				<button class="btn btn-success" type="submit" name="click">Submit</button>
				
			</div>
			</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


