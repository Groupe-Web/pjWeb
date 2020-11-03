<!DOCTYPE html>
<html>
<head>
	<title>clavier</title>
	<script src="script.js" async></script>
	<style type="text/css">

		button{
			height: 50px;
			width: 50px;

		}


	</style>
</head>
<body>

	<?php

	//fonction pour savoir si
	//un nombre existe deja dans un tabl

					function existnb($num,array $tab){
						$n=count($tab);
										if($n>0){
											for($i=0;$i<$n;$i++){
												if($tab[$i]==$num){
													return true;
												}
											}
										}
							return false;
					}

					$i=0;
					$tabnum=array(); //le definie comme etant un tableau
					while($i<=9)
					{
						$number=(int)floor(rand(0,9));
						if((!existnb($number,$tabnum))){
							$tabnum[]=$number;
							$i++;
						}

					}


	 ?>


	 <center  id='clavier' >
				<button type="button"  id="btn" onclick="calculer(<?php echo $tabnum[0];?>)"value="<?php echo $tabnum[0];?>"><?php echo $tabnum[0];?></button>
				<button type="button" id="btn"  onclick="calculer(<?php echo $tabnum[1];?>)"value="<?php echo $tabnum[1];?>"><?php echo $tabnum[1];?></button>
				<button type="button" id="btn"  onclick="calc uler(<?php echo $tabnum[2];?>)"value="<?php echo $tabnum[2];?>"><?php echo $tabnum[2];?></button>
				<button type="button" id="btn"  onclick="calculer(<?php echo $tabnum[3];?>)"value="<?php echo $tabnum[3];?>"><?php echo $tabnum[3];?></button>
				<button type="button" id="btn"  onclick="calculer(<?php echo $tabnum[4];?>)"value="<?php echo $tabnum[4];?>"><?php echo $tabnum[4];?></button>
				<br>
				<button type="button" id="btn6"  onclick="calculer(<?php echo $tabnum[5];?>)"value="<?php echo $tabnum[5];?>"><?php echo $tabnum[5];?></button>
				<button type="button" id="btn7"  onclick="calculer(<?php echo $tabnum[6];?>)"value="<?php echo $tabnum[6];?>"><?php echo $tabnum[6];?></button>
				<button type="button" id="btn8"  onclick="calculer(<?php echo $tabnum[7];?>)"value="<?php echo $tabnum[7];?>"><?php echo $tabnum[7];?></button>
				<button type="button" id="btn9"  onclick="calculer(<?php echo $tabnum[8];?>)"value="<?php echo $tabnum[8];?>"><?php echo $tabnum[8];?></button>
				<button type="button" id="btn0"  onclick="calculer(<?php echo $tabnum[9];?>)"value="<?php echo $tabnum[9];?>"><?php echo $tabnum[9];?></button>
		</center>


	<script type="text/javascript">

			function calculer(val){

			var num=val;//recupere la valeur passe en param
			var txt=document.getElementById('pass').value;// recupere la valeur qui est dans la zne de texte
			document.getElementById('pass').value=txt+""+num; //ajoute l'ancienne valeur +nouvelle saisie

			}


	</script>
</body>
</html>
