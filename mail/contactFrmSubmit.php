<?php

include_once ('PHPMailer_5.2.4/class.phpmailer.php');
include "../config.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];


$content="<table style='border: none;'>
<tr><td>Name </td><td>: ".$name."</td></tr>
<tr><td>phone </td><td>: ".$phone."</td></tr>
<tr><td>Email. </td><td>: ".$email."</td></tr>
<tr><td>Message </td><td>: ".$msg."</td></tr>
</table>";

$subject = "New Website Contact Message";

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = $app_smtp_host;                 // Specify main and backup server
$mail->Port = $app_smtp_port;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $app_email_id_send;                // SMTP username
$mail->Password = $app_smtp_password;                  // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = $app_email_id_send;
$mail->FromName = 'Website Message';
$mail->AddAddress($app_email_id_send, $name);  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $content;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



if(!$mail->Send()) {
  // echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else{
?> 

<div class="text-center">
	<h2 class="marginTop highlight-head text-center"><span>Thank</span> You...!</h2>
	<p class="cc-font-size-17">Our team will contact you shortly !</p>
</div>

<?php
}
exit;
?>