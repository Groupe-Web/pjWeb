<?php
  include('reservation_controleur.php');
  // include('connect.php');
  $email='sandy@3il.fr';?>
  <html>
    <body>

      <br >

      <table>
        <?php print_r(getListeCreneau($conn, 309))?>

      </table>
    </body>
  </html>
