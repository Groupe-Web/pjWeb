<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test de sécurité</title>
  </head>
  <body>

    <form name="form1" action="" method="post">
      <input type="text" name="txtpass" placeholder="mot de passe"><br>
      <button type="submit" name="envoyer"> Valider</button><br>
    </form>

    <?php
      include("Library.php");
      if(isset($_POST['envoyer'])){

          if(empty($_POST['txtpass'])){

            echo " <p style='color:red;'> Veuillez ecrire un text</p>";
          }
          else{
            echo "<br>";
            echo " password ".$_POST['txtpass'];echo "<br>";
            echo "pass hiden ".passhidden($_POST['txtpass']);  echo "<br>";
            echo "hashed ".password_hash(passhidden($_POST['txtpass']), PASSWORD_DEFAULT);  echo "<br>";
              echo "<br> ".$_POST['txtpass'];
          }
      }
      //http://localhost/github/
     ?>


  </body>
</html>
