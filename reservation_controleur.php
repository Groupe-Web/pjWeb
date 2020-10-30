<?php

include('class/Reserver.php');
include('class/Creneau.php');
include('class/Salle.php');
include('class/Utilisateur.php');
include('connect.php');

//récupération des salles
function getListeSalle($conn){
  $result = $conn->query('SELECT *
                          FROM salle
                          WHERE nbplace > 0');

  while($donnee = $result->fetch()){
    $listeSalles[] = new Salle($donnee['numero'], $donnee['nbplace'], $donnee['nbplacelibre']);
  }
  return $listeSalles;
}

//affiche menu deroulant listes
function menuDeroulantListe($conn){
  $listeSalle = getListeSalle($conn);
  foreach ($listeSalle as $numeroSalle){
    echo "<option value='".$numeroSalle->getNumero()."'>".$numeroSalle->getNumero()."</option>";
    //echo "</br>".$numeroSalle->getNumero();
  }
}


//récupération des creneaux
function getListeCreneau()
{
  $result = $conn->query('SELECT *
                          FROM creneau');

  while($donnee = $result->fetch()){
    $listeCreneaux[] = new Creneau($donnee->id, $donnee->date_deb, $donnee->date_fin);
  }

  return $listeCreneaux;
}



function getNbPlacesLibres($salle){
  if($salle==null)
    return 'erreur fonction getnbplacelibre';
  $result = $conn->prepare('SELECT nbplacelibre as nl
                          FROM Reserver
                          WHERE numero=:numero');
  $result->bindValue(':numero',$salle->numero);
  $result->execute();
  return $result;
}

//Récupération historique des réservations
function getHistorique($email, $conn){
  if($email==null)
    return 'erreur au niveu de la fonction getHistorique';
  $result = $conn->prepare('SELECT *
                          FROM Reserver
                          INNER JOIN utilisateur on id_utilisateur=utilisateur.id
                          INNER JOIN Creneau on id_creneau=creneau.id
                          INNER JOIN Salle on id_salle=numero
                          WHERE email=:email');
  $result->bindValue(':email', $email);
  $result->execute();

  return $result['placelibre'];
}

//supression d'une réservation et augmentation du nombre de place libre
function delHistorique($reserver){
  if($reserver==null)
    return 'erreur au niveu de la fonction getHistorique';
  $result = $conn->prepare('DELETE *
                          FROM Reserver
                          WHERE id=:id');
  $result->bindValue(':id', $reserver->id);
  $result->execute();

  $result = $conn->prepare('UPDATE Salle
                          SET nbplacelibre=nbplacelibre+1
                          WHERE id=:id');
  $result->bindValue(':id', $reserver->id_salle);
  $result->execute();
}
