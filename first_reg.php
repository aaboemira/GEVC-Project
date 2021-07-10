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
	<title>GEVC Challenge</title>
</head>
<body>
	<div class="px-0 container-fluid">
		<div class=" top container-fluid justify-content-center">
			<div class="main-content pt-4 text-center">
				<img src="GEVC_logo.png" width="550px">
				<h1 class="title text-center">
				Are you up to the challenge<span  class="qmark">?</span>
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
					<h1 class=" text-center pl-2" style="color: white;">
						Initial Facts
					</h1>
					<hr style="border-color: rgb(255,255,255,0.2);">
				<h3  style="color: white;">
				About the Competition
				</h3>
				<p style="color: white;" class="about mt-2">
				The Global Electric Vehicle Challenge<span style="     vertical-align: top; font-size:0.85rem;">&#174;</span> (GEVC) is the newest collegiate competition organized by Global EEE that will raise the bar in terms of technology, innovation and engineering skills.  Student teams will design, build and race high performance formula-style electric racecars.  The first year of the competition will consist of the design and analysis phase.  Entries will be judged by a panel of international experts and awards will be granted in various categories.  The second year will consist of building and testing the car then racing on an exciting grand prix circuit.
				</p>
				<hr style="border-color:white;"> 
				<h3 style="color: white;">
					Tentative Schedule
				</h3>
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
					<h3 style="color: white;" class="  mt-2">Ready for the challenge<span  class="qmark">?</span>  </h3>
					<p class="ready" style="color: white;">Fill out the registration form to place your team on the distribution list. You will be notified when the rules and regulations are released and will receive timely competition announcements.</p>
				</div>
				<div class="col-6 form-content pb-2 pt-4">
					<form name="test" action="register.php"  id="form" method="POST">
							<h1 class=" E1 text-center mb-4 ">
										Registration form	
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
							<label  for="name">Name:</label>
							<input type="text " required name="name" value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['name'] ;}""?> >
							</div>

							<div class="form-group col-12">
							<label for="title"> Title:</label>
							<input type="text" name="title"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['title'] ;}""?> >
							</div>

							<div class="form-group col-12">
							<label for="email"> Email Address:</label>
							<input type="email" name="email"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['email'] ;}""?>>
							</div>

							<div class="form-group col-12">
							<label for="phone"> Telephone Number:</label>
							<input type="text"  name="phone"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['phone'] ;}""?>>
							</div>

							<div class="form-group col-12">
							<label for="Uname"> University Name:</label>
							<input type="text" name="Uname"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['Uname'] ;}""?>>
							</div>

							<div class="form-group col-12">
							<label for="country"> Country:</label>
							<input type="text" name="country"required value=<?php if (isset($_SESSION['FormData'])){ echo $_SESSION['FormData']['country'] ;}""?>>
							</div>
							
							<div class="submit col-12">
								<button style="width: 45%;"  name="submit" type="submit" class="btn btn-success ">Submit</button>
								<button style="width: 45%" class=" btn btn-warning " type="reset" <?php if (isset($_SESSION['FormData'])){ echo("onclick='location.reload();'");}?>> Reset</button>	<?php unset($_SESSION['FormData']);?>
							</div>
					</form>	
				</div>



			</div>
		</div>
	</div>
</body>
</html>
