<?php
session_start();
session_destroy();

$_SESSION['Username']="";
$_SESSION['ID']="";
if ($_SESSION['ID']=='') {
	header("location:index.php");
}
?>