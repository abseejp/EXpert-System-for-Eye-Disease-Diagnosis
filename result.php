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
		<!-- inclusion of the jQuery -->
      	<script src="js/jquery.js"></script>
		<style type="text/css">
		    body{
		            background: url(images/eye6.jpg) no-repeat fixed center;
		             background-size: 100% 100%;
		             background-blend-mode: hard-light;
		        }
		</style>
	 </head>
 	<body>

	<div class="container w3-white"  style ="text-align:center; height: 1100px; margin-top: 70px;">
	<?php 

	$conn = mysqli_connect("localhost", "root", "");  
    $db_select = mysqli_select_db($conn, "expert");

    if(!$db_select){
        echo "Database selection failed :" . mysql_error();
        }

		$_POST['submit'];


		if (empty($_POST['burn']) || empty($_POST['blur']) || empty($_POST['red'])  || empty($_POST['difficulty']) || empty($_POST['mucus']) || empty($_POST['tear']) || empty($_POST['yellow']) || empty($_POST['headache']) || empty($_POST['cough']) || empty($_POST['swollen']) || empty($_POST['overstrain']) || empty($_POST['sensitivity']) || empty($_POST['halos']) || empty($_POST['double']) || empty($_POST['near']) || empty($_POST['loss']) || empty($_POST['vomit']) || empty($_POST['pupil']) || empty($_POST['partially'])|| empty($_POST['decrease'])) {
		
		 	echo "<script>alert('sorry, you have to make selection for all inputs');</script>";
			echo "<script>document.location='diagnose.php'</script>";
		}else{

		$s1 = $_POST['burn'];
		$s2 = $_POST['blur'];
		$s3 = $_POST['red'];
		$s4 = $_POST['difficulty'];
		$s5 = $_POST['mucus'];
		$s6 = $_POST['tear'];
		$s7 = $_POST['yellow'];
		$s8 = $_POST['headache'];
		$s9 = $_POST['cough'];
		$s10 = $_POST['swollen'];
		$s11 = $_POST['overstrain'];
		$s12 = $_POST['sensitivity'];
		$s13 = $_POST['halos'];
		$s14 = $_POST['double'];
		$s15 = $_POST['near'];
		$s16 = $_POST['loss'];
		$s17 = $_POST['vomit'];
		$s18 = $_POST['pupil'];
		$s19 = $_POST['partially'];
		$s20 = $_POST['decrease'];

		// please remember to remove this later
		$output =  $s1 . " " .$s2. " " .$s3. " " .$s4. " " .$s5 . " ". $s6. " ". $s7. " ". $s8. " ". $s9. " ". $s10. " ". $s11. " ". $s12. " ". $s13. " ". $s14. " ". $s15. " ". $s16. " ". $s17. " ". $s18. " ". $s19. " ". $s20;
		// echo $output. "<br>";
		// rule 1
		if ($output == "yes yes yes no yes yes no no yes yes yes yes no no no no no no no no") {
            echo "<h1>Below is the summary of your inputs</h1>";
            echo "<table class='w3-table w3-bordered w3-striped w3-border w3-hoverable'>
		            	<thead>
		            		<tr class='w3-teal'>
			  					<th>Questions</th>
			  					<th>Answers</th>
		  					</tr>
		  				</thead>
		  				<tr>
						  <td>1. Do you experience itching and burning on your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>2. Do you experience a blurring vision?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>3. Do you experience redness in your eye color?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>4. Do you experience difficulty in seeing while driving at night?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>5. Do you experience a discharge of sticky mucus in your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>6. Do you have a tear in both eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>7. Do you experience yellowing of colors in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>8. Do you experience severe headache?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>9. Do you experience cough, running nose and scratching throat?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>10. Do you experience eye pain and swollen eyelid?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>11. Does your eyes constantly overstrain you?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>12. Do you experience an increased sensitivity to light?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>13. Do you see halos or rainbow colored cirle around light?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>14. Do you experience double vision in a single eye?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>15. Do you experience near sightedness(seeing only near things clearly)?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>16. Do you experience sudden loss of sight?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>17. Do you constant nausea and vomiting?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>18. Do you have a dilated pupil?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>19. Do you need to partially close your eyelid to see clearly?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>20. Do you need experience a sudden decrease in vision?</td>
						  <td>No</td>
						</tr>
				 </table>". "<br>". "<br>";
			$result=mysqli_query($conn, "SELECT * FROM disease where id = '1' ");
            $row=mysqli_fetch_array($result);
            echo "<h3 style= 'font-family:Monospace'> $session_id, based on your inputs; it has been diagnosed that you have". "<br> ";
            echo $row['disease']. "<br>";
            echo "<h3> please click on this Link to know what <a href= 'homepage_terms.php' class='w3-text-teal'> Conjuctivitis</a> is </h3>". "<br>";
            echo"<form>
				<input class='w3-btn w3-teal w3-xlarge' value='Print Report' onClick='javascript:window.print()'>
				</form>";
			            
		}
		// rule 2
		elseif($output == "no yes no yes no no yes no no no no yes yes yes yes no no no no no") {
			echo "<h1>Below is the summary of your inputs</h1>";
            echo "<table class='w3-table w3-bordered w3-striped w3-border w3-hoverable'>
		            	<thead>
		            		<tr class='w3-teal'>
			  					<th>Questions</th>
			  					<th>Answers</th>
		  					</tr>
		  				</thead>
		  				<tr>
						  <td>1. Do you experience itching and burning on your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>2. Do you experience a blurring vision?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>3. Do you experience redness in your eye color?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>4. Do you experience difficulty in seeing while driving at night?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>5. Do you experience a discharge of sticky mucus in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>6. Do you have a tear in both eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>7. Do you experience yellowing of colors in your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>8. Do you experience severe headache?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>9. Do you experience cough, running nose and scratching throat?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>10. Do you experience eye pain and swollen eyelid?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>11. Does your eyes constantly overstrain you?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>12. Do you experience an increased sensitivity to light?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>13. Do you see halos or rainbow colored cirle around light?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>14. Do you experience double vision in a single eye?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>15. Do you experience near sightedness(seeing only near things clearly)?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>16. Do you experience sudden loss of sight?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>17. Do you constant nausea and vomiting?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>18. Do you have a dilated pupil?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>19. Do you need to partially close your eyelid to see clearly?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>20. Do you need experience a sudden decrease in vision?</td>
						  <td>No</td>
						</tr>
				 </table>". "<br>". "<br>";
			$result=mysqli_query($conn, "SELECT * FROM disease where id = '2' ");
            $row=mysqli_fetch_array($result);
            echo "<h3 style= 'font-family:Monospace'> $session_id, based on your inputs; it has been diagnosed that you have". "<br> ";
            echo $row['disease']. "<br>";
            echo "<h3> please click on this Link to know what <a href= 'homepage_terms.php' class='w3-text-teal'> Cataract</a> is </h3>". "<br>";
            echo"<form>
				<input class='w3-btn w3-teal w3-xlarge' value='Print Report' onClick='javascript:window.print()'>
				</form>";
			            
		}
		// rule 3
		elseif ($output == "no yes yes yes no no yes no no yes no no yes no no yes yes yes no yes") {
			echo "<h1>Below is the summary of your inputs</h1>";
            echo "<table class='w3-table w3-bordered w3-striped w3-border w3-hoverable'>
		            	<thead>
		            		<tr class='w3-teal'>
			  					<th>Questions</th>
			  					<th>Answers</th>
		  					</tr>
		  				</thead>
		  				<tr>
						  <td>1. Do you experience itching and burning on your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>2. Do you experience a blurring vision?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>3. Do you experience redness in your eye color?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>4. Do you experience difficulty in seeing while driving at night?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>5. Do you experience a discharge of sticky mucus in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>6. Do you have a tear in both eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>7. Do you experience yellowing of colors in your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>8. Do you experience severe headache?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>9. Do you experience cough, running nose and scratching throat?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>10. Do you experience eye pain and swollen eyelid?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>11. Does your eyes constantly overstrain you?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>12. Do you experience an increased sensitivity to light?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>13. Do you see halos or rainbow colored cirle around light?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>14. Do you experience double vision in a single eye?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>15. Do you experience near sightedness(seeing only near things clearly)?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>16. Do you experience sudden loss of sight?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>17. Do you constant nausea and vomiting?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>18. Do you have a dilated pupil?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>19. Do you need to partially close your eyelid to see clearly?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>20. Do you need experience a sudden decrease in vision?</td>
						  <td>Yes</td>
						</tr>
				 </table>". "<br>". "<br>";
			$result=mysqli_query($conn, "SELECT * FROM disease where id = '3' ");
            $row=mysqli_fetch_array($result);
            echo "<h3 style= 'font-family:Monospace'> $session_id, based on your inputs; it has been diagnosed that you have". "<br> ";
            echo $row['disease']. "<br>";
            echo "<h3> please click on this Link to know what <a href= 'homepage_terms.php' class='w3-text-teal'> Glaucoma</a> is </h3>". "<br>";
            echo"<form>
				<input class='w3-btn w3-teal w3-xlarge' value='Print Report' onClick='javascript:window.print()'>
				</form>";

		}
		// rule 4
		elseif ($output == "no yes no yes no no no yes no no yes no no no yes no no no yes yes") {
			echo "<h1>Below is the summary of your inputs</h1>";
            echo "<table class='w3-table w3-bordered w3-striped w3-border w3-hoverable'>
		            	<thead>
		            		<tr class='w3-teal'>
			  					<th>Questions</th>
			  					<th>Answers</th>
		  					</tr>
		  				</thead>
		  				<tr>
						  <td>1. Do you experience itching and burning on your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>2. Do you experience a blurring vision?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>3. Do you experience redness in your eye color?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>4. Do you experience difficulty in seeing while driving at night?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>5. Do you experience a discharge of sticky mucus in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>6. Do you have a tear in both eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>7. Do you experience yellowing of colors in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>8. Do you experience severe headache?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>9. Do you experience cough, running nose and scratching throat?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>10. Do you experience eye pain and swollen eyelid?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>11. Does your eyes constantly overstrain you?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>12. Do you experience an increased sensitivity to light?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>13. Do you see halos or rainbow colored cirle around light?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>14. Do you experience double vision in a single eye?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>15. Do you experience near sightedness(seeing only near things clearly)?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>16. Do you experience sudden loss of sight?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>17. Do you constant nausea and vomiting?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>18. Do you have a dilated pupil?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>19. Do you need to partially close your eyelid to see clearly?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>20. Do you need experience a sudden decrease in vision?</td>
						  <td>Yes</td>
						</tr>
				 </table>". "<br>". "<br>";
			$result=mysqli_query($conn, "SELECT * FROM disease where id = '4' ");
            $row=mysqli_fetch_array($result);
            echo "<h3 style= 'font-family:Monospace'> $session_id, based on your inputs; it has been diagnosed that you have". "<br> ";
            echo $row['disease']. "<br>";
            echo "<h3> please click on this Link to know what <a href= 'homepage_terms.php' class='w3-text-teal'> Myopia</a> is </h3>". "<br>";
            echo"<form>
				<input class='w3-btn w3-teal w3-xlarge' value='Print Report' onClick='javascript:window.print()'>
				</form>";

		}
		// rule 5
		elseif ($output == "yes no yes yes yes no no no no yes no yes no no no yes no no no yes") {
			echo "<h1>Below is the summary of your inputs</h1>";
            echo "<table class='w3-table w3-bordered w3-striped w3-border w3-hoverable'>
		            	<thead>
		            		<tr class='w3-teal'>
			  					<th>Questions</th>
			  					<th>Answers</th>
		  					</tr>
		  				</thead>
		  				<tr>
						  <td>1. Do you experience itching and burning on your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>2. Do you experience a blurring vision?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>3. Do you experience redness in your eye color?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>4. Do you experience difficulty in seeing while driving at night?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>5. Do you experience a discharge of sticky mucus in your eyes?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>6. Do you have a tear in both eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>7. Do you experience yellowing of colors in your eyes?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>8. Do you experience severe headache?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>9. Do you experience cough, running nose and scratching throat?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>10. Do you experience eye pain and swollen eyelid?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>11. Does your eyes constantly overstrain you?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>12. Do you experience an increased sensitivity to light?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>13. Do you see halos or rainbow colored cirle around light?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>14. Do you experience double vision in a single eye?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>15. Do you experience near sightedness(seeing only near things clearly)?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>16. Do you experience sudden loss of sight?</td>
						  <td>Yes</td>
						</tr>
						<tr>
						  <td>17. Do you constant nausea and vomiting?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>18. Do you have a dilated pupil?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>19. Do you need to partially close your eyelid to see clearly?</td>
						  <td>No</td>
						</tr>
						<tr>
						  <td>20. Do you need experience a sudden decrease in vision?</td>
						  <td>Yes</td>
						</tr>
				 </table>". "<br>". "<br>";
			$result=mysqli_query($conn, "SELECT * FROM disease where id = '5' ");
            $row=mysqli_fetch_array($result);
            echo "<h3 style= 'font-family:Monospace'> $session_id, based on your inputs; it has been diagnosed that you have". "<br> ";
            echo $row['disease']. "<br>";
            echo "<h3> please click on this Link to know what <a href= 'homepage_terms.php' class='w3-text-teal'> Ocular Allergy</a> is </h3>". "<br>";
            echo"<form>
				<input class='w3-btn w3-teal w3-xlarge' value='Print Report' onClick='javascript:window.print()'>
				</form>";
		}else
		// last rule
		{
			echo "<br>. <br>";
			echo "Do you experience itching and burning on your eyes? ". " "." ". $s1. "<br>";
			echo "Do you experience a blurring vision? " . " ". " ". $s2 . "<br>";
			echo "Do you experience redness in your eye color? " . " ". " ". $s3 . "<br>";
			echo "Do you experience difficulty in seeing while driving at night? " . " ". " ". $s4 . "<br>";
			echo "Do you experience a discharge of sticky mucus in your eyes? " . " ". " ". $s5 . "<br>";
			echo "Do you have a tear in both eyes? " . " ". " ". $s6 . "<br>";
			echo "Do you experience yellowing of colors in your eyes? " . " ". " ". $s7 . "<br>";
			echo "Do you experience severe headache? " . " ". " ". $s8 . "<br>";
			echo "Do you experience cough, running nose and scratching throat? " . " ". " ". $s9 . "<br>";
			echo "Do you experience eye pain and swollen eyelid? " . " ". " ". $s10 . "<br>";
			echo "Does your eyes constantly overstrain you? " . " ". " ". $s11 . "<br>";
			echo "Do you experience an increased sensitivity to light? " . " ". " ". $s12 . "<br>";
			echo "Do you see halos or rainbow colored cirle around light? " . " ". " ". $s13 . "<br>";
			echo "Do you experience double vision in a single eye? " . " ". " ". $s14 . "<br>";
			echo "Do you experience near sightedness(seeing only near things clearly)? " . " ". " ". $s15 . "<br>";
			echo "Do you experience sudden loss of sight?? " . " ". " ". $s16 . "<br>";
			echo "Do you constant nausea and vomiting? " . " ". " ". $s17 . "<br>";
			echo "Do you have a dilated pupil? " . " ". " ". $s18 . "<br>";
			echo "Do you need to partially close your eyelid to see clearly? " . " ". " ". $s19 . "<br>";
			echo "Do you need experience a sudden decrease in vision? " . " ". " ". $s20 . "<br>";
			echo "<br>. <br>";
			echo "<h3 style= 'font-family:Monospace'> sorry $session_id, this expert system doesn't cover the range of eye disease that correspond  to your inputs. it is still under construction. do check back later.". "<br>";
		}
		


	
}

	?>

	</div>
		
	
 	


	<?php include ('footer.php'); ?> 
 	</body>
  

      

      <!-- inclusion of the Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      </html>