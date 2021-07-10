<?php 
session_start();
require 'Php/PHPMailer1/PHPMailerAutoload.php';
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$org=$_POST['org'];
	$email=$_POST['email'];
	$message=$_POST['message'];
    if (!empty($_POST['g-recaptcha-response'])) {
			$mail = new PHPMailer;
            //$mail->SMTPDebug = 3;                               // Enable verbose debug output
			//$mail->isSMTP();                                      // Set mailer to use SMTP
			//$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			//$mail->SMTPAuth = true;                               // Enable SMTP authentication                         // SMTP password
			//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			//$mail->Port = 465;   
			$mail->Host = 'localhost'; //'relay-hosting.secureserver.net' didn't work
			$mail->Port = 25;
			$mail->SMTPAuth = false;
			$mail->SMTPSecure = false;
			$mail->SMTPAutoTLS = false;                                        // TCP port to connect to
			$mail->setFrom('Support@gevc.globaleee.org', 'GEVC Support');
			$mail->addAddress("competitions@globaleee.org");     // Add a recipient               // Name is optional // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject ="GEVC Contact Form ";
			$mail->Body='<!DOCTYPE html>
								<html>
								<head>
								<head>
								 <meta charset="utf-8">
								    <meta name="viewport" content="width=device-width, initial-scale=1.0">
								    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
								</head>
								<body>
								<div class="container" id="I2">
								<h2>Contact Us page </h2>
													<table class="table">
								 					 <tbody>
								    						<tr class="py-1">
								      							<th scope="row"> Name:</th>
								      							<td>'.$name.'</td>
								     			 			</tr>

								     			 			<tr class="py-1">
								      							<th scope="row">Email:</th>
								      							<td>'.$email.'</td>
								     			 			</tr>
								     			 			<tr class="py-1">
								      							<th scope="row">Organization:</th>
								      							<td>'.$org.'</td>
								     			 			</tr>

								     			 			<tr class="py-1">
								      							<th scope="row">Message:</th>
								      							<td>'.$message.'</td>
								     			 			</tr>
								  						</tbody>
													</table>
								</div>
								</body>
								</html>';
			if(!$mail->send()) {
   			 echo 'Message could not be sent.';
    		echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			else {
            header('Location:contact.php?Successfully');
            $_SESSION['success']="We have recieved your message ".$name."";
            unset($_SESSION['FormData']);
            return;

	# code...
			}		
			
        }
        else{
               header('Location:contact.php?Please Verify the captcha');
               	$_SESSION['FormData']=array(
               		'name' => $name , 
               		'email'=>$email,
                    'uni'=>$uni,
               		'message'=>$message
               	);
                $_SESSION['err']="Please Verify the captcha";
                return;
        }
    }