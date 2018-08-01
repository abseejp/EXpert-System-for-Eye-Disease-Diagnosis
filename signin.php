<?php session_start(); 

?>


<?php

    $conn = mysqli_connect("localhost", "root", "");  
    $db_select = mysqli_select_db($conn, "expert");
    if(!$db_select){
        echo "Database selection failed :" . mysql_error();
        }
    
        
            $email = $_POST['email'];
            $password = $_POST['password'];
        
        // to prevent SQL injection
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $password=mysqli_real_escape_string($conn, $_POST['password']);

      
            $fetch=mysqli_query($conn, "select * from users where email='$email' and password= '$password'");
            $count=mysqli_num_rows($fetch);

        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo "<script>alert('sorry you have to fill in your username and password');</script>";
        echo "<script>document.location='login.php'</script>";
        }
        elseif($count!="")
        {
            $_SESSION['id']=$email;
            
            echo "<script>alert('yeah....... Programmer, Login Successful');</script>";
            echo "<script>document.location='homepage.php'</script>";
        }else
        {

            echo "<script>alert('Wrong username/password');</script>";
            echo "<script>document.location='login.php'</script>";   
        }

            
        
        

        
   
   


    
?>


