$.get("salledispo.php",{dateresa:champdate,idhoraire:horaireSelec},function(data){
                data=JSON.parse(data)
                let divsall=document.getElementById('divsalle');
                let sallNum=document.createElement('select');
                sallNum.name="SalleNum"
                for (var val of data) {
                  // sallNum.innerHTML+='<option value="'+val.ID_Salle+'">'+val.Numero+'</option>'
                   var option=document.createElement('option');
                   option.value=val.ID_Salle;
                   option.appendChild(document.createTextNode(''+val.Numero+''));
                   sallNum.appendChild(option);
                }
                divsalle.appendChild(sallNum);
