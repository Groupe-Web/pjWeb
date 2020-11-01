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
        <?php getListeCreneau($conn)?>
      </table>
    </body>
  </html>
