<?php
session_start();
  include('connect.php');

  $req="SELECT id,date_reservation FROM reserver ";
  $sth=$conn->prepare($req);
  $sth->execute();
  $tabRes = $sth->fetchAll(PDO::FETCH_ASSOC);//mt tou sles resultats dans un tableau
 echo json_encode($tabRes);
  //echo $tabRes;

  ?>
