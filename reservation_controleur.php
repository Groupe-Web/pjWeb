<?php

require_once('class/Reserver.php');
require_once('class/Creneau.php');
require_once('class/Salle.php');
require_once('class/Utilsateur.php');
require_once('connect.php');

public function getListeSalle()
{
  $listeSalles = new array();
  //requête d'obtention des salles
  $result = $conn->query('SELECT *
                          FROM salle
                          WHERE nbplace > 0');

  while($donnee = $result->fetch()){
    $listeSalles[] = new Salle($donnee->numero, $donnee->nbplace);
  }

  return $listeSalles;
}

public function getListeSalle()
{
  //requête d'obtention des salles
  $result = $conn->query('SELECT *
                          FROM salle
                          WHERE nbplace > 0');

  while($donnee = $result->fetch()){
    $listeSalles[] = new Salle($donnee->numero, $donnee->nbplace);
  }

  return $listeSalles;
}

public function getListeCreneau()
{
  //requête d'obtention des creneaux
  $result = $conn->query('SELECT *
                          FROM creneau');

  while($donnee = $result->fetch()){
    $listeCreneaux[] = new Creneau($donnee->id, $donnee->date_deb, $donnee->date_fin);
  }

  return $listeCreneaux;
}

public function getListeReserver($email)
{
  //requête d'obtention des creneaux
  $result = $conn->query('SELECT *
                          FROM creneau');

  while($donnee = $result->fetch()){
    $listeCreneaux[] = new Creneau($donnee->id, $donnee->date_deb, $donnee->date_fin);
  }

  return $listeCreneaux;
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
