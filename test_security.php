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

      if(isset($_POST['envoyer'])){

          if(empty($_POST['txtpass'])){

            echo " <p style='color:red;'> Veuillez ecrire un text</p>";
          }
          else{
            echo "<br>";
              echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
          }
      }

     ?>


  </body>
</html>
