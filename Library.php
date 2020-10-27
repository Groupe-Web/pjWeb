<?php

  //page des Reflection

  function passhidden($pass){
    $tabpass= array('abc','efg','hij','klm','nop','qrs','tuv','wxy','z01','iii');
    $passafter="";
    for($i=0;$i<strlen($pass);$i++){
      $equi=$pass{$i};
      for($j=0;$j<10;$j++){
        if($equi==$j){
          $passafter.=$tabpass[$j];
        }
      }


    }

    return $passafter;
  }
?>
