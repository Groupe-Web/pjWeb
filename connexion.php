<?php  session_start();  // ouverture d'une session?>

<html>
  <head>
    <title> Connexion </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </title>
  </head>

  <body>

    <div class="container">
          <div class="row" id="header">
              <div class="col-xs-12">
              <img src='images/logo3il.png'>
              </div>
          </div>

          <div class="row" id='content' >
                <div class="col-md-4" id="content_left">

                </div>

                <div class="col-md-4">
                    <form name='form1' method='POST' action=''>
                          <center> Connectez vous </center>
                         <input type='text' name='email' placeholder='email' required ><br>
                          <input type='password' name="password" placeholder="password" required >
                          <br>
                          <br>
                          <button type='submit' name='envoyer'>Valider</button>
                          <button type='reset' name='annuler'> Annuler </button>

                    </form>
                </div>

                <div class="col-md-4" id="content_right">

                </div>

          </div>

          <!--footer-->
            <div class="row" id='footer'>
            <div class="col-md-4" id='footer_left'></div>
            <div class="col-md-4" id='footer_center'></div>
            <div class="col-md-4" id='footer_right'></div>
          </div>
    </div>

  </body>

  <?php
      include("connect.php"); //connexion à la bd
      include("connexion_controleur.php");//page du code back-end

   ?>


</html>
