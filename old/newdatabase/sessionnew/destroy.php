<?php
session_start();
session_destroy();

$_SESSION['Username']="";
$_SESSION['Id']="";
if($_SESSION['Id']=='')
{
header("location:loginpage.php");
}

?>