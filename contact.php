<?php
//include config
require_once('core/init.php');

//define page title
$title = 'GymnasieArbete';

//include header template
require('layout/header.php'); 

if(isset($_POST['submit'])){
    $to = "ondfantaburk@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . "wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    Redirect::to('index.php');
    }

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
                <li ><a href="index.php">Home</a></li>
                <li ><a href="boosters.php">Boosters</a></li>
                <li><a href="about.php">FAQ</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>

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
    
	  <div class="container">
	  	<div class="boosting-title">
			<h1 class="title-heading">Contact Us</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">You can ask us any questions regarding our company or employment <application></application>.<br> 
    		</span>
	  	
	  	
	  </div>
	  
	


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
   

<div col-md-5 img-thumbnail>
                    <div id="feedback" class="row"> <div class="container">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
        			<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group application">
					<select name="subject" class="form-control" id="subject" required>
 						<option value="" disabled selected class="disabled_option">Subject</option>
  						<option value="booster_application">Booster Application</option>
  						<option value="coaching_application">Coach Application</option>
  						<option value="business">Business</option>
  						<option value="general">General</option>
					</select>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="1000" rows="10"></textarea>                                 
                    </div>
            
        <button type="button" id="submit" name="submit" value="Submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div> </div> <!--feedback-->





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