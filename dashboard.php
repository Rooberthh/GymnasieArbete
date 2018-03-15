<?php
require_once('core/init.php');

//define page title
$title = 'GymnasieArbete';

//include header template
require('layout/header.php');


?>

<!-- NAVBAR
================================================== -->
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
                <li ><a href="boosters.php">Boosters</a></li>
                <li><a href="about.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>

                 <?php
                 $user = new User();
                 if($user->isLoggedIn()) {
                     echo '<li class="active"><a href="dashboard.php">Dashboard</a></li>';
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
			<h1 class="title-heading">DASHBOARD</h1>
			<div class="featurette-title-divider"></div>
      <span class="caption">Purchase your new fresh level 30 account.<br>
                            Buy EloBoost from our proffesional boosting roster. <br>
                            Buy coaching from our dedicated challanger/master coaches.
      </span>
	  </div>

	<!------------MAIN CONTENT-------------->

<div class="collapse navbar-collapse main-nav dashboard-nav">
                <ul class="nav navbar-nav">
                    <li><a href="account.php">Purchase Account</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="lol_boost.php">Buy EloBoost</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="buy_coaching.php">Buy Coaching</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
