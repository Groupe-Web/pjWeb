
  var msg_popupOrigin=document.getElementById('msg_popup').innerHTML;

  function openModal() {
    var bouton =document.getElementById('bouton');
    var overlay=document.getElementById('overlay');
    var msg_popup=document.getElementById('msg_popup');
    var selectElmt = document.getElementById("liste");



    var valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value;
    var textselectionne = selectElmt.options[selectElmt.selectedIndex].text;

    msg_popup.innerHTML = msg_popupOrigin+textselectionne;
    overlay.style.display='block';
  }


  function closeModal()
  {
    var btnClose = document.getElementById('btnClose');
    var tab =document.getElementById('tableauH');
    //btnClose.addEventListener('click',closeModal);
    overlay.style.display='none';
    document.getElementById('tableauH').style.backgroundColor='white';
  }

  function logout()
  {
    var btnLogOut= document.getElementById('boutonD');
    btnLogOut
  }
