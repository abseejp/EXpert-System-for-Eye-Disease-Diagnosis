<link rel="stylesheet" type="text/css" href="css/w3.css">
<nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
    <div class="container-fluid">

        <!-- including the concept of navbar responsiveness using bootsrap -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homepage.php"><img style="width: 100px; height: 100px; padding-bottom: 10px; margin-left: 0px;" src="images/absee.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
                <li> <a href="diagnose.php" class="w3-hover">Diagnose</a> </li>                    
                <li> <a href="result.php">Result</a> </li>
                <li> <a href="homepage_terms.php">Terms</a> </li>
                <li> <a href="homepage_about.php">About</a> </li>  
                <li> <a href="homepage_faq.php">FAQ's</a> </li>  
                <li> <a href="homepage_contactus.php">Contact me</a> </li>
                <li class="dropdown dropdown-big" style="margin-left: 20px;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <span><img src="images/absee.jpg"  style="width: 20px; height: 20px; border-radius: 100px;"></span> <?php echo $session_id; ?>
                        </a>  
                        <!-- you can also use this class above class="glyphicon glyphicon-user" -->
                        <ul class="dropdown-menu">
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>            
                        </ul>              
                    </li> 
            </ul>
        </div>

    </div>
    <!-- container closes here -->
</nav> 
<!-- navbar closes here -->
