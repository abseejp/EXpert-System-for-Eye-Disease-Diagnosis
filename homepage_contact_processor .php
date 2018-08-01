<?php

$con = mysqli_connect("localhost", "root", "");
	
	$db_select = mysqli_select_db($con, "expert");
	if(!$db_select){
		echo "Database selection failed :" . mysql_error();
	}

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$pnumber = $_POST['pnumber'];
		$message = $_POST['feedback'];


		$name=mysqli_real_escape_string($con, $_POST['name']);
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$pnumber=mysqli_real_escape_string($con, $_POST['pnumber']);
		$message=mysqli_real_escape_string($con, $_POST['feedback']);


		$sql="INSERT INTO contact(name,email,pnumber,message)
		VALUES('$name','$email', '$pnumber','$message')";
		mysqli_query($con, $sql);
	
		echo "<script>alert('Form Submitted Successfully. We will get back to you Soon. Thank You!!!');</script>";
		echo "<script>document.location='homepage.php'</script>";
			
		
		

		
	}
   


	
?>


