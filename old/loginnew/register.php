<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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


<div class="container center my-5 p-3 border" style="height: 450px; width: 300px;">
	
		<form method="post">
			<div class="form-group">
		<label class="form-group">Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group ">
		<label class="form-group">Lastname</label>
		<input type="text" name="lastname" class="form-control">
	</div>


	<div class="form-group ">
		<label class="form-group">Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group ">
		<label class="form-group">Password</label>
		<input type="password" name="password" class="form-control">
	</div>

	<input type="submit" name="hello" class="btn btn-success form-group" value="register">
</form>
</div>
</div>


<footer class="container-fluid bg-dark p-3 text-center text-light fixed-bottom"> &copy;Keshavpandit</footer>




<!-- js start-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

<?php
print_r("hello");
exit;
 include_once 'database.php';
  if(isset($_POST['hello']))
    
{
  
    $a=$_POST['name'];
    $b=$_POST['lastname'];
    $c=$_POST['username'];
    $d=$_POST['password'];
    
   $z=mysqli_query($con,"insert into file values('$a','$b','$c','$d')");
   if($z)
   {
    echo"success";
    exit;
   }

   else
   {
    echo"try again";
    exit;
   }

  }
  ?>