<?php
session_start();
session_destroy();

$_SESSION['Username']="";
$_SESSION['ID']="";

?>


<html>
<head>
	<title>Secure Login</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	
		<div class="container my-5 p-5   ">
			<div class="row">
				<div class="col-md-6  border border-dark p-5 rounded">
					
					<form  method="post">
			<div class="form-group ">
				<label class="form-group"><b>Username</b></label>
				<input type="text" name="username" placeholder="username" class="form-control" id="username">
				
			</div>
			<div class="form-group">
				<label class="form-group"><b>Password<b></label>
			<input type="password" name="password" placeholder="Password" class="form-control" id="password" >
				
			</div>
			<div class="form-group">
				<input type="button" name="login" value="LOGIN" class="btn btn-primary " onclick="abc()">
			
				
			</div>
			</form>
			
				
	</div>
</div>
</div>
<script type="text/javascript">
	function abc()
	{
	var a,b;
	a=$('#username').val();
	b=$('#password').val();

	$.ajax({
		type:"post",
		url:"log.php",
		data:"username="+a+"&password="+b,
		datatype:'json',
		success:function(success){
			alert(success);
			if (success>0) {
				alert("Login successfull");
				window.location.replace("home.php");
			}
			else{
				alert("login unseccussful");
			}
		}
	});
}



</script>


</body>
</html>