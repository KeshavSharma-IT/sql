<!--<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_segments = explode('/', $uri_path);

$uname='"'.$uri_segments[4].'"'; 

}
?>
-->	

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="bg-light">
<div class="container-fluid my-2 bg-white p-2">
	<div class="row">
<div class="col-md-4 col-sm-2 ml-auto text-center" style="height:20px;width:1250px;">
	<img src="ins.png" height="30px;" class="mx-5">
</div>
<div class="col-md-4 col-sm-2">
	<form class="form-inline my-2 my-lg-0 ml-5">				
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 5px; height: 29px; width: 200px;">
      
    </form>
</div>
<div class="col-md-4 col-sm-2 ">
	<img src="home.png" width="24px;" class="mx-3">
    	<img src="share.png" width="25px;"  >
    	<img src="newfeed.png" width="35px;" class="mx-3" >
    	<img src="like.png" width="30px;"  class="ml-1">
    	jhbhh
    </div>
</div>
</div>

<div class="container text-center my-5 bg-white p-3">
	<form method="post">
	<div class="row">
		<div class="col-md-4  ml-auto">
			<img src="k20.jpg" width="50px" height="50px" class="rounded-circle ml-5 " id="profile_image">
		</div>
		<div class="col-md-6 mr-5">
			<div>
				<?php
		include_once 'connection.php';

		$a=mysqli_query($con,"select * from register ");
while ($row=mysqli_fetch_array($a)) {
?>
			<b><?php echo $row['username'];?></b>
				<br>
				<a href="uplode">uplode image</a>
			</div>
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>Name</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="namee" placeholder="name" class="form-control">
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>username</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="usernamee" placeholder="usernamename" class="form-control">
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>Bio</b>
		</div>
		<div class="col-md-6">
			<textarea type="text" name="bioe" placeholder="bio" class="form-control"></textarea>
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>website</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="websitee" placeholder="website" class="form-control">
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>email</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="emaile" placeholder="email" class="form-control">
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>Mobile</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="mobilee" placeholder="mobile" class="form-control">
		</div>
	</div>

	<div class="row my-4">
		<div class="col-md-6">
			<b>Gender</b>
		</div>
		<div class="col-md-6">
			<input type="text" name="gendere" placeholder="gender" class="form-control">
		</div>
	</div>

	<div>
		<button type="submit" class="btn btn-success text-center" name="submit" >Submit</button>
	</div>


</form>
<!--<?php

include_once 'connection.php';
if (isset($_POST['submit'])) {

	$a=$_POST['namee'];
	$b=$_POST['usernamee'];
	$c=$_POST['bioe'];
	$d=$_POST['websitee'];
	$e=$_POST['emaile'];
	$f=$_POST['mobilee'];
	$g=$_POST['gender'];

}
}
?>
-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>