<?php
include_once 'life.php';
$name="";
$rollno="";
$course="";
$address="";
$url="";
if(isset($_POST['submit']))
{
$id= $_POST['a'];
$name= $_POST['b'];

$c=mysqli_query($con,"select * from love where id=".$id);


while($row=mysqli_fetch_array($c))
{
$name=$row['name'];
$rollno=$row['roll_no'];
$course=$row['course'];
$address=$row['address'];
$url=$row['url'];
}

}
?>

<html>
<body>
<center>
<br><br><br><br><br><br><br>
<div style="height:300px;width:250px;background-color:lightblue;border-radius:20px">
<form method="post" action=""><br>
<input type="text" name="a" style="color:white;background-color:lightblue;border-width:0px;width:50px;" placeholder="id">
<input type="submit" value="search" name="submit">
<br><br>
<table height="30%" width="30%" border="1">
<tr>
<td><img src="<?php echo $url; ?>"></td></table>

Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="b" value="<?php echo $name; ?>" style="color:white;background-color:lightblue;border-width:0px"><br><br>
Roll no &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="c" value="<?php echo $rollno; ?>" style="color:white;background-color:lightblue;border-width:0px"><br><br>
course &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="d" value="<?php echo $course; ?>" style="color:white;background-color:lightblue;border-width:0px"><br><br>
address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="e" value="<?php echo $address; ?>" style="color:white;background-color:lightblue;border-width:0px"><br><br>

</div></center>
</form>
</body>
</html>
 