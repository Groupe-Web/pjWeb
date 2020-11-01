<html>
<head>
</head>

<body>

  <?php
    include('connect.php');

    $req="SELECT id,date_reservation FROM reserver ";
    $sth=$conn->prepare($req);
    $sth->execute();

    ?>
    <table border='1'>
      <?php
            foreach($sth as $rows){
              echo "<tr>";
              $id=$rows['id'];//je recupère l'id qui est concerner de la reservation
              echo "<td>".$rows['id']."</td>";
                echo "<td>".$rows['date_reservation']."</td>";
                  echo "<td><button id='btn' value=$id OnClick='afficher($id)'>Supp</button></td>";
                  echo "</tr>";
            }
     ?>
   </table>

<script type="text/javascript">

  function afficher(num){
    alert(num);

  }
  function bip(){
    alert("hello");
  }

var intervalId=null;
  function start(){
  //intervalId=setInterval(bip,5000); // le temps est e mili secondes
  }
</script>
</body>

</html>
