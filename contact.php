<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    	
    </script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nav-style.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">

	<title>GEVC Challenge</title>
</head>
<body>
	<nav class="navbar fixed-top  navbar-dark">
	  <a class="navbar-brand" href="#">GEVC</a>

	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	       <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         Contact Us

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
	         <a class="dropdown-item" href="officials.php">Officials</a>
	          <a class="dropdown-item" href="partners.html">Partners</a>
	          <a class="dropdown-item" href="sponser.html">Software Sponsorship</a>
	         <!-- <a class="dropdown-item" href="contact.php">Contact Us</a>-->
	        </div>
	        </div>
	      </li>
	    </ul>
	</nav>

	<div class="px-0 container-fluid">
		<div class=" top container-fluid justify-content-center">
			<div class="main-content pt-4 text-center">
				<img src="GEVC_logo.png" width="550px">
				<h1 class="title text-center">
				Contact Us
				</h1>
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
		<div class="container-fluid I2 py-4 form-div">
			<div class="row mx-auto col-lg-10 col-xl-7 px-0   d-flex justify-content-center mt-3 mb-4 ">
				<div class="col-12 form-content pb-2 pt-4">
					<form name="test" action="contact_inc.php"  id="form" method="POST">
						<p style="font-size:1.3rem; padding-left:15px;">Please email us at info@GlobalEEE.org or submit the form below if you have further questions or inquiries concerning the competition.</p>
							<hr> 
							<?php
							if (isset($_SESSION['success'])) {
		                    echo "<p style='color:green;'>".$_SESSION['success']."</p>";
		                    unset($_SESSION['success']);
		                    }
		                    if (isset($_SESSION['err'])) {
		                    echo "<p style='color:red;'>".$_SESSION['err']."</p>";
		                    unset($_SESSION['err']);
		                    }
		                   
		                    ?>
		                    <div class="form-group col-12">
							<label for="name">Name:</label>
							<input type="text" name="name"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['name'] ;}?> >
							</div>
							<div class="form-group col-12">
							<label  for="org">Organization:</label>
							<input type="text " required name="org" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['org'] ;}?> >
							</div>
							<div class="form-group col-12">
							<label  for="email">Email Address:</label>
							<input type="email " required name="email" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['email'] ;}?> >
							</div>

							<textarea placeholder="Enter your message" name="message" class=" mb-2 mx-auto form-control" required value  rows="5" ><?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['message'] ;}""?></textarea>
							<?php unset($_SESSION['FormData']);?>
							<div class=" g-recaptcha mb-4" style="margin-left: 30%;"  
       					 data-sitekey="6Lct3sAZAAAAAPk18YpgB6XeB50VlBBh535AksWZ
"></div>
							<div class="submit col-12">
								<button style="width: 45%;"  name="submit" type="submit" class="btn btn-dark ">Submit</button>
								<button style="width: 45%" class=" btn btn-success " type="reset"> Reset</button>
							</div>
					</form>	
				</div>



			</div>
			<div class="footer text-center">
			 	<a style="" class="text-left" href="https://www.facebook.com/GlobalEEEGEVC" target="_blank"><img src="Images/facebook.png" width="50" height="50"></a>
				<p class="m-0" style="color: white;">Copyright © 2020 – 2021 / Global Education Energy Environment (Global EEE).</p>
			</div>
		</div>
	</div>
</body>
</html>
