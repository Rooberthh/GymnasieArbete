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

	  	<div class="boosting-title" style="background-image: url('https://boosteria.org/wp-content/uploads/league-of-legends-coaching.jpg');">
			<h1 class="title-heading">DASHBOARD</h1>
			<div class="featurette-title-divider"></div>
	  </div>
	  
	<!------------Navbar 2-------------->
    
<div class="collapse navbar-collapse main-nav dashboard-nav">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="account.php">Purchase Account</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="lol_boost.php">Buy EloBoost</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#contact">Buy Coaching</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>

    <!------------Main Content-------------->
      <form class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<fieldset>

<!-- Title Name -->
<h4 class="form-title">Buy Coaching</h4>
<hr class="dashboard-divider">
<!-- Select Server -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Server</label>
  <div class="col-md-4">
    <select id="server" name="server" class="form-control normal">
      <option value="">EUW</option>
      <option value="">EUNE</option>
      <option value="">NA</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Roles/Position</label>
  <div class="col-md-4">
    <select id="coach_role" name="coach_role" class="form-control normal">
      <option value="">Top</option>
      <option value="">Jungle</option>
      <option value="">Mid</option>
      <option value="">ADC</option>
      <option value="">Support</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Session Time</label>
  <div class="col-md-4">
    <select id="session_time" name="session_time" class="form-control normal" onChange="test()">
      <option value="1">1hr</option>
      <option value="2">2hr</option>
      <option value="3">3hr</option>
      <option value="4">4hr</option>
      <option value="5">5hr</option>
    </select>
  </div>
</div>

<div class="row center">
  <h2 class="pricing-title" id="coach_price"></h2>
</div>


<div class="row center">
        <label>
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="hosted_button_id" value="KZ4GR5Y34G7CY">
            <input type="submit" value="Pay now" name="submit" title="PayPal - The safer, easier way to pay online!" class="paypal-button btn2">
            <input type="hidden" name="business" value="otp-boosting@hotmail.com">
            <input type="hidden" name="item_name" value="Coaching">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="amount" id="amt_val" value="">
        </label>
</div>
</fieldset>
</form>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

     <!-- Calculating Price script.
    ================================================== -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>  
    var sessionValue = 0;
    var currentCost = 0;

          $('#session_time').change(function(){
           sessionValue = $(this).val();
      
           calcCost()
           });

       function calcCost()
            {
                currentCost = 0;

                if(sessionValue == 1)
                {
                  currentCost = 80;
                  document.getElementById("coach_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;

                }
                else if(sessionValue == 2)
                {
                  currentCost = 160;
                  document.getElementById("coach_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;
                }
                 else if(sessionValue == 3)
                {
                  currentCost = 240;
                  document.getElementById("coach_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;
                }
                 else if(sessionValue == 4)
                {
                  currentCost = 320;
                  document.getElementById("coach_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;
                }
                 else if(sessionValue == 5)
                {
                  currentCost = 400;
                  document.getElementById("coach_price").innerHTML = currentCost +"$";
                  document.getElementById("amt_val").value = currentCost;
                }
            }

</script>

  </body>
</html>
