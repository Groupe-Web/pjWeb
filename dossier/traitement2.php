<?php
  include('connect.php');
  $id="";

  $req="DELETE * FROM reserver  WHERE id=:id";
  $sth=$conn->prepare($req);
  $sth->bindValue("id",)
  $sth->execute();
  $tabRes = $sth->fetchAll(PDO::FETCH_ASSOC);//mt tou sles resultats dans un tableau
 echo json_encode($tabRes);
  //echo $tabRes;

  ?>
