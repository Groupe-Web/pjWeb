<!DOCTYPE html>
<?php
  session_start();

  $_SESSION =array();

  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  }

  session_destroy();
  ?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Accueil_style.css">
    <link rel="icon" href="images/img5.ico" /> <!-- pour mettre une icone -->

    <meta charset="utf-8">
    <title>3IL ZED</title>
  </head>
  <header>
      <!--p id="texte">
        Bienvenue sur ZED Reservation!
      </p-->
      <img src="Images/Texte.png" alt="Welcome text" id="imageBienvenue">
  </header>
  <body>--
      <button type="button" name="button" class="bouton">
        <a href="connexion.php">
         <marquee width="300" scrollamount="0" scrolldelay="300"> Se connecter</marquee>

       </a>
      </button>
  </body>
</html>
