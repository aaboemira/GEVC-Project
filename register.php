<?php
session_start();
require_once('connection.php');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$title=$_POST['title'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$Uname=$_POST['Uname'];
	$country=$_POST['country'];
	if (empty($name)||empty($title)||empty($email)||empty($phone)||empty($Uname)||empty($country)) {
		$_SESSION['err']="Please fill all inputs";
		header("Location:index.php#form");
		return;
	}
if (is_numeric($phone)==false) {
		$_SESSION['err']="Please enter a valid phone number";
			$_SESSION['FormData']=array(
               		'name' => $name , 
               		'email'=>$email,
               		'phone'=>$phone,
               		'title'=>$title,
               		'Uname'=>$Uname,
               		'country'=>$country
               	);
		header("Location:index.php#form");
		return;
		# code...
	}
	else{
		$sql="INSERT INTO teams (name, title, email, phone, university,country) VALUES(:I1,:I2,:I3,:I4,:I5,:I6)";
		$stmt=$pdo->prepare($sql);
		$stmt->execute(array(
				':I1' =>$name , 
				':I2' =>$title , 
				':I3' =>$email , 
				':I4' =>$phone ,
				':I5' =>$Uname,
				':I6' =>$country
			)       
		);
		$_SESSION['success']="You have registred successfully";
		header("Location:index.php#form");
	}
	# code...
}


?>