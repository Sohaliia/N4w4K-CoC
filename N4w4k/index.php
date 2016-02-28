<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Clan N4W4K CoC</title>
	<link rel="stylesheet" href="css/styleneige.css">
	<link rel="stylesheet" href="css/stylelogin.css">
  </head>

 <body>
 	<div id="particles-js">
 	<div class="cont">
<div class="demo">
    
   <?php  
   if(isset($_GET["error"]))
   {
   		echo '<script language="JavaScript">alert(\'Utilisateur non reconnu\');</script>';
   		$urlCourante=$_SERVER["REQUEST_URI"];
   		$urlGet = explode("?",$urlCourante);
   		echo '<script language="JavaScript">
  		window.location.replace("index.php");</script>';
   }
   ?>
    <?php
      /*  if (isset($_GET['error'])) {
            echo '<p class="error">Une erreur s’est produite lors de votre connexion!</p>';
        }*/
        ?> 

    <div class="login">
   <form action="includes/process_login.php" method="POST">  
      <img src="images/N4w4k_logo.png" alt="" class="logo_index" />
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="pseudo" id="pseudo" placeholder="Pseudo"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="pwd" id="pwd" placeholder="Mot de Passe"/>
        </div>
        <button type="submit" class="login__submit">Go</button>
        <p class="login__signup">Pas encore membre? &nbsp;<a href="Inscription.php">Inscription</a></p>
        </div>
    </form>
    </div>
  

    <div class="app">
      <div class="app__top">
        <div class="app__menu-btn">
          <span></span>
        </div>
        <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
          <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
          <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
        </svg>
        <p class="app__hello">Bienvenue N4w4kien !</p>
        <div class="app__user">
          <img src="images/coc1.png" alt="" class="app__user-photo" />
          <span class="app__user-notif">3</span>
        </div>
        <div class="app__month">
          <span class="app__month-btn left"></span>
          <p class="app__month-name"> Mars</p>
          <span class="app__month-btn right"></span>
        </div>
      </div>
      <div class="app__bot">
        <div class="app__days">
          <div class="app__day weekday">Dim</div>
          <div class="app__day weekday">Lun</div>
          <div class="app__day weekday">Mar</div>
          <div class="app__day weekday">Mer</div>
          <div class="app__day weekday">Jeu</div>
          <div class="app__day weekday">Ven</div>
          <div class="app__day weekday">Sam</div>
          <div class="app__day date">8</div>
          <div class="app__day date">9</div>
          <div class="app__day date">10</div>
          <div class="app__day date">11</div>
          <div class="app__day date">12</div>
          <div class="app__day date">13</div>
          <div class="app__day date">14</div>
        </div>
        <div class="app__meetings">
          <div class="app__meeting">
            <img src="images/clanvsclan.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Guerre de clan</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">8 - 10am</span>
              <span class="app__meeting-place"></span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="images/clanvsclan.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Rush</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">1 - 3pm</span>
              <span class="app__meeting-place"></span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="images/clanvsclan.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Guerre de clan</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time"></span>
            </p>
          </div>
        </div>
      </div>
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
  </div>
	  </div>
	
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/login.js"></script>
    <script src="js/scriptindex.js"></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script src="js/scriptneige.js"></script>
  </body>
</html>
