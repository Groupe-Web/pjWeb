<?php
session_start();  // ouverture d'une session
include_once('token.php');
attributeToken();
?>



<html>
  <head>
    <title> Connexion </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="connexion_style.css">
     <script src="jquery.js"></script>
      <script src="deconnexion.js"></script>
    <link rel="icon" href="images/img5.ico" /> <!-- pour mettre une icone -->
    </title>
  </head>

  <body>
    <script type='text/javascript'>
      sedeconnecter();
    </script>

    <div class="container">

          <div class="row" id='content' >
                <div class="col-md-4" id="content_left">

                </div>

                <div class="col-md-4" id="center">
                    <form name='form1' method='POST' action='' class="form-group">
                          <center><span id="connexion">Connexion</span>
                          <br><br>
                          <!--//?= egale a echo en php-->
                          <input type='hidden' name='token' value="<?= $_SESSION['token'] ?>">
                          <input type='text' name='email' class="form-control" placeholder='email' required ><br>
                          <input type='password'  onkeyup="affiche();"class="form-control" name="password" id='pass' placeholder="password" required >
                          <br id="br">
                          <br>
                          <button type='submit'class="bouton" name='envoyer'>Valider</button></center>
                          <br>
                          <div id='div_clavier' class='class_clavier' style="display:block;">
                          <?php
                              include_once('clavier.php'); //apel de la page qui contient le clavier

                           ?>
                         </div>


                    </form>
                </div>
                <div class="col-md-4" id="content_right">

                </div>

          </div>

          <!--footer-->
            <div class="row" id='footer'>
            <div class="col-md-4" id='footer_left'></div>
            <div class="col-md-4" id='footer_center'>

            </div>
            <div class="col-md-4" id='footer_right'></div>
          </div>
    </div>

  </body>
  <?php
      include("connect.php"); //connexion à la bd
      include("connexion_controleur.php");//page du code back-end

   ?>


</html>
