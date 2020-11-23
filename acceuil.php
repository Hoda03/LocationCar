<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
	
<link rel ="stylesheet" href ="locationcar_style.css" type="text/css">
</head>

<body>
<div id="global">
	
		<div id="profil">
			
<?php      
				session_start();
				echo "Bonjour et bienvenue<br/>".$_SESSION['monLogin']."<br/>";

				$req = " select * from utilisateur where login = ' ".$_SESSION['monLogin']."'";
				$resultat=mysqli_query($cnlocationcar,$req);
				$ligne=mysqli_fetch_assoc($resultat);
			
				?>
			
				<img src="Image/my_photo.PNG" class="myphoto">
	
				<br>
				<a href ="deconnexion.php">Deconnexion </a>
			<br>
			<a href ="Client.php">Ajouter un client </a>
			<br>
			<a href ="ContratLoc.php">Contrat de location  </a>
			<br>
			<a href ="pena.php"> Pénalisation  </a>
				
	
	   </div>
			
        <div id="tableaubord">
	<?php include("tableau_bord.php")  ?>
	
		</div>

			
	
			
		</div>
	
     

</body> 
</html>