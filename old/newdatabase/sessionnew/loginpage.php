<?php
session_start();
session_destroy();

$_SESSION['Username']="";
$_SESSION['Id']="";

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<form>
	
	<input type="text" name="a" id="k1" placeholder="UserEmail or PhoneNo."><br><br>
	<input type="password" id="k2" name="b" placeholder="password"><br><br>
	<input type="button" id="k3" onclick="abc()" value="Login">

</form>
<script type="text/javascript">
	function abc() 
	{
	var a=document.getElementById('k1').value;
	var b=document.getElementById('k2').value;
	
		$.ajax({
				             type: "post",	
						       url: "login.php",
						       data:"username="+a+"&password="+b,
						      datatype:'json',
						       success:function (success) {
						       	//alert(success);
						       	if(success>0)
						       	{
						       		alert(" successfull Login");
						       		window.location.replace("p.php");
						       	}	
						       	else
						       	{
						       		alert("unsuccessfull Login");
						       	}
						       }

			})
	}
</script>
</body>
</html>