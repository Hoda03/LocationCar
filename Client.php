<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
	
<link rel ="stylesheet" href ="locationcar_style.css" type="text/css">
</head>
	


<body>
	<div id="container">
	<form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
	   <h2 align="center"> Add New client ...</h2>
	
		<label> <b> Numéro Client </b> </label>
		<input type="number" name="txtClient" class="zonetext" placeholder="Add Numéro client" required>
		
		<label> <b> Nom </b> </label>
		<input type="text" name="txtNom" class="zonetext" placeholder="Add Nom" required>
		
		<label> <b>	Prénom </b> </label>
		<input type="text" name="txtprenom" class="zonetext" placeholder="Add Prénom" required>
		<label> <b>	Numéro CNI </b> </label>
		<input type="number" name="txtnumcni" class="zonetext" placeholder="Add Numéro CNI" required>
		
		
		
		<input type="submit" name="btadd" value="ADD" class="submit">
		
		<p> <a href="acceuil.php" class="submit"> Tableau de bord</a></p>
		
		<label style="text-align:center; color:burlywood;">
			<a href ="ListClient.php">Liste des clients ... </a>
			<label style="text-align:center; color:burlywood;"></br>
			
	
	<?php    
			if(isset($_POST['btadd']))
			
			{
				
				$id=$_POST['txtClient'];
				$nom=$_POST['txtNom'];
				$prenom=$_POST['txtprenom'];
				$NumCni=$_POST['txtnumcni'];

				
				$reqAdd="INSERT INTO Client (id,nom,prenom,NumCni) VALUES ('$id','$nom','$prenom','$NumCni')";	
				$resultat=mysqli_query($cnlocationcar,$reqAdd);
				
				
					
					echo "Client ajoutée !!";
				
				
				
					
			}
			
			?>
	
</body>
</html>