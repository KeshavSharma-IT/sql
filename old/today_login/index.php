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
        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
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

	<input type="submit" name="submit" class="btn btn-success form-group mx-2" value="register">

  <a href="login1.php"><input type="button" class="btn btn-success form-group mx-5" value="login"></a>

 

</form>
</div>
</div>
<?php
 include_once 'database.php';
  if(isset($_POST['submit']))
      {
    $a=$_POST['first_name'];
    $b=$_POST['lastname'];
    $c=$_POST['email'];
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



 <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#keshav">Display</button>
<div id="keshav" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:700px;margin-left:-100px;">
      <div class="modal-header">
       <h3>Register details</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
          <table class="table" id="myTable">
  <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Password</th>
  </tr>
   <?php
include_once 'database.php';
 $h=mysqli_query($con,"select * from file");
while($row=mysqli_fetch_array($h))
{
  ?>
<tr>
<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['last_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>  
<?php
}
?>
</thead>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  <div class="modal-fade" id="keshav" role="dialog">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Register details</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="table" id="myTable">
  <thead>
    <tr>
      <th>first_name</th>
      <th>last_name</th>
      <th>email</th>
      <th>password</th>
  </tr>
   <?php
include_once 'database.php';
 $h=mysqli_query($con,"select * from file");
while($row=mysqli_fetch_array($h))
{
  ?>
<tr>
<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['last_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>  
<?php
}
?>
</thead>
</table>
</div>
 

      <div class="modal-footer justify-content-center">

          <button class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
-->
        



<footer class="container-fluid bg-dark p-3 text-center text-light "> &copy;Keshavpandit</footer>


<!-- js start-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 <script src="bootstrap-datepicker.js">
  </script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    $('#datepick').datepicker('show');
  </script>
</body>
</html>

