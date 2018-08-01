<?php include ('header.php'); ?>

<?php include ('navbar.php'); ?>
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

<div class="container w3-teal" style="margin-top: 40px;">
    <div class="row">
        <div class="col-lg-12" style="">
            <h1 class="page-header" style="text-align: center; color: white">Fill the Form below to Create Account</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" action="register.php" method="post">
                    <!-- for the first name and the last name -->
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label" style="color: white">First Name<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" name="first" id="firstname" class="form-control input-lg"" placeholder="Enter your first name" required>
                    </div>

                    <label for="lastname" class="col-sm-2 col-sm-offset-1 control-label" style="color: white">Last Name<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" name="last" id="lastname" placeholder="Enter your last name" class="form-control input-lg"" required>
                    </div>
                </div><br>

                    <!-- for email and phone -->
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label" style="color: white">Email Address<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="email" name="email" id="email" class="form-control input-lg"" placeholder="Enter your email address" required>
                    </div>

                    <label for="phone" class="col-sm-2 col-sm-offset-1 control-label" style="color: white">Phone<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="number" id="phone" name="phone" class="form-control input-lg" placeholder="Enter your Phone Number" required>
                    </div>

                </div><br>

                    <!-- for address -->
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label" style="color: white">Address<span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" class="form-control input-lg" placeholder="Enter your address" required>
                    </div>
                </div><br>

                    <!-- for age and gender -->
                <div class="form-group">

                    <label for="age" class="col-sm-2 control-label" style="color: white">Age<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="number" id="age" name="age" class="form-control input-lg" required>
                    </div>

                    <label for="whoareyou" class="col-sm-2 col-sm-offset-1 control-label" style="color: white">Sex<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <select name="gender" id="sex" class="form-control input-lg" required>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    
                </div><br>

                    <!-- password and confirm password -->
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label" style="color: white">Password<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="password" name="password" id="password" class="form-control input-lg"" placeholder="Enter a strong password" required>
                    </div>

                    <label for="password" class="col-sm-2 col-sm-offset-1 control-label" style="color: white">Confirm Password<span style="color:red">*</span></label>
                    <div class="col-sm-3">
                        <input type="password" name="cpassword" id="cpassword" class="form-control input-lg" placeholder="Re-enter the password" required>
                    </div> 
                </div>
                <br><br>
                <!-- insert a glyphicon here -->
                <div class="form-group" style="margin-bottom: 100px; text-align: center;">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" name="submit" class="w3-btn w3-black w3-xlarge w3-hover-white ">Register <span class="glyphicon glyphicon-fast-forward"></span></button>
                    </div>
                </div>
            </form>

</div>
</div>
</div>

    <?php include 'footer.php'; ?>  

          
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>