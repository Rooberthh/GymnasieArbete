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
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
              ),
            'password' => array(
                'required' => true,
                'min' => 6
              ),
            'password_confirmation' => array(
                'required' => true,
                'matches' => 'password'
              ),
            'email' => array(
                'required' => true,
                'min' => 2,
                'max' => 255,
              )
        ));

         if($validate->passed()){
          $user = new User();

          $salt = Hash::salt(32);

          try{
              $user->create(array(
                'username' => Input::get('username'),
                'password' => Hash::make(Input::get('password'), $salt),
                'email' => Input::get('email'),
                'salt' => $salt,
                'group' => 1
                ));

              Redirect::to('login.php');

          } catch(Exception $e){
            die($e->getMessage());
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
                     echo '<li><a href="dashboard.php">Dashboard</a></li>';
                      echo '<li><a href="update.php">Settings</a></li>';
                     echo '<li><a href="logout.php">Logout</a></li>';
                     } else {
                     echo '<li><a href="login.php">Login</a></li>';
                     echo '<li class="active"><a href="sign-up.php">Sign Up</a></li>';
                } ?>  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
	  <div>
	  	<div class="boosting-title">
			<h1 class="title-heading">Sign Up</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">Sign up to be able to order boosts or coaching sessions.<br> 
    		</span>
	  	
	  	
	  </div>
	  
	


    <!-- FORM CONTENT
    ================================================== -->
    

     <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div>
			    		<h3 class="panel-title">Create your account</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="sign-up.php" method="POST">

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" class="form-control input-sm" placeholder="Username">
                      <span class="error" aria-live="polite"></span>
			    					</div>
			    				</div>


			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="email" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>" class="form-control input-sm" placeholder="Email">
                      <span class="error" aria-live="polite"></span>
			    					</div>
			    				</div>
			    			</div>


			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                      <span class="error" aria-live="polite"></span>
			    					</div>
			    				</div>

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                      <span class="error" aria-live="polite"></span>
			    					</div>
			    				</div>
			    			</div>

                <input type="hidden" name="token" val="<?php echo Token::generate(); ?>">
			    			<input type="submit" value="Register" class="btn-carousel btn-danger btn-lg btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
