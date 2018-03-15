<?php
require_once('core/init.php');


//Include header template
require('layout/header.php'); 



?>


<!-- NAVBAR================================================== -->
  <body>

  <div class="cssload-loader">
    <div class="cssload-inner cssload-one"></div>
    <div class="cssload-inner cssload-two"></div>
    <div class="cssload-inner cssload-three"></div>
  </div>
  
  <div class="remove-content">
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
                <li class="active"><a href="index.php">Home</a></li>
                <li ><a href="boosters.php">Boosters</a></li>
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://i.imgur.com/pZ6MEe8.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>YOU'LL NEED AN ACCOUNT TO ORDER</h1>
              <p>Click on sign up to create your account and order your first boost!</p>
              <p><a class="btn-carousel btn-lg" href="sign-up.php" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://i.imgur.com/izxvrPb.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Any questions?</h1>
              <p>Click on the FAQ tab to check for the most asked questions, if your's is not here head over to the contact tab and fill in the form.</p>
              <p><a class="btn-carousel btn-lg" href="about.php" role="button">FAQ</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://i.imgur.com/TKNV53j.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Who are the boosters?</h1>
              <p>Go to the boosters tab, To learn more about our employees and check their portfolio.</p>
              <p><a class="btn-carousel btn-lg" href="boosters.php" role="button">Browse boosters</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

 <!-- MAIN CONTENT
    ================================================== -->

    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="http://i.imgur.com/LDLjSdf.png" alt="Generic placeholder image" style="height: 250px">
          <h2>Secure</h2>
          <p>Your security is our number one priority. OTP-boosting is more secure then any other service out there, a ban rate of only 0.002% makes us the most secure boosting company on the market. </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="http://i.imgur.com/idKowLk.png" alt="Generic placeholder image" style="height: 250px">
    

          <h2>Members</h2>
          <p>Register now and get accces to our exclusive membersarea dashboard, were you can buy your new smurf, your eloboost or order your own coaching session from one of our coaches</p>
         
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://i.imgur.com/EcpjBt0.png" alt="Generic placeholder image" style="height: 250px">
          
          
          <h2>Coaching</h2>
          <p>Are you looking for guidance? Stuck in a certain elo? Look no further, Login and order your coaching session from one of our dedicated challenger/master tier coaches.</p>
          
        </div>
      </div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">OUR BOOSTERS ARE</h2>
          <div class="featurette-title-divider"> </div> 
          <ul class="lead-header">
          	<li><h3>Available 24/7</h3></li>
            <li><h3>One-Trick Ponies</h3></li>
            <li><h3>Reliable and Secure</h3></li>
            <li><h3>Customer Oriented</h3></li>
          </ul>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="https://s-media-cache-ak0.pinimg.com/736x/93/b4/f1/93b4f1391382fa59ecb780379804f860.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

     
     <div class="row">
        <div class="col-lg-4">
        
          <img class="img-circle" src="http://i.imgur.com/u5ISHL1.png" alt="Generic placeholder image" style="height: 250px">
          <h2>One-Tricks</h2>
          <p>We are recruting among the best one-tricks! Minimum requirement for our applicants for position in our boosting roster at least Diamond. Thus ensuring your account is in good hands!</p>
          
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="http://i.imgur.com/mXtilcT.png" alt="Generic placeholder image" style="height: 250px">
    
          
          <h2>Fast Order Completion</h2>
          <p>We are always striving to make our customers happy! The average completion rate for orders under Diamond 5 with at least +16lp per game is at least one division per day.</p>
         
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="http://i.imgur.com/SEzmFto.png" alt="Generic placeholder image" style="height: 250px">
          
          
          <h2>Manners</h2>
          <p>We check our employees account to make sure they weren´t suspended in the last year and have a decent amount of honor. (Resets if account gets banned by tribunal) </p>
          
        </div>
      </div>

     
     
      <hr class="featurette-divider">



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
  </div>
</body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function() {
          setTimeout(function(){
             $('body').addClass('loaded');
             $('.remove-content').addClass('fade-in');
             $('.remove-content').removeClass('remove-content');
          }, 800);
      });
    </script>
</html>
