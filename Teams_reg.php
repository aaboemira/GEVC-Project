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
        <link rel="stylesheet" type="text/css" href="css/Teams_reg.css">
        <link rel="stylesheet" type="text/css" href="css/nav-style.css">

	<title>GEVC Challenge</title>
</head>
<body>
	<nav class="navbar fixed-top  navbar-dark">
	  <a class="navbar-brand" href="#">GEVC</a>

	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	       <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         Team Registration

	        </a>
	       	<!--<a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         <i class="fas fa-bars" style="font-size: 18px; margin-top: 3px;"></i>
	         Home page
	        </a>-->
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	         <a class="dropdown-item" href="index.html">Home</a>
	          <a class="dropdown-item" href="schedule.html">Schedule</a>
	          <a class="dropdown-item" href="regulations.php">Rules & Regulations</a>
	          <!--<a class="dropdown-item" href="Teams_reg.php">Team Registration</a>-->
	         <a class="dropdown-item" href="officials.php">Officials</a>
	          <a class="dropdown-item" href="partners.html">Partners</a>
	          <a class="dropdown-item" href="sponser.html">Software Sponsorship</a>
	          <a class="dropdown-item" href="contact.php">Contact Us</a>
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
				Team Registration
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
			<div class="row mx-auto col-lg-11 col-xl-8 px-0   d-flex justify-content-center mt-3 mb-4 ">
				<div class="col-6 left-form py-4" style="background-color: #231f20;">
					<h1 class=" text-center pl-2" style="color: white;">
						Registration Details
					</h1>
					<hr style="border-color: rgb(255,255,255,0.2);">
				<h3  style="color: white;">
				Registration for Stage 1
				</h3>
				<p style="color: white;" class="about mt-2">
				To register for Stage 1 of the GEVC please fill out this online form.  You must enter a valid university email address and mailing address.  Please include the country code with the telephone number.    Within 2 business days of this submission you will receive an invoice for the participation fee. The online registration and Installment 1 of the participation fee (see below) must be received prior to the registration closing date to be officially entered in the competition. No exceptions will be made.
				</p>
				<hr style="border-color:white;"> 
				<h3 style="color: white;">
					Participation Fee for Stage 1
				</h3>
					<p class="size">
						The participation fee for Stage 1 is $375 and shall be paid in two installments as follows:
					</p>
					<p class="size" >Installment 1:&nbsp &nbsp $195 to be paid prior to the closing of the official registration.  This participation fee is non-refundable.
					</p>
					<p class="size">
						Installment 2:&nbsp &nbsp $180 to be paid prior to the final design / analysis / simulation reports submission deadline.  Teams that wish to withdraw from the competition prior to submission of the final reports are not required to pay installment 2. 
					</p>
					<p class="size">Note:The participation fees for Stage 2 shall be determined and announced at a later date.</p>
				</div>
				<div class="col-6 form-content pb-2 pt-4">
					<form name="test" action="Teams_reg_inc.php"  id="form" method="POST">
							<h1 class=" E1 text-center mb-4 ">
										Registration Form	
							</h1>
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
							<label  for="name">University:</label>
							<input type="text " required name="uni" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['university'] ;}?> >
							</div>

							<div class="form-group col-12">
							<label for="title"> Team Name:</label>
							<input type="text" name="Tname"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['Tname'] ;}?> >
							</div>

							<div class="form-group col-12 team-address">
							<label > Team Address:</label>
							<input type="text"  name="street"required placeholder="Street" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['street'] ;}?> >
							<input type="text" class="inpCity" name="city" required placeholder="City" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['city'] ;}?>>
							<input type="text" class="inpState" name="state" required placeholder="State" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['state'] ;}?> >
							<input type="number" class="inpPostal" name="Pcode" required placeholder="Postal Code" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['postal'] ;}?>>
							<input type="text" class="inpCountry" name="country" required placeholder="Country" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['country'] ;}?>>
							</div>

							<div class="form-group col-12 team-leader">
							<label for="phone"> Team Leader:</label>
							<input type="text" class="inpFname"  name="Fname"required placeholder="First Name" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['fname'] ;}?> >
							<input type="text" class="inpLname"  name="Lname"required placeholder="Last Name" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['lname'] ;}?> >
							<input type="email" class="email"  name="email"required placeholder="Email Address" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['email'] ;}?> >
							<input type="text"  name="phone"required placeholder="Telephone" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['phone'] ;}?> >
							</div>
							<?php unset($_SESSION['FormData']);?>
							<div class="ml-4 g-recaptcha mb-4"  
       					 data-sitekey="6Lct3sAZAAAAAPk18YpgB6XeB50VlBBh535AksWZ"></div>
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
