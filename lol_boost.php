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
      
    <!------------Navbar 2------------>
<div class="collapse navbar-collapse main-nav dashboard-nav">
                <ul class="nav navbar-nav">
                    <li><a href="account.php">Purchase Account</a></li>
                    <li class="divider-vertical"></li>
                    <li  class="active"><a href="lol_boost.php">Buy EloBoost</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="buy_coaching.php">Buy Coaching</a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>

    <!------------Main Content-------------->

    <!--Form Initialization and Title -->
<form class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<fieldset>
    <div>
        <h4 class="form-title">Purchase EloBoost</h4>
        <hr class="dashboard-divider">
    </div>

<!--FORM BODY -->
<div class="panel-body">
    <d1 class="accordion">
        <div class="col-xs-12 col-lg-4 normal">
            <div class="pricing-title">
                Current Rank
            </div>

            <div>
                <select class="form-control normal" id="from">
                    <option value="0">Bronze 5</option>
                    <option value="1">Bronze 4</option>
                    <option value="2">Bronze 3</option>
                    <option value="3">Bronze 2</option>
                    <option value="4">Bronze 1</option>
                    <option value="5">Silver 5</option>
                    <option value="6">Silver 4</option>
                    <option value="7">Silver 3</option>
                    <option value="8">Silver 2</option>
                    <option value="9">Silver 1</option>
                    <option value="10">Gold 5</option>
                    <option value="11">Gold 4</option>
                    <option value="12">Gold 3</option>
                    <option value="13">Gold 2</option>
                    <option value="14">Gold 1</option>
                    <option value="15">Platinum 5</option>
                    <option value="16">Platinum 4</option>
                    <option value="17">Platinum 3</option>
                    <option value="18">Platinum 2</option>
                    <option value="19">Platinum 1</option>
                    <option value="20">Diamond 5</option>
                    <option value="21">Diamond 4</option>
                    <option value="22">Diamond 3</option>
                    <option value="23">Diamond 2</option>
                    <option value="24">Diamond 1</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4">
            <div class="pricing-title">
                Desired Rank
            </div>
            <div>
                <select class="form-control normal" id="to">
                    <option value="0">Bronze 5</option>
                    <option value="1">Bronze 4</option>
                    <option value="2">Bronze 3</option>
                    <option value="3">Bronze 2</option>
                    <option value="4">Bronze 1</option>

                    <option value="5">Silver 5</option>
                    <option value="6">Silver 4</option>
                    <option value="7">Silver 3</option>
                    <option value="8">Silver 2</option>
                    <option value="9">Silver 1</option>

                    <option value="10">Gold 5</option>
                    <option value="11">Gold 4</option>
                    <option value="12">Gold 3</option>
                    <option value="13">Gold 2</option>
                    <option value="14">Gold 1</option>

                    <option value="15">Platinum 5</option>
                    <option value="16">Platinum 4</option>
                    <option value="17">Platinum 3</option>
                    <option value="18">Platinum 2</option>
                    <option value="19">Platinum 1</option>

                    <option value="20">Diamond 5</option>
                    <option value="21">Diamond 4</option>
                    <option value="22">Diamond 3</option>
                    <option value="23">Diamond 2</option>
                    <option value="24">Diamond 1</option>
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-lg-4">
            <div class="pricing-title">
                Server
            </div>

            <div>
                <select class="form-control normal" id="desiredServer">
                    <option>EUW</option>
                    <option>EUNE</option>
                    <option>NA</option>
                    <option>Oce</option>
                </select>
            </div>
        </div>

        <div class="row center">
            <h2 class="pricing-title" id="price"></h2>
        </div>

    <div class="row center">
        <label>
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="hosted_button_id" value="KZ4GR5Y34G7CY">
            <input type="submit" value="Pay now" name="submit" title="PayPal - The safer, easier way to pay online!" class="paypal-button btn2">
            <input type="hidden" name="business" value="otp-boosting@hotmail.com">
            <input type="hidden" name="item_name" value="EloBoost">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="amount" id="amt_val" value="">
        </label>
    </div>
    </d1>
</div>
</fieldset>
</form>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   


    <!-- Calculating Price script.
    ================================================== -->

<script>
           var fromValue = 0;
            var toValue = 0;
            var currentCost = 0;
            $("#from").on('change',function(){
                fromValue = $(this).val();

                calcCost()
            });
            $("#to").on('change',function(){
                toValue = $(this).val();

                calcCost()
            });

            function calcCost()
            {
                currentCost = 0;
                if (toValue - fromValue <= 0)
                {
                    document.getElementById("price").innerHTML = "Invalid Start.";
                }
                else
                {
                    for (var i = fromValue - 1 ; i <= toValue; i++)
                    {
                        if (i < 5)
                        {
                            currentCost = currentCost + 5;
                        }
                        else if (i < 10)
                        {
                            currentCost = currentCost + 10;
                        }
                        else if (i < 15)
                        {
                            currentCost = currentCost + 15;
                        }
                        else if (i < 20)
                        {
                            currentCost = currentCost + 20;
                        }
                        else if (i < 25)
                        {
                            currentCost = currentCost + 25;
                        }
                    }

                    document.getElementById("price").innerHTML = currentCost+"$";
                    document.getElementById("amt_val").value = currentCost;
                }
            }
    </script>

 <!-- END OF Calculating Script.
    ================================================== -->

    
  </body>
</html>
