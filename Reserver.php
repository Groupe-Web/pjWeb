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
        </h2>
<<<<<<< HEAD
        <div class="texteListe tableau">
          Plage Horaires <br /> <br />
          <table id="tableauH">
            <tr id="tr" class="trH" onclick="document.getElementById('tr').style.backgroundColor='cyan'">
              <td id="tdH">8h30-9h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr2" class="trH" onclick="document.getElementById('tr2').style.backgroundColor='cyan'">
              <td id="tdH">9h00-9h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr3" class="trH" onclick="document.getElementById('tr3').style.backgroundColor='cyan'">
              <td id="tdH">9h30-10h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr4" class="trH" onclick="document.getElementById('tr4').style.backgroundColor='cyan'">
              <td id="tdH">10h00-10h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr5" class="trH" onclick="document.getElementById('tr5').style.backgroundColor='cyan'">
              <td id="tdH">10h30-11h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr6" class="trH" onclick="document.getElementById('tr6').style.backgroundColor='cyan'">
              <td id="tdH">11h00-11h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr7" class="trH" onclick="document.getElementById('tr7').style.backgroundColor='cyan'">
              <td id="tdH">11h30-12h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr8" class="trH" onclick="document.getElementById('tr8').style.backgroundColor='cyan'">
              <td id="tdH">12h00-12h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr9" class="trH" onclick="document.getElementById('tr9').style.backgroundColor='cyan'">
              <td id="tdH">12h30-13h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr10" class="trH" onclick="document.getElementById('tr10').style.backgroundColor='cyan'">
              <td id="tdH">13h00-13h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr11" class="trH" onclick="document.getElementById('tr11').style.backgroundColor='cyan'">
              <td id="tdH">13h30-14h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr12" class="trH" onclick="document.getElementById('tr12').style.backgroundColor='cyan'">
              <td id="tdH">14h00-14h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr13" class="trH" onclick="document.getElementById('tr13').style.backgroundColor='cyan'">
              <td id="tdH">14h30-15h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr14" class="trH" onclick="document.getElementById('tr14').style.backgroundColor='cyan'">
              <td id="tdH">15h00-15h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr15" class="trH" onclick="document.getElementById('tr15').style.backgroundColor='cyan'">
              <td id="tdH">15h30-16h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr16" class="trH" onclick="document.getElementById('tr16').style.backgroundColor='cyan'">
              <td id="tdH">16h00-16h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr17" class="trH" onclick="document.getElementById('tr17').style.backgroundColor='cyan'">
              <td id="tdH">16h30-17h00</td>
              <td id="tdH">places disponibles</td>
            </tr>
            <tr id="tr18" class="trH" onclick="document.getElementById('tr18').style.backgroundColor='cyan'">
              <td id="tdH">17h00-17h30</td>
              <td id="tdH">places disponibles</td>
            </tr>
          </table>
        </div>
        <br>
=======
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
