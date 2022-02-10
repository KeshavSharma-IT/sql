<?php
include_once 'connection.php';

$zz=mysqli_query($con,"select * from state");

$data=array();
while($row=mysqli_fetch_array($zz))
{
	$data[]=$row;

}
echo json_encode($data);

?>

