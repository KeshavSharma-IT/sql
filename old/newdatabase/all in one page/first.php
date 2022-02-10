
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Keshav Pandit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	 <a class="dropdown-item" href="#" id="page1">Login</a>
          <a class="dropdown-item" href="#" id="student1" >Student</a>
          <a class="dropdown-item" href="#" id="admin1">Admin</a>
          
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="page" style="display: none;">
	<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				<label class="form-group">username</label>
				<input type="text" name="usernamepage" placeholder="username" class="form-control" id="username"  >
				
			</div>
			<div class="form-group">
				<label class="form-group">Password</label>
				<input type="password" name="passpage" placeholder="Password" class="form-control" id="password" >
				
			</div>
			<div class="form-group">
				<input type="submit" name="loginpage" value="LOGIN" class="btn btn-primary " >
			
				
			</div>
			<div>
			
		</div>	
		
		</form>


</div>



<div id="student" style="display: none;">
	<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				
				<input type="text" name="namestudent" placeholder="name" class="form-control " >
			</div>
			<div class="form-group">
				
				<input type="text" name="usernamestudent" placeholder="username" class="form-control " >
			</div>
			<div class="form-group">
				
				<input type="password" name="passwordstudent" placeholder="password" class="form-control ">
			</div>
			<div class="form-group">
				
				<input type="text" name="mobile" placeholder="mobile" class="form-control"  >
				
			</div>
			<div class="form-group">
				
		<div>
			<input type="submit" name="registerstu" class="btn btn-success ml-2" value="Register">
				
			</div>
			<div>
		
		</div>


</div>
</form>
</div>


<div id="admin" style="display: none;">
	<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				<label class="form-group">admin username</label>
				<input type="text" name="usernameadmin" placeholder="username" class="form-control" id="username"  onkeyup="ab()">
				
			</div>
			<div class="form-group">
				<label class="form-group"> admin Password</label>
				<input type="password" name="passadmin" placeholder="Password" class="form-control" id="password" onkeyup="ab()">
				
			</div>
			<div class="form-group">
				<input type="submit" name="loginadmin" value="LOGIN" class="btn btn-primary " >
			
				
			</div>
			<div>
			<label id="error"></label>
		</div>	
		
		</form>


</div>
<script type="text/javascript">
	$("#page1").click(function () {
		$("#admin").hide();
		$("#student").hide();
		$("#page").show();

	});
	$("#admin1").click(function () {
		$("#page").hide();
		$("#student").hide();
		$("#admin").show();

	});
	$("#student1").click(function () {
		$("#page").hide();
		$("#admin").hide();
		$("#student").show();
	});
</script>

<?php

include_once 'connection.php';
if (isset($_POST['loginpage'])) {
	
	$a=$_POST['usernamepage'];
	$b=$_POST['passpage'];

	$z=mysqli_query($con,"select * from student where Username='$a' and Password='$b'")	;
	if ($z) {

		echo "success";
			}
			else {
				echo "fail";
			}
}

?>
<?php 

if (isset($_POST['registerstu'])) {
	
		
	$a=$_POST['namestudent'];
	$b=$_POST['usernamestudent'];
	$c=$_POST['passwordstudent'];
	$d=$_POST['mobile'];
	
	$z=mysqli_query($con,"insert into student values('$a','$b','$c','$d')");
	if ($z) {

		echo "success";
			}
			else 
			{
				echo "fail";
			}
}



 ?>


 <?php
 if (isset($_POST['loginadmin'])) {
	
	$a=$_POST['usernameadmin'];
	$b=$_POST['passadmin'];
	//echo "select * from admin where Username='$a' and Password='$b'";
//exit;
	$z=mysqli_query($con,"select * from admin where Username='$a' and Password='$b'");
	if ($z) {

		echo "success";
			}
			else {
				echo "fail";
			}
}

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>