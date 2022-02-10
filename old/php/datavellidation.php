
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
<input type="text" name="a">
<div id="name" style="color:red"></div>
<input type="text" name="b">
<div id="last" style="color:red"></div>
<input type="submit" name="click">
</form>

	<?php
	if(isset($_POST['click']))
	{

	$x=$_POST['a'];
	$y=$_POST['b'];

	if($x=='')
	{
		?>
 <script>
 	
		document.getElementById('name').innerHTML="try again";</script><?php		
    
	  }


	if($y=='')
	{
	 ?>
	<script>
		document.getElementById('last').innerHTML="try again";</script><?php		
      }
      if($x!='')
	{
 ?>
	<script>
		document.getElementById('name').innerHTML=" ";</script><?php		
      }


	if($y!='')
	{
	 ?>
	<script>
		document.getElementById('last').innerHTML=" ";</script><?php		
      }
}

	?>

</body>
</html>