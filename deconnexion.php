<?php

  // pour l'instant , on ne supprime pas encore les variabke de ssion,
  // on s'assure juste que tout s epasse bien

  $_SESSION['droit']=' ';
    $_SESSION['nom']=' ';
      $_SESSION['prenom']=' ';
        $_SESSION['email']=' ';
        header("location:connexion.php");
 ?>
