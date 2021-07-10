<?php
session_start();
require 'Php/PHPMailer1/PHPMailerAutoload.php';
// Include the database configuration file
include 'connection.php';
$t=time();
if(isset($_POST["submit"]) ){
    //Teams
    $Tname=$_POST['Tname'];
    $university=$_POST['uni'];
    //Addresses
    $country=$_POST['country'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $street=$_POST['street'];
    $postal=$_POST['Pcode'];

    //leaders
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
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
        $mail->Subject ="GEVC Team Registration  ";
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
                            <h2 class="text-center">We have a new team registered </h2>
                                                <table class="table">
                                                 <tbody>
                                                        <tr class="py-1">
                                                            <th scope="row"> Team Name:</th>
                                                            <td>'.$Tname.'</td>
                                                        </tr>

                                                        <tr class="py-1">
                                                            <th scope="row">Email:</th>
                                                            <td>'.$email.'</td>
                                                        </tr>
                                                        <tr class="py-1">
                                                            <th scope="row">University:</th>
                                                            <td>'.$university.'</td>
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
        $sql="INSERT INTO `official_registration`(`Name`, `University`) VALUES (:i1,:i2)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(
            ":i1"=>$Tname,
            ":i2"=>$university

        ));
        $team_id = $pdo->lastInsertId();

        $sql="INSERT INTO `teams_adresses`( `team_id`, `Country`, `City`, `State`, `Street`, `PostalCode`) VALUES (:i1,:i2,:i3,:i4,:i5,:i6)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(
            ":i1"=>$team_id,
            ":i2"=>$country,
            ":i3"=>$city,
            ":i4"=>$state,
            ":i5"=>$street,
            ":i6"=>$postal

        ));
        $sql="INSERT INTO `teams_leaders`( `team_id`, `FirstName`, `LastName`, `Email`, `Phone`)  VALUES (:i1,:i2,:i3,:i4,:i5)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(
            ":i1"=>$team_id,
            ":i2"=>$fname,
            ":i3"=>$lname,
            ":i4"=>$email,
            ":i5"=>$phone
        ));

        header("Location:Teams_reg.php#form");
        $_SESSION['success']="You have Registred Succesfully";
        return;
        }
    }
    else{
        header("Location:Teams_reg.php?#form");
        $_SESSION['err']="Invalid Captcha";
        $_SESSION['FormData']=array(
        'Tname' => $Tname , 
        'university'=>$university,
        'country'=>$country,
        'state'=>$state,
        'city'=>$city,
        'street'=>$street,
        'postal'=>$postal,
        'fname' => $fname , 
        'lname'=>$lname,
        'email'=>$email,
        'phone'=>$phone
                );
        return;
    }
}

?>