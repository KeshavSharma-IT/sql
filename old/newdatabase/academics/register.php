<?php
include_once 'database.php';
if (isset($_POST['click'])) {
	
	$a=$_POST['username'];
	$b=$_POST['email'];
	$c=$_POST['password'];
	$d=$_POST['rpassword'];

	$f=mysqli_query($con,"insert into register values('$a','$b','$c','$d')");

	if ($f) {
		?>
		<script type="text/javascript">
			alert("successful");

		</script>
		<?php
		header("location:register.html");
	
	}
	else{
		?>
		<script type="text/javascript">
			alert("try again");
		</script>
		<?php
	}
}
?>