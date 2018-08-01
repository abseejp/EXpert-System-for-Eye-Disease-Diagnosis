<?php 
  include ('session.php');
  include('homepage_navbar.php');
  include('header.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		
		body{
            background: url(images/eye6.jpg) no-repeat fixed center;
             background-size: 100% 100%;
             background-blend-mode: hard-light;
        }
	</style>
 </head>
 <body>
 	<!-- <div class="col-md-6 col-sm-offset-3 text-center" style="margin-top: 100px;" >
                <div class="thumbnail" style="outline-style: solid;">
                   <h4>Log in to start a session</h4>
                <form method="post" action="login.php" class="form-horizontal">
	                  <div class="form-group">
	                  		<label for="email" class="col-sm-4 control-label">Username:</label>
	                  		<div class="col-sm-6">
	                  			<input type="email" class="form-control" name="username" placeholder="Enter email">
	                  		</div>
	                  		
	                  </div>
	                  <div class="form-group">
	                  		<label for="password" class="col-sm-4 control-label">Password:</label>
	                  		<div class="col-sm-6">
	                  			<input type="password" class="form-control" name="password" placeholder="Password">
	                  		</div>
	                  		
	                  </div>
	                   <div class="form-group">
					        <div class="col-sm-6">
					          <div class="checkbox icheck">
					            <label>
					              <input type="checkbox">Remember Me
					            </label>
					          </div>
					        </div>
					        <div class="col-sm-6">
					           <button type="submit" class="btn btn-primary btn-flat">Sign In</button>
					        </div>

     				   </div> 
     				   <hr>
     				   <h6>Have no account? Click here to<a href="signup.php"> Register</a></h6>     
                </form>  
                </div>
            </div> -->

		<div class="container w3-white"  style ="text-align:center; height: 3000px; margin-top: 70px; width: 45%">
			<form action="result.php" method="post" >
				<div style="margin-top: 40px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience itching and burning on your eyes?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="burn" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="burn" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience a blurring vision?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="blur" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="blur" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience redness in your eye color?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="red" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="red" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>

				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience difficulty in seeing while driving at night?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="difficulty" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="difficulty" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience a discharge of sticky mucus in your eyes?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="mucus" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="mucus" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you have a tear in both eyes?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="tear" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="tear" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience yellowing of colors in your eyes?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="yellow" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="yellow" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience severe headache?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="headache" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="headache" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience cough, running nose and scratching throat?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="cough" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="cough" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience eye pain and swollen eyelid?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="swollen" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="swollen" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Does your eyes constantly overstrain you?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="overstrain" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="overstrain" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience an increased sensitivity to light?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="sensitivity" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="sensitivity" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you see halos or rainbow colored cirle around light?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="halos" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="halos" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience double vision in a single eye?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="double" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="double" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience near sightedness(seeing only near things clearly)?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="near" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="near" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you experience sudden loss of sight?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="loss" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="loss" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you constant nausea and vomiting?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="vomit" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="vomit" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you have a dilated pupil?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="pupil" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="pupil" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you need to partially close your eyelid to see clearly?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="partially" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="partially" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>
				<div style="margin-top: 70px;">
					<div class="w3-container w3-black w3-padding-xlarge w3-margin">
		  				<p>Do you need experience a sudden decrease in vision?</p>
		  			</div>
	  				<div class="col-sm-6">
		  				<input class="w3-radio" type="radio" name="decrease" value="yes">
						<label class="w3-validate">Yes</label>
					</div>
					<div class="col-sm-6">
						<input class="w3-radio" type="radio" name="decrease" value="no">
						<label class="w3-validate">No</label>
					</div>
				</div>


				<p><button style="margin-top: 40px;" class="w3-btn w3-hover-teal w3-xxlarge" name="submit">Submit</button></p>

		</form>
		</div>
        </div>
            <?php require ('footer.php'); ?>
            <!-- inclusion of the jQuery -->
    <script src="js/jquery.js"></script>

    <!-- inclusion of the Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>