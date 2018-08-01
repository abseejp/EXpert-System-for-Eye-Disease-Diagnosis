
<?php 
include ('navbar.php');
include ('header.php');
include("connection/db.php");
 ?>
 <head>
		<!-- Link to the external css folder -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<style type="text/css">
			
			body{
            background: url(images/eye6.jpg) no-repeat fixed center;
             background-size: 100% 100%;
             background-blend-mode: hard-light;
        }
		</style>
</head>

			<div class="container w3-teal" style="background-color: black; color: white; margin-top: 40px;">		
				  	<h2 style="text-align: center;">Fill the Contact form below to get, and you will be attented to shortly</h2><br><br>
					<form method="POST" action="contact_processor.php" class="row">
						<div class="container">
						    	<div class="form-group col-sm-6">
							    	<label for="name">NAME:</label><br>
							    	<input type="text" name="name" class="form-control input-lg" id="name" required>
							    </div>
							   
							    <div class="form-group col-sm-6">
							    	<label for="email">E-MAIL:</label><br>
							    	<span><input type="email" name="email" class="form-control input-lg" id="email" required></span>
							    </div>

						    	<div class="form-group col-sm-6">
							     	<label for="pnumber">PHONE NUMBER:</label>
							    	<span><input type="number" name="pnumber" id="pnumber" class="form-control input-lg" required></span>
						    	</div>

						    	<div class="form-group col-sm-6">
							    	<label for="subject">SUBJECT:</label>
	                              	<textarea name="feedback" placeholder="Write something.." id="subject" class="form-control input-lg" required></textarea>

						   		</div>
							   <div class="form-group col-sm-2">
							   		<span><input type="submit" value="Submit" name="submit" class="w3-btn w3-xxlarge w3-black w3-hover-white" style="border-radius: 2px;"></span>
							  </div>
						</div> 	
					 </form>
			
					<center>
					   	<div class="container-fluid w3-text-black">
							     	<h1>Contact Address  :</h1>
									    	<p>Department of Computer Science,</p>
									    	<p>Federal University Lokoja,</p>
									   		<p>Lokoja, Kogi State.</p>
							   		<p>Phone:+2348163815935</p>
							 	 	<p>Email: <span>enyoone3@gmail.com</span></p>
						</div>
					</center>
		</div>
		<?php include('footer.php')  ?>
			<!-- inclusion of the jQuery -->
    		<script src="js/jquery.js"></script>

    		<!-- inclusion of the Bootstrap Core JavaScript -->
    		<script src="js/bootstrap.min.js"></script>