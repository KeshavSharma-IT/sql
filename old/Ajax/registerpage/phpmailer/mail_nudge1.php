<?php
include_once '../connection/dbCon.php';
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once "class.smtp.php";
require_once "class.phpmailer.php";
$name= $_POST["name"];
$mobile= $_POST["mobile"];
$email= $_POST["email"];
$userid= $_POST["userid"];
$orgnization= $_POST["orgnization"];
$subject='Activation of Patient SignIn App';

    $encrpt=base64_encode($email);
 
	$encrpt=str_replace("/","bataa",$encrpt);	
	$encrpt=str_replace("+","jodh",$encrpt);
    $encrpt=urlencode($encrpt);

$encrptid=base64_encode($userid);
 
	$encrptid=str_replace("/","bataa",$encrptid);	
	$encrptid=str_replace("+","jodh",$encrptid);
    $encrptid=urlencode($encrptid);

$messages ='<html xmlns="http://www.w3.org/1999/xhtml"><head>';
  $messages .='<style type="text/css">';      
  $messages .='.tx11_W{font-family: Arial, Helvetica, sans-serif;font-size: 11px;color: #ffffff;}';
  $messages .='.tx11_W a:link, .tx11_W a:visited, .tx11_W a:active{text-decoration: none;color: #ffffff;}';
  $messages .='.tx11_W a:hover{text-decoration: underline;color: #ffffff;}';
  $messages .='</style>    <title></title></head>';
  $messages .='<body marginheight="0" marginwidth="0" leftmargin="100" topmargin="0" rightmargin="0"
    bottommargin="0">';
  $messages .='<table width="100%" cellpadding="0" cellspacing="0"><tr><td align="left" class="p01">';
  $messages .='<p>Dear <strong>'.ucwords($name).',</strong></p>';					
  $messages .='<p>Patient SignIn application has been activated for your use now. </p>';
  $messages .='<p>To get access to your application please follow the following steps<br/><strong>Step 1:</strong>';
  $messages .='<br/><a href="'.$baseurl.'/Anchor-Website/create-password.php?username='.$encrpt.'&id='.$encrptid.'">click here</a> to get your password<br />';
	$messages .='<br/><strong>Step 2:</strong>	<br/>
						Now the application can be accessed using the following links<br/><br/>
					<strong>For SignIn (ipad/touch screen):</strong>
					<br/>http://64.94.164.16/Patient-SignIn/Patient/Login<br /><br />
					<strong>For SignIn Log:</strong>
					<br/>http://64.94.164.16/Patient-SignIn/Admin/Login<br />

					<br/>
			If clicking the link does not work, please copy and paste the URL into your browser instead.		
                    <br />
                    
                    <br />
                    
                    Best Regards,<br />
                  <strong> Anchor Software Solutions</strong>
					<p>&nbsp;</p>
								<i>Please note: This is a system generated e-mail notification, please do not reply to this e-mail.</i>
                </p>
				
            </td>
        </tr>
    </table>
	<img src="../images/logo-without-bg.png" withd="230px" height="70px" alt="">
</body>
</html>';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Host     = "ssl://smtp.gmail.com";
$mail->Port     = 465;  
 $mail->Username = "sales@anchorsoftwaresolutions.com";
$mail->Password = "anil1234";
 
//$mail->Username = "testnetindia@gmail.com";
//$mail->Password = "testnetindia1234";

$mail->Mailer   = "smtp";
$mail->SetFrom("sales@anchorsoftwaresolutions.com","Anchor Software Solutions");
//$mail->SetFrom("testnetindia@gmail.com","Anchor Software Solutions");
//$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress(trim($email));	
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($messages);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "0";
} else {
	echo "1";
}
/* $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo $uriSegments[3];
exit;
$user=urldecode($encrpt);
		$user=str_replace("bataa","/",$user);	
		$user=str_replace("jodh","+",$user);
		$decrpt=base64_decode($user);


 */

?>

 