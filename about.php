<?php
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
                <li ><a href="boosters.php">Boosters</a></li>
                <li class="active"><a href="about.php">FAQ</a></li>
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
			<h1 class="title-heading">FAQ</h1>
			<div class="featurette-title-divider"></div>
			<span class="caption">Frequently asked questions about boosting<br> 
             and our company. <br/>
             <br>
            </span>
	    </div>
	  
	<!------------MAIN CONTENT-------------->
    

    <div class="container">
    <br>
    <br>
    <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How does it work?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                     
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    After ordering your boost we will one of our boosters to your account, This booster will take your account to your desired division.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Does the booster have access to the shop?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    The shop is unavailible to all boosters unless you allowance is granted by you      
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How long does it take?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    The boosting rate is minimum one division per day below diamond 5, However all boosters will aim to complete as much of their boost as possible per day.
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">I want to be a booster, How do i contact you?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
					Go to the contact tab and fill in the form with the subject "booster", We will then review your application and get back to you using your account registred email. Remember that we only recruit <strong> one-tricks</strong> to our boosting roster.               
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    The only payment option right now is through paypal. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Pricing?
                    <span class="icon glyphicon glyphicon-play"> </span>
                    </a>
                </h4>
            </div>
        </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body row">
        <div class="col-xs-12 col-lg-4">
            <div class="pricing-title">
                Current Rank
            </div>
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
    </div>


        <div class="row center">
            <h2 class="pricing-title" id="price"></h2>
        </div>
    </d1>
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>


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
                }
            }
    </script>

 <!-- END OF Calculating Script.
    ================================================== -->

  </body>
</html>
