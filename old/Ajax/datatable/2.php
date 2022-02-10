<?php
include_once 'dbCon.php';
$a=$_POST['name'];

$zz=mysqli_query($con,"select * from register where Name='$a'");

$data=array();
while($row=mysqli_fetch_array($zz))
{
	$data[]=$row;

}
echo json_encode($data);

?>

