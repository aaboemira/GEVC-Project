<?php
require 'Php/PhpMailer1/PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'a.aboemira1@gmail.com';                 // SMTP username
$mail->Password = 'asdwarb32ott1';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;                                    // TCP port to connect to

$mail->setFrom('a.aboemira1@gmail.com', 'Global EEE support');
$mail->addAddress($email, $username);     // Add a recipient               // Name is optional // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject ="Contact Global EEE";
$mail->Body    = 'Testing Email';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo "Your message recieved succesfully";

}
?>