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

	
      <div class="container"><h1 style="text-align: center; margin-bottom: 50px; margin-top: 50px; font-family:Monospace" class="w3-text-white w3-black"><b>Below are the various terms related to this project</b></h1></div>
	<div class="container-fluid">
		<div class="col-sm-12">
			<div class="col-lg-4">
				<button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-teal w3-hover-white" style="height: 100px; width: 400px;">Expert System</button>
			</div>
			<div class="col-lg-4 ">
				<button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-hover-white" style="height: 100px; width: 400px;">Opthalmologist</button>
			</div>
			<div class="col-lg-4">
				<button onclick="document.getElementById('id03').style.display='block'" class="w3-btn w3-teal w3-hover-white" style="height: 100px; width: 400px;">Eye</button>
			</div><br><br><br><br><br><br><br><br><br><br>
		</div>
		<!-- second row of modal for terms -->
		<div class="col-sm-12">
			<div class="col-lg-4 ">
				<button onclick="document.getElementById('id04').style.display='block'" class="w3-btn w3-hover-white" style="height: 100px; width: 400px;">Conjuctivitis</button>
			</div>
			<div class="col-lg-4 ">
				<button onclick="document.getElementById('id05').style.display='block'" class="w3-btn w3-teal w3-hover-white" style="height: 100px; width: 400px;">Cataract</button>
			</div>
			<div class="col-lg-4">
				<button onclick="document.getElementById('id06').style.display='block'" class="w3-btn w3-hover-white" style="height: 100px; width: 400px;">Glaucoma</button>
			</div><br><br><br><br><br><br><br><br><br><br>
		</div>
		<!-- third row of modal for terms -->

		<div class="col-sm-12">
			<div class="col-lg-4 ">
				<button onclick="document.getElementById('id07').style.display='block'" class="w3-btn w3-teal w3-hover-white" style="height: 100px; width: 400px;">Myopia</button>
			</div>
			<div class="col-lg-4 ">
				<button onclick="document.getElementById('id08').style.display='block'" class="w3-btn w3-hover-white" style="height: 100px; width: 400px;">Ocular Allergy</button>
			</div>
			<div class="col-lg-4">
				<button onclick="document.getElementById('id09').style.display='block'" class="w3-btn w3-teal w3-hover-white" style="height: 100px; width: 400px;">Term 9</button>
			</div><br><br><br><br><br><br><br><br><br><br>
		</div>

    	<div id="id01" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
			    <header class="w3-container w3-teal"> 
			      <span onclick="document.getElementById('id01').style.display='none'" 
			      class="w3-closebtn">&times;</span>
			      <h2>Expert System</h2>
			    </header>
			    <div class="w3-container">
			      <p>An Expert System is a system that bla bla bla...................</p>
			      <p>Some text..</p>
			    </div>
			    <footer class="w3-container w3-teal">
			      <p>Copyright &copy; 2018 | Abseejaypee</p>
			    </footer>
		  	</div>
		</div>
		<div id="id02" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
			    <header class="w3-container w3-teal"> 
			      <span onclick="document.getElementById('id02').style.display='none'" 
			      class="w3-closebtn">&times;</span>
			      <h2>Opthalmologist</h2>
			    </header>
			    <div class="w3-container">
			      <p>An Opthalmologist is someone that bla bla bla...................</p>
			      <p>Some text..</p>
			    </div>
			    <footer class="w3-container w3-teal">
			      <p>Copyright &copy; 2018 | Abseejaypee</p>
			    </footer>
		  	</div>
		</div>
		<div id="id03" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
			    <header class="w3-container w3-teal"> 
			      <span onclick="document.getElementById('id03').style.display='none'" 
			      class="w3-closebtn">&times;</span>
			      <h2>Eye</h2>
			    </header>
			    <div class="w3-container">
			      <p>The Human Eye is an organ that  bla bla bla...................</p>
			      <p>Some text..</p>
			    </div>
			    <footer class="w3-container w3-teal">
			      <p>Copyright &copy; 2018 | Abseejaypee</p>
			    </footer>
		  	</div>
		</div>

		<div id="id04" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id04').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Conjuctivitis</h2>
				</header>
				<div class="w3-container">
				    <p>Conjuctivitis is  bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		<div id="id05" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id05').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Cataract</h2>
				</header>
				<div class="w3-container">
				    <p>Cataract is bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		<div id="id06" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id06').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Glaucoma</h2>
				</header>
				<div class="w3-container">
				    <p>Glaucoma is bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		<div id="id07" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id07').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Myopia</h2>
				</header>
				<div class="w3-container">
				    <p>Myopia is bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		<div id="id08" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id08').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Ocular Allergy</h2>
				</header>
				<div class="w3-container">
				    <p>Ocular Allergy is bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		<div id="id09" class="w3-modal w3-animate-opacity">
		  	<div class="w3-modal-content w3-card-8">
				<header class="w3-container w3-teal"> 
				    <span onclick="document.getElementById('id09').style.display='none'" 
				     class="w3-closebtn">&times;</span>
				     <h2>Eye</h2>
				</header>
				<div class="w3-container">
				    <p>The Human Eye is an organ that  bla bla bla...................</p>
				    <p>Some text..</p>
				</div>
				<footer class="w3-container w3-teal">
				    <p>Copyright &copy; 2018 | Abseejaypee</p>
				</footer>
		  	</div>
		</div>

		</div>
		</div>
	</div>

		<?php include ('footer.php'); ?>

	<!-- inclusion of the jQuery -->
    <script src="js/jquery.js"></script>

    <!-- inclusion of the Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



	