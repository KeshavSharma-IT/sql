<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body class="my-3">

<form method="post">
	ID
	<input type="text" name="a">
	name
	<input type="text" name="b">
	last name
	<input type="text" name="c">
	<input type="submit" name="click" class="btn btn-primary">
	<input type="submit" name="update" value="update" class="btn btn-primary">
	<div id="update" style="color: green;"></div>
	<?php
	include_once 'connection.php';
	if (isset($_POST['update'])) {
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$_POST['c'];
	#echo "update form set name='$y',last_name='$z' where ID='$x'";

	$qqq=mysqli_query($con,"update form set name='$y',last_name='$z' where ID='$x'");
	if ($qqq) {
		?>
		<script type="text/javascript">
			document.getElementById('update').innerHTML="Update successful";
		</script>
		<?php
	}
	else{
		echo "try";
	}

	}


	?>

<?php  

if (isset($_POST['click'])) {
	
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$_POST['c'];

	$q=mysqli_query($con,"insert into form values('$x','$y','$z')");
	if ($q) {
		echo "success";
	}
	else{
		echo "try again";
	}
}



?>

<br><br><br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
  Display
</button>

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table  id="mytable" border="2" class="table">
		<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	
<?php



$q=mysqli_query($con,"select * from form");
while ($row=mysqli_fetch_array($q)) {
	?>
	<tbody>
	<tr>
		<td>
			<?php echo $row[ID];
			?>
				
			</td>
		<td>
			<?php echo $row[name];
			?>
				
			</td>

			<td>
			<?php echo $row[last_name];
			?>
				
			</td>
			<?php

}

?>
</tr>
</tbody>
</table>

      </div>
      <div class="modal-footer">
      	
      	<input type="text" name="s">
      	<input type="submit" name="delete" value="delete" class="mr-auto btn btn-primary">
      	<?php
      	if (isset($_POST['delete'])) {
      		$ss=$_POST['s'];

      		$qq=mysqli_query($con,"delete from form where ID='$ss'");
      		if ($qq) {
      			echo "successful";
      			header("location:form.php");
      		}
      		else{
      			echo "try again";
      		}
      	  	
      	  }  ?>

      	
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</form>
</body>
</html>