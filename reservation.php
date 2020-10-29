<?php
  session_start()
?>

<html>
<head>
  <title>Reservation</title>
    <link rel="icon" href="images/img5.ico" /> <!-- pour mettre une icone -->
</head>
<body>
      <h1>hello</h1><br>
      <?php

          echo  "<h1> BONJOUR  ".$_SESSION["email"]." </h1>";
      ?>
</body>
</html>
