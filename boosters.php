<?php
//include config
require_once('core/init.php');

//define page title
$title = 'GymnasieArbete';

//include header template
require('layout/header.php'); 

?>

<!-- NAVBAR
================================================== -->
  <body>
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
                <li class="active"><a href="boosters.php">Boosters</a></li>
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
			<h1 class="title-heading">Boosters</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">Amazing people are working in our elo boosting company.<br> 
    We hire only one-trick ponies who we know are capable of working for us. <br />
   	Our Booster are dedicated video gamers who loves the game more than anything else.
    </span>
	  	
	  	
	  </div>
	  
	


    <!-- CONTENTS
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    

    <div class="container marketing">
      <div class="row">
       
       <!-- Profile 1 -->
        <div class="col-lg-4 booster-profiles">
        
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/TryndamereSquare1.png" alt="Generic placeholder image">
          <h2>Roberth</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> TOP LANE, JUNGLE</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        
        <a href="profile.php?user=Roberth" class="btn btn-lg btn2" >View Profile </a>
        
        
        </div><!-- /.col-lg-4 -->
        
        <!-- Profile 2 -->
         <div class="col-lg-4 booster-profiles">
        
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/NunuSquare1.png" alt="Generic placeholder image">
          <h2>Solis</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> JUNGLE</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        
			  <a href="profile.php?user=Solis" class="btn btn-lg btn2" >View Profile </a>

        </div><!-- /.col-lg-4 -->
        
        <!-- Profile 3 -->
         <div class="col-lg-4 booster-profiles">
        
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/SyndraSquare1.png" alt="Generic placeholder image">
          <h2>Mkey</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> MID LANE</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <a href="profile.php?user=Mkey" class="btn btn-lg btn2" >View Profile </a>
         
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      
      <div class="row">
       
        <!-- Profile 4 -->
        <div class="col-lg-4 booster-profiles">
        
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/BlitzcrankSquare1.png" alt="Generic placeholder image">
          <h2>Diamondspader</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> MID LANE, SUPPORT</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        
         <a href="profile.php?user=Diamondspader" class="btn btn-lg btn2" >View Profile </a>
        </div><!-- /.col-lg-4 -->
        
         <div class="col-lg-4 booster-profiles">
        
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/32_Web_0.jpg" alt="Generic placeholder image" width="120" height="120">
          <h2>Ralacks</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles">JUNGLE</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        
        <a href="profile.php?user=Ralacks" class="btn btn-lg btn2" >View Profile </a>
        
        
        </div><!-- /.col-lg-4 -->
        
        <!-- Profile 6 -->
         <div class="col-lg-4 booster-profiles">
          <img class="img-circle" src="http://elohell.net/public/champions/avatar/9_Web_0.jpg" alt="Generic placeholder image">
          <h2>Gosta</h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> TOP LANE, JUNGLE</p>
          </div>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
         <a href="profile.php?user=Gosta" class="btn btn-lg btn2" >View Profile </a>
         
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
     
     
      <hr class="featurette-divider">

      <!-- END THE PROFILES -->


      <!-- FOOTER -->
      <footer class="footer">
      
      <section>
    	<h3>Connect with us!</h3>
        <ul class="social"> 
        <li> <a href="#"><img src="https://www.w3newbie.com/wp-content/uploads/facebook1.png" alt=""/></a></li>
        <li> <a href="#"><img src="https://www.w3newbie.com/wp-content/uploads/twitter1.png" alt=""/></a></li>
         <li> <a href="#"><img src="https://www.w3newbie.com/wp-content/uploads/youtube1.png" alt=""/></a></li>
     	</ul>
    
    </section>
    
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 OTP-Boosting, Inc. </p>
      </footer>
      
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
