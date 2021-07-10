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
        <style type="text/css">
        	.form-content p{
        		font-size: 1.1em !important;
        	}
        	.submit{
        		position: relative;
        		top: 20px;
        	}
        </style>

	<title>GEVC Challenge</title>
</head>
<body>
	<nav class="navbar fixed-top  navbar-dark">
	  <a class="navbar-brand" href="index.html">GEVC</a>

	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         Rules & Regulations
	        </a>
	       	<!--<a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         <i class="fas fa-bars" style="font-size: 18px; margin-top: 3px;"></i>
	         Home page
	        </a>-->
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	         <a class="dropdown-item" href="index.html">Home</a>
	          <a class="dropdown-item" href="schedule.html">Schedule</a>
	          <!--<a class="dropdown-item" href="#">Rules & Regulations</a>-->
	          <a class="dropdown-item" href="Teams_reg.php">Team Registration</a>
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
				Rules & Regulations
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
						Overview of Regulations
					</h1>
					<hr style="border-color: rgb(255,255,255,0.2);">
				<p style="color: white;" class="about mt-2 mb-2">
				The teams shall design, analyze, fabricate, test and race their electric vehicles in strict adherence to the official rules and regulations of the competition.  The Vehicle Design Rules are developed by the competition Rules & Regulations Committee and enforced at the event by the Steward and Technical Inspectors. They are provided to promote a safe and fair competition for all involved and shall be in force and maintained during the entire event. 
				</p>


				<p style="color: white;" class="about mb-2">
				Since safety is of key concern these rules should be considered minimum requirements. Any vehicle may be re‐inspected at any time during the competition to ensure compliance with the regulations. Experimentation of design and ingenuity are encouraged keeping in mind the intent of safe competition for the driver and the other participants of the event. If a new concept is being attempted that does not fit the rules exactly, teams are encouraged to contact Global EEE to get a ruling before proceeding with construction. It would be unfortunate to work so hard on a vehicle and only to have it disqualified at the competition. Remember that safety is a primary goal and inspectors uphold that. 
				</p>
									<hr style="border-color: rgb(255,255,255,0.2);">

				<p style="color: white;" class="about mb-2">
				The Competition (Sporting) Rules are developed by the competition Rules & Regulations Committee and enforced at the event by the Steward and Course Marshals. They are intended to provide a safe and equitable competition format and inspection process. The race is comprised of one hour of racing divided into two heats, each 30 minutes in length. A mandatory driver change will take place within the allowable window between minutes 12 and 18 in each heat.  Each team is allowed two battery packs which may be swapped once during the race.  Charging of the batteries is not allowed once the race begins.  Drivers are ballasted to 80 kg.  Grid line-up for heat 1 is based on fastest lap time during the qualification session immediately preceding the race.
				</p>


				<p class="about mb-2">
					The number of laps completed in each of the two 30 minute sessions (heats) are added to arrive at a lap total. The finishing order is determined solely by laps unless there is a tie. If after the two sessions are added there is a tie in total laps, then the car that crossed the finish line first (based on crossing times for both heats) is ranked higher.
				</p>
				</div>
				<div class="col-6 form-content pb-2 pt-4">
					<form name="test" action="regulations_inc.php"  id="form" method="POST">
							<h1 class=" E1 text-center mb-4 ">
										Request Official Document	
							</h1>
							<hr>
							<p>The official V1.0 Rules and Regulations document was released on January 1, 2021.  It contains the detailed Vehicle Design Rules, Competition (Sporting) Rules and the Stage 1 regulations.  To receive a PDF copy please submit the following form: </p>
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
							<label  for="name">Name:</label>
							<input type="text " required name="name" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['name'] ;}?> >
							</div>

							<div class="form-group col-12">
							<label for="title"> Email Address:</label>
							<input type="email" name="email"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['email'] ;}?> >
							</div>
							<div class="form-group col-12">
							<label for="org"> Organization:</label>
							<input type="text" name="org"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['org'] ;}?> >
							</div>
							<div class="form-group col-12">
							<label for="country"> Country:</label>
							<input type="text" name="country"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['country'] ;}?> >
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
