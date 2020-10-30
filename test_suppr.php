<?php
  include('connect.php');

  $req="SELECT id,date_reservation FROM reserver ";
  $sth=$conn->prepare($req);
  $sth->execute();

  foreach($sth as $rows){
    echo $rows['id']."  ".$rows['date_reservation']."<br>";
  }


 ?>
