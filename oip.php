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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/oip_style.css">
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
	<div class="px-0 container-fluid">
		<div class=" top container-fluid justify-content-center">
			<div class="main-content pt-4 text-center">
				<img src="GEVC_logo.png" width="550px" style="position: relative;
    left: 9px;">
				<h1 class="title text-center">
				Officals and Volunteers Signup
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
		<div class="container-fluid I2 py-4 form-div">
			<div class="row mx-auto col-lg-8 px-0   d-flex justify-content-center mt-3 mb-4 ">
				<div class="col-6 left-form py-4" style="background-color: #231f20;">
					<!--<h1 class=" text-center pl-2" style="color: white;">
						Initial Facts
					</h1>
					<hr style="border-color: rgb(255,255,255,0.2);">!-->
				<p style="color: white; " class="about ">
				Thank you for lending your valuable time and expertise to help us make the Global Electric Vehicle
				Challenge® (GEVC) a successful and sustainable competition. This is the first year and therefore we will
				collectively be laying the foundation and setting the course for the future of the event.
				</p>
				<p style="color: white;" class="about mt-2">
				The GEVC is the newest collegiate competition organized by Global EEE that will raise the bar in terms of
				technology, innovation and engineering skills. Student teams will design, build and race high
				performance formula-style electric racecars. The first year of the competition will consist of the design
				and analysis phase, while in the second year they will build and test their cars then race on an exciting
				grand prix circuit. The current plan is to hold the first race at Circuit of the Americas in Austin, TX in June
				2022 followed by a race at Yas Marina Circuit in Abu Dhabi, UAE in January 2023.
				</p>
				<hr style="border-color:white;"> 
				<h3 style="color: white;">
					Tentative Schedule
				</h3>
				<a href=""></a>
					<table class="table" style="color: white">
					  <tbody class="schedule">
					    <tr>
					      <td scope="col">Release of official rules & regulations </td>
					      <td>01 January 2021</td>
					    </tr>
					    <tr>
					    <td scope="col">Registration opens</td>
					    <td>01 January 2021</td>
					    </tr>
					    <tr>
					    <td scope="col">GEVC virtual conference 1</td>
					    <td>16 January 2021</td>
					    </tr>
					    <tr>
					    <td scope="col">Registration closes</td>
					    <td>   31 January 2021</td>
					    </tr>
					    <tr>
					    	<td scope="col">GEVC virtual conference 2</td>
					    	<td> 13 February 2021</td>
					    </tr>
					    <tr>
					    	<td>Mid-competition team updates</td>
					    	<td> 24 April 2021</td>
					    </tr>
					    <tr>
					    	<td>Final team submissions</td>
					    	<td>30 June 2021</td>
					    </tr>
					    <tr>
					    	<td>GEVC awards announcement/ceremony</td>
					    	<td>31 July 2021</td>
					    </tr>
					  </tbody>
					</table> 
					<hr style="color: white; border-color: white;">
					<p style="color: white;" class="mt-2 about">
						We are seeking officials for both years. During the first year the roles will encompass overall event
						organization and team communication as well as judging and evaluation of team entries and reports. In
						addition we will be developing the plans for the race in year two
					</p>
					<p style="color: white;" class="mt-2 about">
						Please fill out the signup form on the right indicating your current interest areas. We understand that
						you need more information about the competition and the regulations to help you asses the level of
						effort and the degree to which you want to participate. Over the next three weeks you will receive a
						copy of the rules and regulations prior to its publication to the teams. For now we will use the signups to place you on the distribution list and to add you to the Officials page on the event website.  Only your name, organization/company, country and photo will appear on the Officials page.

 
					</p>
				</div>
				<div class="col-6 form-content pb-2 pt-4">
					<form name="test" action="oip_inc.php" enctype="multipart/form-data"  id="form" method="POST">
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
		                    <div class="posted-inf" id="reg">
			                    <b>This information will be posted on the Officials page </b>
								<div class="form-group col-12">
								<label  for="Fname">First Name:</label>
								<input type="text" required name="Fname" >
								</div>
								<div class="form-group col-12">
								<label for="Lname"> Last Name:</label>
								<input type="text" name="Lname"required>
								</div>

								<div class="form-group col-12">
								<label for="country"> Country:</label>
								<input type="text" name="country"required >
								</div>

								<div class="form-group col-12">
								<label for="image">Please upload your high resolution photo.</label>
								<input type="file" id="myfile" name="image">
								Use this photo as a guide. Smile please!
								</div>

								<div class="img-specifications text-center">
								<img class="specifications" src="Images/photo-specifications.jpg" style="">
								</div>

							</div>
							<hr>
							<div class="unposted-inf">
								<b>This information is for internal use only and will not be posted anywhere.</b>
								<div class="form-group col-12">
								<label for="org"> Affiliation/ Company:</label>
								<input type="text" name="org"required>
								</div>

								<div class="form-group col-12">
								<label for="title"> Title/Position:</label>
								<input type="text" name="title"required >
								</div>



								<div class="form-group col-12">
								<label for="email"> Email Address:</label>
								<input type="email" name="email"required>
								</div>

								<div class="form-group col-12">
								<label for="phone"> Telephone Number:</label>
								<input type="text"  name="phone"required>
								</div>

								<div class="form-group col-12">
								<label class="role" for="role"> Please indicate roles/position(s) you held in past competitions and any specific roles/areas you would
like to be involved with in the GEVC. You may leave this section blank if you don’t have a preference.</label>
<br>
								<textarea rows="3" type="text" class="role-inp"  name="role"></textarea>
								</div>
								<div class="submit col-12">
									<button style="width: 45%;"  name="submit" type="submit" class="btn btn-success ">Submit</button>
									<button style="width: 45%" class=" btn btn-warning " type="reset"> Reset</button>
								</div>
							</div>
					</form>	
				</div>
				<!--checkboxlimit(document.forms.test.role, 2)
				</script>!-->

			</div>
		</div>
	</div>
</body>
</html>
