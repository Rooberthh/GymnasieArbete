<?php
//include config
require_once('core/init.php');


//define page title
$title = 'GymnasieArbete';

//include header template
require('layout/header.php'); 


 if(Input::exists()){

  $validate = new Validate();
  $validation = $validate->check($_POST, array(
        'username' => array('required' => true),
        'password' => array('required' => true)
      ));

  if($validate->passed()){
    $user = new User();
    $login = $user->login(Input::get('username'), Input::get('password'));

            if($login){
             Redirect::to('index.php');
            }else{
              echo '<p> Sorry, login failed.</p>';
            }
          }else{
          foreach($validation->errors() as $error)
          echo $error, '<br>';
      }
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
                <li><a href="index.php">Home</a></li>
                <li><a href="boosters.php">Boosters</a></li>
                <li><a href="about.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>

                 <?php 
                 $user = new User();
                 if($user->isLoggedIn()) {
                     echo '<li><a href="dashboard/dashboard.php">Dashboard</a></li>';
                      echo '<li><a href="update.php">Settings</a></li>';
                     echo '<li><a href="logout.php">Logout</a></li>';
                     } else {
                     echo '<li class="active"><a href="login.php">Login</a></li>';
                     echo '<li><a href="sign-up.php">Sign Up</a></li>';

                } ?>  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
   

	  <div>
	  	<div class="boosting-title">
			<h1 class="title-heading">Sign In</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">Login to access your account and order boosts or coaching sessions.<br> 
    		</span>
	  </div>
    </div>
	  
	


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    

     <div class="container">
    
<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<form role="form" method="POST" action="">
			<fieldset>
				<h2 class="panel-title">Login</h2>
				<div class="form-group">
                    <input type="text" name="username" id="" class="form-control input-lg test" placeholder="Username" autocomplete="off">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="" class="form-control input-lg" placeholder="Password" autocomplete="off">
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="hidden" name="token" val="<?php echo Token::generate(); ?>">
                        <input type="submit" class="btn-primary btn-lg btn-block" value="Log in">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="sign-up.php" class=" btn-carousel btn-lg btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>  
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>

