
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

 
  <button type="submit" class="btn btn-success form-group" name="submit">Submit</button>

</form>
</div>


</body>
</html>

<?php
 include_once 'database.php';
  if(isset($_POST['submit']))
    {
    
    $a= $_POST['name'];
    $b= $_POST['lastname'];
    
   $z=mysqli_query($con,"insert into display values('$a','$b')");
 
  
  
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
