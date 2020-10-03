<html>
  <head>
    <title> Connexion </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </title>
  </head>

  <body>

    <div class="container">
          <div class="row" id="header">
              <div class="col-xs-12">
              <img src='images/logo3il.png'>
              </div>
          </div>

          <div class="row" id='content' >
                <div class="col-md-4" id="content_left">

                </div>

                <div class="col-md-4">
                    <form name='form1' method='POST' action=''>
                          <center> Connectez vous </center>
                         <input type='text' name='email' placeholder='email' required ><br>
                          <input type='password' name="password" placeholder="password" required >
                          <br>
                          <br>
                          <button type='submit' name='envoyer'>Valider</button>
                          <button type='reset' name='annuler'> Annuler </button>

                    </form>
                </div>

                <div class="col-md-4" id="content_right">

                </div>

          </div>

          <!--footer-->
            <div class="row" id='footer'>
            <div class="col-md-4" id='footer_left'></div>
            <div class="col-md-4" id='footer_center'></div>
            <div class="col-md-4" id='footer_right'></div>
          </div>
    </div>

  </body>

  <?php
      include("connect.php"); //connexion à la bd


      try{

              //recupération des champs html en php
              if(isset($_POST['email']) && isset($_POST['password'])){

                $email=$_POST['email'];
                $pass=$_POST['password'];

                //
                //requette de selection des utilisateurs
                $sth = $conn->prepare('SELECT email,motdepasse FROM utilisateur
                                    WHERE email=:email AND motdepasse=:pass');

              //passage par valeur
                $sth->bindvalue(':email',$email);
                $sth->bindvalue(':pass',$pass);

                $sth->execute();//execution de la requette
                $count=0; //compteur de resultat ,si 0 alors pas de resultats

                foreach ($sth as $row) {
                  $count++; //incrementation a chaque ligne trouvée
                }

                if($count==0){
                  //pas de ligne trouvée
                  echo" <script language='javascript'>alert('cet utilisateur non present dans la base');</script>";
                  unset($email);
                  unset($pass);
                }
                else{
                //  echo " there are ".$count." arrays";
                      header('Location: reservation.php');
                }
              }

          }
      catch(PDOException $e){

          echo " <br> erreur dans la requette ".$e->getMessage();
      }

   ?>


</html>
