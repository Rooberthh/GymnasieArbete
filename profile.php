<?php

require_once 'core/init.php';


if(!$username = Input::get('user')){
	Redirect::to('index.php');
}else{
	 $user = new User($username);
    if(!$user->exists()) {
        Redirect::to(404);
    }else{
        $data = $user->data();
    }
}

require('layout/header.php'); 

$title = 'GymnasieArbete';

?>
<body id="body2">

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

/* Main Content
-------------------------------------------------- */
<div style="margin-top: 60px">
<div class="container" style="background-color: #FFF; border-radius: 5px;">


    <div class="col-md-3 sidebar">
      <img class="img-circle" id="profile-picture" src="userfiles/<?php echo escape($username); ?>.png" alt="Generic placeholder image">
          <h2 class="user-profile-name"><?php echo escape($data->username); ?></h2>
          <div>
          	<h4 class="booster-positions"> Position/Roles: </h4>
            <p class="booster-roles"> <?php echo escape($data->pref_roles); ?></p>
          </div>
    </div>
    



    <div class="col-md-offset-3">
      <h3 class="profile_header"> About </h3>
      <p> <?php echo escape($data->user_bio); ?>	 </p>
    </div>

    <div class="col-md-offset-3">
      <h3 class="profile_header"> Boosting Statistics </h3>

      <div class="row">
        <div class="col-lg-2">
          <img class="img-circle" src="https://opgg-static.akamaized.net/images/medals/bronze_1.png" alt="Generic placeholder image" style="height: 100px;" >
           <div>
            <h3>Bronze</h3>
          </div>

          <div>
          <span class="booster-wins"> Wins: 0</span>
          </div>

          <div>
          <span class="booster-defeat"> Losses: 0</span>
          </div>

           <div>
          <span class="booster-winrate"> Win Rate: 0%</span>
          </div>

        </div>

         <div class="col-lg-2">
          <img class="img-circle" src="http://vignette2.wikia.nocookie.net/leagueoflegends/images/3/3f/SilverBadgeSeason2.png/revision/latest?cb=20130928162033"  alt="Generic placeholder image" style="height: 100px;">
           <div>
            <h3>Silver</h3>
          </div>

          <div>
          <span class="booster-wins"> Wins: 0</span>
          </div>

          <div>
          <span class="booster-defeat"> Losses: 0</span>
          </div>

           <div>
          <span class="booster-winrate"> Win Rate: 0%</span>
          </div>

        </div>

        <div class="col-lg-2">
          <img class="img-circle" src="http://sk2.op.gg/images/medals/gold_5.png" alt="Generic placeholder image" style="height: 100px;">
           <div>
            <h3>Gold</h3>
          </div>

          <div>
          <span class="booster-wins"> Wins: 0</span>
          </div>

          <div>
          <span class="booster-defeat"> Losses: 0</span>
          </div>

           <div>
          <span class="booster-winrate"> Win Rate: 0%</span>
          </div>

        </div>

        <div class="col-lg-2">
          <img class="img-circle" src="https://boosteria.org/wp-content/themes/clevercourse-v1-00/images/divisions/platinum_1.png" alt="Generic placeholder image" style="height: 100px;">
           <div>
            <h3>Platinum</h3>
          </div>

          <div>
          <span class="booster-wins"> Wins: 0</span>
          </div>

          <div>
          <span class="booster-defeat"> Losses: 0</span>
          </div>

           <div>
          <span class="booster-winrate"> Win Rate: 0%</span>
          </div>

        </div>


        <div class="col-lg-2">
          <img class="img-circle" src="https://www.lol-smurfs.com/wordpress/lol-smurfs/wp-content/uploads/2017/01/diamond_3.png" alt="Generic placeholder image" style="height: 100px;">

          <div>
            <h3>Diamond</h3>
          </div>

          <div>
          <span class="booster-wins"> Wins: 0</span>
          </div>

          <div>
          <span class="booster-defeat"> Losses: 0</span>
          </div>

           <div>
          <span class="booster-winrate"> Win Rate: 0%</span>
          </div>

        </div>


        </div> <!-- /row -->
	</div> <!-- /sidebar offset -->
</div>
</div>
</body>