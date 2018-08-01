<?php

include ('connection/db.php');
	
	if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'expert') or die(mysqli_error($con));
        
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];


    $first = mysqli_real_escape_string( $con,$first);
    $last = mysqli_real_escape_string( $con,$last);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $phone = mysqli_real_escape_string( $con,$phone);
    $address = mysqli_real_escape_string( $con,$address);
    $gender = mysqli_real_escape_string( $con,$gender);
    $age = mysqli_real_escape_string( $con,$age);
    $cpassword = mysqli_real_escape_string( $con,$cpassword);
  

    $query = "INSERT INTO users(first, last, email, phone, address, age, gender, password, cpassword) 
			VALUES('$first','$last','$email','$phone','$address','$age', '$gender', '$password','$cpassword');";
            
            if ($password !== $cpassword) {
               echo "<script>window.alert('your passwords do not match')</script>";
               echo "<script>document.location='signup.php'</script>";
            }else{
			if (mysqli_query($con, $query)) {
			echo "<script>window.alert('Registration is Successfully!!!')</script>";
            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}/*end of insert statement for patient*/

}
?>