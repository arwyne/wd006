<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title>COVID-19 Quickie</title>

	
    <!-- favicon -->
  	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >

    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/763fd16ca4.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Indie+Flower&family=Patrick+Hand&family=Source+Sans+Pro&family=Zilla+Slab&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- external css -->
	<link rel="stylesheet" type="text/css" href="./assets/css/healthcare.css">
	
</head>
<body>
	<div class="overall">
		<div class="container">
			<div class="app-container">
				<div class="app-head-container">
					<img class="img-fluid" src="./assets/images/kid2.png">
				</div>
					
				<div class="app-body-container">	
					<h1 id="title">COVID-19 Quickie (HEALTHCARE) </h1>
					<!-- Button trigger modal -->
					<h4 class="sub-title"> A tool that will help the officer to identify and assess a potential COVID-19 Virus candidate</h4>

					<div class="wrapper">
						<div class="icons-div">
							<i class="fas fa-list-ol icons"></i>
						</div>
						<div>
							<p class="disclaimer" >You will answer a few questions about symptoms, travel, and contact you’ve had with others.</p>
						</div>
					</div>

					<div class="wrapper">
						<div class="icons-div">
							<i class="fas fa-lock icons"></i>
						</div>
						<div>
							<p class="disclaimer">Your answers will be confidential</p>
						</div>
					</div>		

					<div class="wrapper">
						<div class="icons-div">
							<i class="far fa-thumbs-up icons"></i>
						</div>
						<div>
							<p class="disclaimer">By using this tool, you agree that our group will not be liable for any harm relating to your use.</p>
						</div>
					</div>	
					
					

					
					<div class="button-div">
						<button id="startbutton" type="button" class="btn btn-lg main-button bg-info text-light" data-toggle="modal" data-target="#startModal">
							Click This! To Get Started
						</button>
					</div>
				</div>

				
				<!-- Modal -->
				<div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">

							
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">COVID-19 Quickie</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<form action="./results.php" method="POST">
								<div class="modal-body">
									<div id="body">
										<div>
											<label for="firstName" class="initial">First Name:</label>
											<input type="text" id="firstName" name="firstName" placeholder="Your First Name" required>
										</div>

										<div>
											<label for="lastName" class="initial">Last Name:</label>
											<input type="text" id="lastName" name="lastName" placeholder="Your Last Name" required>
										</div>

										<div>
											<label for="age" class="initial">Age:</label>
											<input type="number" id="age" name="age" placeholder="Your Age" required>
										</div>

										<div>
											<label>Have you travelled outside the country during past 14 days?</label>
											<!-- <input type="radio" name="travel" value="yes">Yes
											<input type="radio" name="travel" value="no">No -->

											<select name="travel" id="travelled">
												<!-- <option name="" value="" disabled></option> -->
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>

										<div>
											<label>Body Temperature: </label>
											<select name="temperature" id="temperature">
												<!-- <option name="" value="" disabled></option> -->
												<option value="above">>37.5 &#8451;</option>
												<option value="below"><37.5 &#8451;</option>
											</select>
										</div>


									</div>

								</div>
								

								<div id="button-container" class="modal-footer">
									<button id="submit" type="submit" class="btn btn-info">Submit</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
			<img class="gb2" src="./assets/images/gb2.png">
			<img class="ob2" src="./assets/images/ob2.png">
			<img class="gb3" src="./assets/images/gb3.png">
			<img class="ob3" src="./assets/images/ob3.png">
	</div>	

		
	<!-- covid live update -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- external js -->
	<!-- <script src ="./assets/js/healthcare.js"></script>-->
</body>
</html>