<?php
require 'Php/PHPMailer1/PHPMailerAutoload.php';
session_start();
// Include the database configuration file
include 'connection.php';
$t=time();
if(isset($_POST["submit"]) ){
    $org=$_POST['org'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    if (!empty($_POST['g-recaptcha-response'])) {
        $mail = new PHPMailer;
        $mail->Host = 'localhost'; //'relay-hosting.secureserver.net' didn't work
        $mail->Port = 25;
        $mail->SMTPAuth = false;
        $mail->SMTPSecure = false;
        $mail->SMTPAutoTLS = false;                                        // TCP port to connect to
        $mail->setFrom('Support@gevc.globaleee.org', 'GEVC Support');
        $mail->addAddress("competitions@globaleee.org");     // Add a recipient               // Name is optional // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject ="GEVC Rules & Regulations request ";
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
                            <h2 class="text-center">We have a new Rules & Regulations request </h2>
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
        else{
        $sql="INSERT INTO `Regulations Request`(`Name`, `Email`,`Organization`,Country) VALUES (:i1,:i2,:i3,:i4)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(
            ":i1"=>$name,
            ":i2"=>$email,
            ":i3"=>$org,
            ":i4"=>$country
        ));
        header("Location:regulations.php#form");
        $_SESSION['success']="We have recieved your response";
        return;
        }
    }
    else{
        header("Location:regulations.php?#form");
        $_SESSION['err']="Invalid Captcha";
        $_SESSION['FormData']=array(
        'name' => $name , 
        'org'=>$org,
        'country'=>$country,
        'email'=>$email,
                );
        return;
    }
}

?>