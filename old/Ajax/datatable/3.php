<?php
include_once 'dbCon.php';

$zz=mysqli_query($con,"select * from register");

$data=array();
while($row=mysqli_fetch_array($zz))
{
	$data[]=$row;

}
echo json_encode($data);

?>
