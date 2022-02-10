<?php
include_once 'connection.php';
$StateId=$_POST['StateId'];
$zz=mysqli_query($con,"select * from district where StateId=$StateId");

$data=array();
while($row=mysqli_fetch_array($zz))
{
	$data[]=$row;

}
echo json_encode($data);

?>

