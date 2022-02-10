<?php

error_reporting(E_ALL);
ini_set('display_errors','1');
require_once "class.smtp.php";
require_once "class.phpmailer.php";
$Name= $_POST["Name"];
$Password= $_POST["Password"];
$Email= $_POST["Email"];
$Mobile= $_POST["Mobile_no"];
$Address= $_POST["Address"];
$City= $_POST["City"];
$State= $_POST["State"];
$District= $_POST["District"];
$Zip= $_POST["Zip"];


	
 






 $messages ="<h1><center style='color:red;background:pink'>welcome Mr./Ms.<b>$Name</b></center></h1> <br/><h3>Kindly Check Your Entered Details</h3>";

 $messages .="<b>Name : </b>$Name<br />";
 $messages .="<b>Password  :</b> $Password<br />";
 $messages .="<b>Email  :</b>$Email<br />";
 $messages .="<b>Mobile :</b>$Mobile<br />";
 $messages .="<b>Address :</b> $Address<br />";
 $messages .="<b>City :</b>$City<br />";
 $messages .="<b>State :</b> $State<br />";
 $messages .="<b>District :</b>$District<br />";
 $messages .="<b>Zip :</b> $Zip<br />";
 
 $messages .="<b style='color:red'><center>Alert :</center></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <center>This is a system generated mail plz don't reply to it.</center>";

 

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Host     = "ssl://smtp.gmail.com";
$mail->Port     = 465;  
$mail->Username = "keshavitproject@gmail.com";
$mail->Password = "Keshav@12";
$mail->Mailer   = "smtp";
$mail->SetFrom("keshavitproject@gmail.com","Keshav ");
//$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("$Email");	
$mail->Subject = "info";
$mail->WordWrap   = 80;
$mail->MsgHTML($messages);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Mail Sent Successfully.</p>";

}
?>

 