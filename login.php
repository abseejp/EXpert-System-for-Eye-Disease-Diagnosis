<?php 
    include 'header.php'; 
    include('navbar.php'); 

?>
<head>
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <style type="text/css">
        body{
            background: url(images/eye6.jpg) no-repeat fixed center;
             background-size: 100% 100%;
             background-blend-mode: hard-light;
        }
    </style>

</head>
<body>
<!-- Page Content -->
<div class="container w3-teal" style="text-align: center; margin-top: 40px;">
    
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="font-size: 40px; color:white">Login or Create Account</h1>
        </div>
    </div>
    <!-- /.row -->

    
    <div class="row">
        <div class="col-md-4 col-sm-offset-4">
            <!-- the login form starts here-->

            <form class="form-horizontal" action="signin.php" method="POST">
                    <!-- the username field -->
                <div class="form-group">

                    <label for="username" class="col-sm-2 control-label" style="color: white;">Username</label><br>
                     <div class="col-sm-12">
                        <input type="text" name="email" class="form-control input-lg" placeholder="Enter Your email" id="username" >
                    </div><br><br><br>

                    <label for="username" class="col-sm-2 control-label" style="color: white;">Password</label>
                    <div class="col-sm-12">
                        <input  type="password" name="password" class="form-control input-lg" placeholder="Enter Your password" id="password" >
                    </div>
                </div><br>
                
                <div class="form-group">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-warning w3-btn w3-xlarge w3-black w3-hover-white" name="submit">Login <span class="glyphicon glyphicon-fast-forward"></span></button>
                    </div>
                </div>
            </form>
       </div>

    </div>
    <div class="container">
                    <h3 style="font-size: 20px; color: white;">Have no account? Click <a href="signup.php" style="color: black" class="w3-hover-black">here</a> to create one for yourself</h3> 
                   <!--  <button type="button" class="w3-btn w3-large w3-teal"><a href="signup.php" style="color: #ffffff; text-decoration: none;">Create Account</a></button> -->
                </div>
</div>


        <?php include('footer.php'); ?>


    <!-- connect to the jQuery -->
    <script src="js/jquery.js"></script>

    <!--connect to the Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
