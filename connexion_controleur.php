<?php

//controleur de la page de connexion
//elle refere la page connexion.php
      try{
              include("Library.php");
              //recupération des champs html en php
                if(isset($_POST['email']) && isset($_POST['password']) && verifyToken($_POST['token'])){

                //recupération des champs en POSTaprès avoir tester si
                //ils sont bel et bien remplis
                $email=$_POST['email'];
                $pass=$_POST['password'];

                $_SESSION['email']= $email;

                //
                //requette de selection des utilisateurs
                $sth = $conn->prepare('SELECT * FROM utilisateur
                                          WHERE email=:email');

                $sth->bindValue(':email',$email);
                /*on peut ajouter le PDO:: PARAM_INT ou  STR*/


                $sth->execute();//execution de la requette
                $count=0; //compteur de resultat ,si 0 alors pas de resultats

                foreach ($sth as $row) {

                  /* parcourir chaque ligne de la table user
                     des qu'il ya correspondance, alors incrementer count pour dire trouvé
                     et sortir immediatement de la boucle
                  */
                  if(password_verify(passhidden($pass),$row['motdepasseHAshed'])){
                    $count=1;
                    break;
                  }
                //incrementation a chaque ligne trouvée
                }

                if($count==0){
                  //pas de ligne trouvée alors on  déclenche un pop-up js
                  //echo" <script language='javascript'>alert('cet utilisateur est non present dans la base');</script>";
                  ?>
                    <script language='javascript'>
                      //on utilise ici du jquery pour pouvoir ecrire dans une div particulièreq
                      //le # indique que l'on identifie la div avec son id sinon ctait le point
                      $("#br").after("<span style='color:orange; font-weight:bold;'>email ou pass incorrect</span>");
                    </script>
                  <?php
                  //destruction des variables pour eviter de reload
                  unset($email);
                  unset($pass);
                }
                else{
                //  echo " there are ".$count." arrays";
                //si on a trouver cet utilisateur, alors on se dirige vers la page de reservation

                      header('Location: reservation.php');
                }
              }

          }
      catch(PDOException $e){

          echo " <br> erreur dans la requette ".$e->getMessage();
      }

?>
