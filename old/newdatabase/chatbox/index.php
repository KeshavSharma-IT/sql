<?php
include_once 'data.php';
if (isset($_POST['send'])) {

	$a=$_POST['messege'];

	$z=mysqli_query($con,"insert into client1 values('$a')");
	if ($z) {
		echo "successfull";
	}
	else{

		echo "try again";

	}
	
}


?>

<?php
include_once 'data.php';
if (isset($_POST['send2'])) {

	$aa=$_POST['messege2'];

	$zz=mysqli_query($con,"insert into client2 values('$aa')");
	if ($zz) {
		echo "successfull";
	}
	else{

		echo "try again";

	}
	
}


?>




<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">KESHAV PANDIT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success mb-5 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  

</nav>
<center>
<button name="refresh" type="submit" class=" btn btn-success mt-5">REFRESH</button>
<button name="refresh2" type="submit" class=" btn btn-success mt-5">REFRESH</button>
</center>


<div class="container bg-white">

	<div class="row">
		<div class="col-md-6 col-sm-4 border border-primary my-5 p-3" >
			<form method="post">
			<div class="my-5">
				
<?php

include_once 'data.php';

$q=mysqli_query($con,"select * from client2");
while ($row=mysqli_fetch_array($q))
 {
 	?>
	<p ><?php echo $row['Messege2'];?></p>
	<?php
}
			
			?>

	
				<input type="text" name="messege" class="form-control" class="my-5">
				<input type="submit" name="send" value="send" class="btn btn-outline-success my-2">
			

			</div>
		</form>
</div>

<div class="col-md-6 col-sm-4 border border-primary my-5 p-3" >
	<form method="post">
			<div   class="my-5">
				<?php

include_once 'data.php';

$q=mysqli_query($con,"select * from client1");
while ($row=mysqli_fetch_array($q))
 {
 	?>
	<p ><?php echo $row['Messege'];?></p>
	<?php
}
			
			?>
				<input type="text" name="messege2"  style="width: 400px;" class="my-5">
				<input type="submit" name="send2" value="send2" class="btn btn-outline-success">
			

			</div>
		</form>
</div>


</div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>