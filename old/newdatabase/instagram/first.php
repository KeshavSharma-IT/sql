<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri_segments = explode('/', $uri_path);

$uname='"'.$uri_segments[4].'"'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="bg-light">
<div class="container-fluid my-2 bg-white p-2">
	<div class="row">
<div class="col-md-4 col-sm-2 ml-auto text-center" style="height:20px;width:1250px;">
	<img src="../ins.png" height="30px;" class="mx-5">
</div>
<div class="col-md-4 col-sm-2">
	<form class="form-inline my-2 my-lg-0 ml-5" method="post" action="login.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 5px; height: 29px; width: 200px;">
      
    </form>
</div>
<div class="col-md-4 col-sm-2 ">
	<img src="../home.png" width="24px;" class="mx-3">
    	<img src="../share.png" width="25px;"  >
    	<img src="../newfeed.png" width="35px;" class="mx-3" >
    	<img src="../like.png" width="30px;"  class="ml-1">
    	jhbhh
    </div>
</div>
</div>

<div class="container my-5 ">
	<div class="row ml-auto">
	<div class="col-md-5 col-sm-4 " style="position: relative;left: 250px;">
		<img src="../k20.jpg" width="120px" height="120px" class="rounded-circle mx-5 " id="profile_image">
	</div>
	<div class="col-md-7 ">
		<?php
		include_once 'connection.php';
		$a=mysqli_query($con,'select * from register where username='.$uname);
while ($row=mysqli_fetch_array($a)) {
?>
		<div id="username" ><b><?php echo $row['username'];?></b>&nbsp;&nbsp;


	
		<a href="../editprofile.php"><button style="border-radius: 5px; border-width: 1px;" >Edit profile</button></a></div>
		<p class="my-2"><b>26 </b>Post &nbsp;&nbsp;&nbsp;&nbsp;<b>12.5k</b>Follower  &nbsp;&nbsp;&nbsp;&nbsp;<b>260</b>Following</p>
	
	<div id="name">
		<b><?php echo $row['name'];?></b>
	</div>

		
	
	<div id="bio" ></div>
		
	</div>
	</div>
</div>

<div class="container my-5 mx-5">
	<div class="row">
		<div class="col-md-3">
			<div id="image">
			</div>

<?php
}

		?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>