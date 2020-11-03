<?php
  include('reservation_controleur.php');
  // include('connect.php');
  $email='sandy@3il.fr';?>
  <html>
    <body>
      <table>
        <?php getHistorique($email, $conn);?>
      </table>
      <br >

      <table>
        <?php print_r(getListeCreneau($conn, 309))?>

      </table>
    </body>
  </html>
