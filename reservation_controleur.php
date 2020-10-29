<?php

require_once('class/Reserver.php');
require_once('class/Creneau.php');
require_once('class/Salle.php');
require_once('class/Utilsateur.php');
require_once('connect.php');

//récupération des salles
public function getListeSalle()
{
  $result = $conn->query('SELECT *
                          FROM salle
                          WHERE nbplace > 0');

  while($donnee = $result->fetch()){
    $listeSalles[] = new Salle($donnee->numero, $donnee->nbplace);
  }

  return $listeSalles;
}

//récupération des creneaux
public function getListeCreneau()
{
  $result = $conn->query('SELECT *
                          FROM creneau');

  while($donnee = $result->fetch()){
    $listeCreneaux[] = new Creneau($donnee->id, $donnee->date_deb, $donnee->date_fin);
  }

  return $listeCreneaux;
}

//récupération des réservation
public function getListeReserver($email)
{
  $result = $conn->query('SELECT *
                          FROM creneau');

  while($donnee = $result->fetch()){
    $listeCreneaux[] = new Creneau($donnee->id, $donnee->date_deb, $donnee->date_fin);
  }

  return $listeCreneaux;
}

public function getNbPlacesLibres($salle){
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
public function getHistorique($email=$_SESSION['email']){
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

  return $result[placelibre];
}

//supression d'une réservation et augmentation du nombre de place libre
public function delHistorique($reserver){
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




// public function insererReservation(){
//   try{
//
//           //recupération des champs html en php
//           if(isset($_POST['email']) && isset($_POST['password'])){
//
//             //recupération des champs en POSTaprès avoir tester si
//             //ils sont bel etv vien rempli
//             $email=$_POST['email'];
//             $pass=$_POST['password'];
//
//             $_SESSION['email']= $email;
//
//             //
//             //requette de selection des utilisateurs
//             $sth = $conn->prepare('SELECT email,motdepasse FROM utilisateur
//                                 WHERE email=:email AND motdepasse=:pass');
//
//           //passage par valeur
//             $sth->bindvalue(':email',$email);
//             $sth->bindvalue(':pass',$pass);
//
//             $sth->execute();//execution de la requette
//             $count=0; //compteur de resultat ,si 0 alors pas de resultats
//
//             foreach ($sth as $row) {
//               $count++; //incrementation a chaque ligne trouvée
//             }
//
//             if($count==0){
//               //pas de ligne trouvée alors on  déclenche un pop-up js
//               echo" <script language='javascript'>alert('cet utilisateur est non present dans la base');</script>";
//
//               //destruction des variables pour eviter de reload
//               unset($email);
//               unset($pass);
//             }
//             else{
//             //  echo " there are ".$count." arrays";
//             //si on a trouver cet utilisateur, alors on se dirige vers la page de reservation
//
//                   header('Location: reservation.php');
//             }
//           }
//
//       }
//   catch(PDOException $e){
//
//       echo " <br> erreur dans la requette ".$e->getMessage();
//   }

}
