<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="datepicker.css">

</head>
<body class="my-3 mx-3 bg-white " >

	<table  id="mytable" border="2" class="table">
		
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Course</th>
			<th>Gender</th>

		</tr>
	
	



<?php
include_once 'database.php';
$q=mysqli_query($con,"select * from student");
while ($row=mysqli_fetch_array($q)) 
{
	?>
	
	<tr>
		<td>
			<?php echo $row[Name];
			?>
				
			</td>

			<td>
			<?php echo $row[Email];
			?>
				
			</td>
			<td>
			<?php echo $row[Mobile];
			?>
				
			</td>

<td>
			<?php echo $row[Course];
			?>
				
			</td>

<td>
			<?php echo $row[Gender];
			?>
				
			</td>

			<?php

}

?>
</tr>
</tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
  </script>
  <script src="bootstrap-datepicker.js">
  </script>
  <script>
    $(document).ready( function () {
    $('#mytable').DataTable();
    $('#datepick').datepicker('show');
} );
</script>
</body>
</html>
