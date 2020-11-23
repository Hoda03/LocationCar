<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<title>Document sans titre</title>
	<style>
	
#container{
  border-width:1px 2px 3px 2px;
 border-style:solid outset;
 border-color: red;
 padding:10px 50px;
 }
	.nomsite{
		 border:1px dashed;
		padding:5px 5px;
	}
	
	</style>
</head>

<body>
	
	<div id="container">
	<form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
	   <h2 align="center"> Pénalisation ...</h2>
	 </br>
		</br>
		<label> <b> Numéro de pénalisation </b> </label>
		<input type="number" name="txtNumPena" class="zonetext" placeholder="Add Numéro de pénalisation" required>
		</br>
		</br>
		<label> <b> Numéro du client ...</b> </label>
		<input type="text" name="txtNumClient" class="zonetext" placeholder="Add Numéro du client" required>
		</br>
		</br>
		<label> <b>	Cout </b> </label>
		<input type="number" name="txtCout" class="zonetext" placeholder="Add Cout" required>
			</br>
		</br>
			
		<label> <b>	Raison :</b> </label>
		<input type="text" name="txtRaison" class="zonetext" placeholder="Add Raison :" required>
	</br>
		</br>
	<label style="text-align:center; color:burlywood;">
		
		</br>
		</br>
	</br>
	</br>
</br>
</br>
</br>
		
	<label style="text-align: center; color:#716161;">
		
		<?php
	
	echo"<p id='imprimer'><a href='' onclick='window.print();return false;'>Imprimer"
	
			?>
	
</body>
</html>