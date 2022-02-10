<!DOCTYPE html>
<html>
<head>
	<title>friend request</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
	
		<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				
				<input type="text" name="email" placeholder="name" class="form-control " id="emailr"  onkeyup="ab()">
			</div>
			<div class="form-group">
				
				<input type="text" name="name" placeholder="username" class="form-control " id="namer"  onkeyup="ab()">
			</div>
			<div class="form-group">
				
				<input type="password" name="username" placeholder="password" class="form-control " id="usernamer"  onkeyup="ab()">
			</div>
			<div class="form-group">
				
				<input type="text" name="password" placeholder="mobile" class="form-control" id="passwordr" onkeyup="ab()">
				
			</div>
			<div class="form-group">
				<input type="submit" name="register" value="Register" class="btn btn-success " onclick="abc()">
		
				<a href="login.php"  target="_blank" input type="submit" name="login" class="btn btn-success mx-4 " value="LOGIN" onclick="abc()">LOGIN</a>
			</div>
			<div>
			<label id="error"></label>
		</div>

		
		
		
		<?php
		include_once 'connection.php';
		if(isset($_POST['register'])){

		$a=$_POST['email'];
		$b=$_POST['name'];
		$c=$_POST['username'];
		$d=$_POST['password'];
		if ($a!='' && $b!='' && $c!='' && $d!='') {
			
			$f=mysqli_query($con,"insert into register values('$a','$b','$c','$d')");

		if($f)
		{
		echo "successful";
		}

		
	
	else{
	echo "try again";
}
	}

}
		?>

		




</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
include_once 'connection.php';
if (isset($_POST['delete']))
 {

	$aa=$_POST['delete'];

//echo "delete from register where username='$aa'";
//exit;
	$zz=mysqli_query($con,"delete from  register where username='$aa'");
	if ($zz) {
		//echo "delete";
		header("location:register.php");

	}
	else{
		echo "try again";
	}

	
}

?>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form method="post">
          	<div class="container">
          		<div class="form-group">
<input type="text" name="email1" placeholder="Email and mobile no" class="form-control ">
			</div>
			<div class="form-group">
				
				<input type="text" name="name1" placeholder="name" class="form-control " >
			</div>
			<div class="form-group">
				
				<input type="text" name="username1" value="<?php echo $row[username];?>" placeholder="username" class="form-control " id="username1">
			</div>
			<div class="form-group">
				
				<input type="password" name="password1" placeholder="Password" class="form-control">
				
			</div>
			<div class="form-group">
				<input type="submit" name="register1" value="Register" class="btn btn-success ">
				 </div>
				</div>

    </form>
</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  


<script type="text/javascript">
	$(".mydata").click(function(){
	
		$("#keshav1").modal("hide");
		$("#myModal").modal("show");
		//$(this).attr("id");
		$("#username1").val($(this).attr("id"));
	});
</script>

<?php
if (isset($_POST['register1'])) {
	$xx=$_POST['email1'];
	$ww=$_POST['username1'];
	$yy=$_POST['name1'];
	$zzz=$_POST['password1'];
	//echo "update register set email_mobile='$xx', name='$yy', password='$zzz' where username='$ww'";
	//exit;

	$qq=mysqli_query($con,"update register set email_mobile='$xx', name='$yy', password='$zzz' where username='$ww' ");
	if ($qq) {
		header("location:register.php");
		
	}
	else{
		echo "try again";
	}
}
?>

</body>
</html>