
<html>
<head>
	<title></title>
</head>
<body>
<table border=2 width="500px">
        <tr>
          <th>  Name</th>
      <th> last_name</th>
      
      </tr></center>
      
      <?php 
      include_once 'database.php' ;   
      $h=mysqli_query($con,"select * from display");
while($row=mysqli_fetch_array($h))
{
  ?>
<tr>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Lastname']; ?></td>
<?php
}
    ?>

</body>
</html>