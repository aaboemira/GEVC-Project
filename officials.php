<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/officals.css">
    <link rel="stylesheet" type="text/css" href="css/nav-style.css">

	<title>GEVC Challenge</title>

	<!--<script type="text/javascript">
	function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}
!-->

</script></script>
</head>
<body>
		<nav class="navbar fixed-top  navbar-dark">
	  <a class="navbar-brand" href="index.html">GEVC</a>

	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         Officials
	        </a>
	       	<!--<a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         <i class="fas fa-bars" style="font-size: 18px; margin-top: 3px;"></i>
	         Home page
	        </a>-->
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	         <a class="dropdown-item" href="index.html">Home</a>
	          <a class="dropdown-item" href="schedule.html">Schedule</a>
	          <a class="dropdown-item" href="regulations.php">Rules & Regulations</a>
	          <a class="dropdown-item" href="Teams_reg.php">Team Registration</a>
	         <!-- <a class="dropdown-item" href="officials.php">Officials</a>-->
	          <a class="dropdown-item" href="partners.html">Partners</a>
	          <a class="dropdown-item" href="sponser.html">Software Sponsorship</a>
	          <a class="dropdown-item" href="contact.php">Contact Us</a>
	        </div>
	      </li>
	    </ul>
	</nav>

	<div class="px-0 container-fluid">
		<div class=" top container-fluid justify-content-center">
			<div class="main-content pt-4 text-center">
				<img class="logo" src="GEVC_logo.png" width="550px">
				<h1 class="title text-center">
				Our Officials
				</h1><span></span>
				<!--<a href="#form" style="border:none;"><button class=" mt-4 btn btn btn-outline-success">Learn more</button></a>-->
			</div>
			<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
		</div>

		<div class="container-fluid I2 py-4 ">

			<div class="row justify-content-center">
						
						<?php
							$stmt=$pdo->query("SELECT * FROM officals ORDER BY LastName ");
							$count = $stmt->rowCount();
							$a=1;
							while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
								echo'

										<div class="mx-auto my-2 card " style="width: 18rem; ">
											<div class=" mt-4 mx-auto image text-center" style="overflow:hidden;">	
											  <img id="i'.$a.'"  src="uploads/'.$row['image_name'].'" style="   " class="card-img-top" alt="...">
										  	</div>';
								  	echo '<div class="card-body">
										    <h4 class="card-title text-center"><b>'.$row['FirstName']." ".$row['LastName'].'</b></h4>
										    <p class="text-center mb-1 card-text"><span class="card-data"> ' .$row['Organization']. ', </span>
                     <span class="card-data">'.$row['country'].'</span></p>
										  </div>
										</div>
									
';
$a++;
							  }	
						?>
						
				</div>
				<div class="footer text-center mt-3">
				   <a style="" class="text-left" href="https://www.facebook.com/GlobalEEEGEVC" target="_blank"><img src="Images/facebook.png" width="50" height="50"></a>
			    	<p class="m-0" style="color: white;">Copyright © 2020 – 2021 / Global Education Energy Environment (Global EEE)</p>
			    </div>
			</div>
		</div>	

</body>
<script type="text/javascript">
	$(".slider").slick({
		centerMode:true,
		slidesToShow:3
	});

	console.log(x+y);
</script>
</html>
