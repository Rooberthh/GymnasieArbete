<?php
require_once 'core/init.php';

//define page title
$title = 'GymnasieArbete';

//include header template
require('layout/header.php'); 

$user = new User();

if(!$user->isLoggedin()){
	Redirect::to('sign-up.php');
}


?>

 <body id="body1">


    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">OTP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="boosters.php">Boosters</a></li>
                <li><a href="about.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>

                 <?php 
                 $user = new User();
                 if($user->isLoggedIn()) {
                     echo '<li><a href="dashboard.php">Dashboard</a></li>';
                      echo '<li><a href="update.php">Settings</a></li>';
                     echo '<li><a href="logout.php">Logout</a></li>';
                     } else {
                     echo '<li><a href="login.php">Login</a></li>';
                     echo '<li><a href="sign-up.php">Sign Up</a></li>';
                     
                } ?>  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
	  <div>
	  	<div class="boosting-title" style="background-image: url('https://boosteria.org/wp-content/uploads/league-of-legends-coaching.jpg');">
			<h1 class="title-heading">Update Information</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">You can update your personal information here.<br> 
    		</span>
	  	
	  	
	  </div>
	  
	


    <!-- FORM CONTENT
    ================================================== -->

    <div class="collapse navbar-collapse main-nav dashboard-nav">
                <ul class="nav navbar-nav">
                    <li><a href="change_username.php">Change Username</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="change_email.php">Change Email</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="change_user-bio.php">Change Bio</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>