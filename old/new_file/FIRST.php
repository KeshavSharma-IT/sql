
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container border border-dark my-5 mx-auto">
    <h2 class="text-success text-center">REGISTER</h2>
    <hr class="w-25 bg-success" >
    <hr class="bg-dark">

    <form class="p-3" method="post" action="">
      <div class="form-row">
        <div class="col-md-6 form-group">
          <label class="form-group">First Name</label>
          <input type="text" name="name" id="name" placeholder="First name" class="form-control">
        </div>

         <div class="col-md-6 form-group">
          <label class="form-group">Last Name</label>
          <input type="text" name="lastname" id="lastname" placeholder="Last name" class="form-control">
        </div>
  </div>

  <div class="form-row my-2">
    <div class="col-md-6">
      <label class="form-group">Username</label>
   <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group ">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" name="username">
      </div>
    </div>

    <div class="col-md-6 ">
        <label class="form-group">Password</label>
   <label class="sr-only" for="inlineFormInputGroup">Password</label>
      <div class="input-group ">
        <div class="input-group-prepend">
          <div class="input-group-text">***</div>
        </div>
        <input type="Password" class="form-control" id="inlineFormInputGroup" placeholder="Username" name="password">
      </div>
    </div>
</div>

<div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address" id="address" placeholder="Street Name / Flat no." class="form-control">
</div>

<div class="form-row ">
  <div class="col-md-7 ">
    <label class="form-group">City</label>
    <input type="text" name="city" id="city" placeholder="city" class="form-control">
  </div>
  <div class="col-md-3">
    <label class="form-group">State</label>
    <input type="text" name="state" id="state" placeholder="state" class="form-control">
  </div>
  <div class="col-md-2">
    <label class="form-group">Pin Code</label>
    <input type="text" name="pin" id="pin" placeholder="Pin Code" class="form-control">
  </div>
</div>
<div class="form-group ">
    <div class="form-check my-3">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-success form-group" name="submit">Submit</button>

</form>
</div>


</body>
</html>

<?php
 include_once 'database.php';
  if(isset($_POST['submit']))
  {
    
    

    $a=$_POST['name'];
    $b=$_POST['lastname'];
    $c=$_POST['username'];
    $d=$_POST['password'];
    $e=$_POST['address'];
    $f=$_POST['city'];
    $g=$_POST['state'];
    $h=$_POST['pin'];

   $z=mysqli_query($con,"insert into register values('$a','$b','$c','$d','$e','$f','$g',$h)");
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
