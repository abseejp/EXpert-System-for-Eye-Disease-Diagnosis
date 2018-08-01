<?php 
	include ('session.php');
	include('homepage_navbar.php');
	include('header.php');

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		body{
            background: url(images/eye6.jpg) no-repeat fixed center;
             background-size: 100% 100%;
             background-blend-mode: hard-light;
        }
	</style>
</head>
<body>
		<div class="container w3-white"  style ="text-align:center; height: 400px; margin-top: 70px; width: 50%;">
				<h1>Welcome to the Homepage</h1>
				<p><b>please read the instructions below on how this expert system works</b></p>
				<p>This is an expert system that will be used in the diagnosis of eye diseases</p>
				<p>in  order to  begin diagnosis, please click on the diagnosis tab on the navbar and follow the instuctions there</p>
				<p>After following the instructions on the diagnosis page, click the submit button to validate your inputs</p>
				<p>it will automatically perform some jangorism on your inputs, take you to the result page where you can see your result within seconds</p>
				<p>huuuuuuuhh,Simple right???</p>
				<p>Diagnosis made easier and cost-effective</p>


		</div>


    <!-- including the footer page -->
        <?php require ('footer.php'); ?>
  
    <!-- inclusion of the jQuery -->
    <script src="js/jquery.js"></script>

    <!-- inclusion of the Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

	


</html>