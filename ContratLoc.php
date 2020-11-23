<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contrat de Location</title>
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
<link rel ="stylesheet" href ="locationcar_style.css" type="text/css">
</head>
<body>
	
	
<body>
	<div id="container">
		<p class = "nomsite "> Contrat de Location</p>

		<label> <b> Nom </b> </label>
		<input type="text" name="txtNom" class="zonetext" placeholder="Add Nom" required>
		
		<label> <b> Prénom </b> </label>
		<input type="text" name="txtprenom" class="zonetext" placeholder="Add Prénom" required>
		
		<label for="start"> <b>	Date  </b> </label>
		<input type="date" name="txtdate" class="zonetext" placeholder="Add Date" required>
		
		
		<label> <b>	Durée </b> </label>
		<input type="text" name="txtDur" class="zonetext" placeholder="Add Durée" required>
		<label> <b>	Réglement </b> </label>
		
		<p>S’agissant d’un contrat pour les locations ou prêts consentis à titre exceptionnel (en dehors de toute activité de loueur professionnel de véhicule) un soin particulier doit être apporté aux conditions entre les parties. L’état du véhicule doit être réalisé contradictoirement (en présence des deux parties) au moment de la remise du véhicule mais également à sa restitution. L’heure permet de suivre les contraventions. Le carburant, représenté par une jauge théorique, se complète en dessinant une aiguille (un simple trait) pour connaître le niveau. Plus généralement les conseils de rédaction sont intégrés tout au long de l’acte pour mieux guider le rédacteur. </p>
		<label> <b>	Signature : </b> </label>
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
		
		</form>
		</div>
		 
	
	
	'
	
</body>
</html>