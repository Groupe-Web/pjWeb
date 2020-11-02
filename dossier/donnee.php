<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body onload="start()">
  <div class='content' id='divtableau'>

  </div>


  <script type="text/javascript">

 /*if(jQuery){
     alert("jQuery est chargé");
  }
  else{
     alert("jQuery n'est pas chargé");
  }*/ //permet de tester si la library Jquery est bien chargée dans la page web


//affiche les donne qu'il recupère dans la base de donnée en ajax/jquery
function AfficheData()
{
    $.get("traitement.php",
    function(data)
    {

           //alert("hello");
                data=JSON.parse(data);
                let divtableau=document.getElementById('divtableau');
                divtableau.innerText="";                //divtableau.innerText="hello";
              let sallNum=document.createElement('select');
              let table=document.createElement('table');
                    //on cree un element select qu'on ajoutera dans une div de la page
                    //


                for (var val of data) {

                   var option=document.createElement('option');
                   var tr=document.createElement('tr');
                   var btn=document.createElement('button');
                    var td1=document.createElement('td');
                  var td2=document.createElement('td');

                   option.value=val.date_reservation;

                   td1.value=val.id;// affecte l'id a la value du td1
                   td1.appendChild(document.createTextNode(''+val.date_reservation+''));
                   btn.value=val.id; //met l'id dans value du BUTTON
                    btn.appendChild(document.createTextNode('\u274c '));
                    btn.setAttribute("OnClick","supprimer("+btn.value+");");
                   td2.appendChild(btn); //ajout du btn dans le td2
                  // option.appendChild(document.createTextNode(''+val.date_reservation+''));
                   //ajoute l'option que l'on vient de creer dans le select
                   //on remarque donc que appendChild permet d'ajouter un element dans un autre
                   //d'un pointy de vu de la sgtructure html

                   /* ajout des 2 td dans le tr */
                   tr.appendChild(td1);
                    tr.appendChild(td2);

                    table.appendChild(tr);// ajout du tr dans la table

                }
                divtableau.appendChild(table);
                //alert("hello");

  }
);
//fin AfficheData
}



  //fonction pour supprimer
  function Supprimer(valeur){
    $.get("traitement2.php",{id:valeur},
    function(data)
    {
            data=JSON.parse(data);
    });
  }

  //fonction pour debuter la boucle de rafraichissemnt
  //non native a js
  function start(){
        let i=0;
        if(i==0){
          AfficheData();
          i=1;
        }
        else{
          setInterval("AfficheData()",1000); // le temps est en mills , boucle l'exe de la fonction en param
        }
  }


  </script>
</body>
</html>
