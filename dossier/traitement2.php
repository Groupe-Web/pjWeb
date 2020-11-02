<?php
  include('connect.php');
  $id="";

  $_GET['id']=''; //la valeur sera envoyée a partir de la page js

  $req="DELETE * FROM reserver  WHERE id=:id";
  $sth=$conn->prepare($req);
  $sth->bindValue("id",$_GET['id']);
  $sth->execute();
  $tabRes = $sth->fetchAll(PDO::FETCH_ASSOC);//mt tou sles resultats dans un tableau
 echo json_encode($tabRes);
  //echo $tabRes;

  ?>
