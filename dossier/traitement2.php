<?php
session_start();
  include('connect.php');


  //la valeur sera envoyée a partir de la page js

if($_GET['myid']!=''){

  $req="DELETE  FROM reserver  WHERE id=:myid";
  $sth=$conn->prepare($req);
  $sth->bindParam(":myid",$_GET['myid']);

  $sth->execute();
}

  //$tabRes = $sth->fetchAll(PDO::FETCH_ASSOC);//mt tou sles resultats dans un tableau
 //echo json_encode($tabRes);
  //echo $tabRes;
//  include("traitement.php");


  ?>
