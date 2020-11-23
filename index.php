<?php require_once('connexion.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel ="stylesheet" href ="locationcar_style.css"/>
</head>

<body>
	<div id ="entete">
		<a href ="login.php" class="login">Login</a>
	  	
		<p class = "nomsite "> Location CAR </p>
		<div id="formauto">
			<form name = "formauto" method ="post" action = "">
				
				
			<input id ="motcle" type="text" name="motcle" placeholder="Recherche par marque"/>
			<input class ="btfind" type ="submit" name ="btsubmit" value="Recherche"/>
			</form> 
		</div>
	</div>
<div id="articles">
	<?php
	
	if (isset($_POST['btsubmit'])){
		$mc = $_POST['motcle'];
		$reqSelect="select * from automobile where marque like '%$mc%' ";
		
		
	}
	else{
		$reqSelect="select * from automobile ";
		
		
	}
	$resultat=mysqli_query($cnlocationcar,$reqSelect);
	$nbr = mysqli_num_rows($resultat);
	echo "<p><b>" .$nbr. " <b/>Resultats de votre recherche ... <p/>";
	while ($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	<div id="auto">
		<img src ="<?php echo $ligne['photo'] ?> "/> <br />
	<?php echo $ligne['marque']; ?><br />
	<?php echo $ligne['prixLoc']; ?><br />
	<?php echo $ligne['immatriculatuion']; ?><br />
	
	</div>	
	<?php  } ?>
	</div>
</body>
</html>