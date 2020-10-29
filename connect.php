<?php
    $servname = 'localhost';
    $dbname = 'base';
    $user = 'root';
    $pass = '';

      try {

        $conn = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo " connecte a la base <br>";

      }
      catch (Exception $e) {

        echo "erreur lors de la connection a la BD";

      }


 ?>
