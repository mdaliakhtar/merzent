<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Comments = $_POST['Comments'];

//send email begins
$SendEmail = "ali54@live.in";
$SubUser = "Md Ali Akhtar profile - Email (your site)";

require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$body="<body><table width=\"200\" border=\"1\" cellspacing=\"3\" cellpadding=\"2\"><tr><td>Name</td><td>".$Name."</td></tr><tr><td>Email</td><td>".$Email."</td></tr><tr><td>Subject</td><td>".$Subject."</td></tr><tr><td>Comments</td><td>".$Comments."</td></tr></table></body>";
$mail->AddAddress($SendEmail);
$mail->Subject = $SubUser;
$mail->MsgHTML($body);
$mail->Header='Content-type: text/html; charset=iso-8859-1';
if(!$mail->Send())
	//echo "Error sending: ".$mail->ErrorInfo;
	header('Location: ../../index.php?success=no#contact');
else
	//echo 'email is sent!';
	header('Location: ../../index.php?success=yes#contact');				
//send email ends
?>
