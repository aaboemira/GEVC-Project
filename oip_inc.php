<?php
session_start();
// Include the database configuration file
include 'connection.php';
$t=time();
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$title=$_POST['title'];
$org=$_POST['org'];
$country=$_POST['country'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$role=$_POST['role'];
foreach( $checkbox as $chk )  
   {  
      $role .= $chk.",";  
   } 
// File upload path
$targetDir = "uploads/";
$fileName = explode(".",basename($_FILES["image"]["name"]));
$fileName = $fname."_".date("Ymd",$t).time().".".$fileName[1];
$targetFilePath = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));

if(isset($_POST["submit"]) ){
    if (empty($_FILES["image"]["name"])) {
        $_SESSION['err']="Please Upload an image";
        header("Location:oip.php?err ");
        return;
    }
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if (file_exists($targetFilePath)) {
        $_SESSION['err']="Image Already Exsists ";
        header("Location:oip.php?err ");
        return;
    }
    if (!in_array($fileType, $allowTypes)) {
        $_SESSION['err']="Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
        header("Location:oip.php?err ");
        return;

        # code...
    }
                // Upload file to server
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $sql="INSERT INTO officals (FirstName, LastName, Organization, country, Position, Email_Adress, Telephone_Number, image_name,  role) VALUES(:I1,:I2,:I3,:I4,:I5,:I6,:I7,:I8,:I9)";
                $stmt=$pdo->prepare($sql);
                $insert= $stmt->execute(array(
                                ':I1' =>$fname , 
                                ':I2' =>$lname , 
                                ':I3' =>$org , 
                                ':I4' =>$country,
                                ':I5' =>$title ,
                                ':I6' =>$email,
                                ':I7' =>$phone,
                                ':I8' =>$fileName,
                                ':I9' =>$role
                            )       
                        );
                        if ($insert) {
                            $_SESSION['success']="We have recieved your response "." ".$fname." ";
                            header("Location:oip.php#reg ");
                            return;    
                         } 
                         else{
                            $_SESSION['err']="Error while inserting your data.";
                            header("Location:oip.php#reg ");
                            return;
                         }

            }else{
                 $_SESSION['err']="Sorry, there was an error uploading your file.";
                 header("Location:oip.php#reg ");
                 return;
            }
        }

?>