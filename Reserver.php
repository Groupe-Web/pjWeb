<?php
  session_start();

  if($_SESSION['droit']==' ' || $_SESSION['nom']==' ' || $_SESSION['email']==' '){
      header('Location: connexion.php');
  }

  include('reservation_controleur.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Reserver_Style.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" href="images/img5.ico" /> <!-- pour mettre une icone -->
    <title>Réserver une salle</title>
  </head>
  <body>
    <header>
        <form name='deconnexion' method='post' action="deconnexion.php">
        <img src="Images/logo.png" alt="Logo3iL" id="imageLogo">
        <div id="texteBienvenue"> Welcome <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']?>
            <button  type='submit' onclick="sedeconnecter()" class="btn btn-success" id="deconnexion">Se deconnecter</button>
        </div>
        <img src="Images/logo_user.png" alt="LogoUser" id="imageLogoUtilisateur">
      </form>
    </header>

    <div class="Barre">

    </div>
    <section class="section section1">

      <?php  include('connect.php')?>
      <p class="texteListe">Choisir une salle</p> <br/>
        <select name="nom" size="1" class="liste" id="liste">
          <option selected>--Sélectionner--</option>
          <?php  menuDeroulantListe($conn); ?>
        </select>
        <button id="bouton" class="bouton" onclick="openModal()">Ok</button>
    </section>

    <div id="overlay" class="overlay">
      <div id="popup" class="popup">
        <h2 id="msg_popup">
          Salle
          <span id="btnClose" class="btnClose" onclick="closeModal()">&times;</span>
        </h2><?php $tab = getListeCreneau($conn, 108, '2020-10-31') ?>
          Choisir une date: <input type="date" id="dateChoisie"></input><br /><br />
          <table id="tableauH">
            <tr id="tr" class="trH" onclick="document.getElementById('tr').style.backgroundColor='cyan'">
              <td id="tdH"><?= substr($tab[0]['heure_deb'], 0, -3); ?> - <?= substr($tab[0]['heure_fin'], 0, -3); ?></td>
              <td id="tdH"><?= $tab[0]['nbplace_libre']; ?> places disponibles</td>
            </tr>
<?php for($i=1; $i<count($tab); $i++){
    echo"     <tr id='tr".($i+1)."' class='trH' onclick=\"document.getElementById('tr".($i+1)."').style.backgroundColor='cyan'\">";
    echo"          <td id='tdH'>".substr($tab[$i]['heure_deb'], 0, -3)." - ".substr($tab[$i]['heure_fin'], 0, -3)."</td>";
    echo"          <td id='tdH'>".$tab[$i]['nbplace_libre']." places disponibles</td>";
    echo"     </tr>";
}?>

          </table>
        </div>
        <br>
          Choisir une date: <input type="date" id="dateChoisie"</input><br /><br />
          <select name="nom" size="1" class="listeT" id="listeT">
            <option selected>--Sélectionner--</option>
            <?php  getListeCreneau($conn); ?>
          </select>
        <br /> <br />

        <input type="checkbox"> Je m'engage à respecter l'horaire choisie ou, le cas échéant, me désister à temps</input> <br /> <br />

        <button id="valider" class="valider">Valider</button>
      </div>
    </div>

    <section class="section section2">
      <div>HISTORIQUE</div><br />
      <table>
        <thead>
          <td>Salle</td>
          <td>Date Reservation</td>
          <td>Heure début</td>
          <td>Heure fin</td>
        </thead>
        <?php getHistorique('sandy@3il.fr', $conn);?>
      </table>
      <br /><br />
      <button id="toutSupprimer" class="deleteAll" onclick="supprimerTout()">Tout supprimer</button>
    </section>

    <div id="slider">
      <figure>
        <img src="Images/mains.png" alt="LaverLesMains">
        <img src="Images/Toux.png" alt="TousserDansCoude">
        <img src="Images/Masque.png" alt="PorterMasque">
        <img src="Images/distance.png" alt="RespectDistance">
        <img src="Images/coronaImage.png" alt="ImageCorona">
      </figure>
    </div>



    <footer>
      <div id="bloc1">
        <br >
        <img src="Images/logoGroupe.png" alt="ZED" id="logoZED">
        Projet scolaire en web
      </div>
      <div id="bloc2">
        <a href ="https://www.3il-ingenieurs.fr/"> 3iL ingénieurs </a> <br />
        <a href ="https://moodle.3il.fr/"> Moodle 3iL </a><br/>
        <a href ="https://exnet.3il.fr/rp/TousCom/FB/"> Touscom 3iL</a><br/><br />
      </div>
      &nbsp <br/><br />Copyright ZED Reservation - Tous droits réservés
    </footer>
    <script src="Reserver_Script.js"></script>

  </body>
<!--use_keyboard_input-->
</html>
