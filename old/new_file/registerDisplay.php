<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border=2 width="500px">
        <tr>
          <th>Name</th>
      <th>last_name</th>
      <th>Username</th>
       <th>Password</th>
        <th>Address</th>
         <th>City</th>
          <th>State</th>
           <th>Pin_Code</th>

      
      </tr></center>
      
      <?php 
      include_once 'database.php' ;   
      $h=mysqli_query($con,"select * from register");
while($row=mysqli_fetch_array($h))
{
  ?>
<tr>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Lastname']; ?></td>
<td><?php echo $row['Username']; ?></td>
<td><?php echo $row['Password']; ?></td>
<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['City']; ?></td>
<td><?php echo $row['State']; ?></td>
<td><?php echo $row['Pin_Code']; ?></td>

<?php
} 
  ?>

</body>
</html>