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
	
<form name="formdelete"	class="formulaire">
<p> <a href="acceuil.php" class="submit"> Tableau de bord</a></p>
	<?php   
	
	
	if(isset($_GET['supcar'])){
		
		$sup=$_GET['supcar'];
		$reqDelete="DELETE FROM automobile WHERE immatriculation='$sup'";
		$resultat=mysqli_query($cnlocationcar,$reqDelete);
		
	}

   if($resultat){
	   echo "<label style='text-align:center; color:burlywood;'> Sppression établie </label> ";
   }
    else {
	echo "<label style='text-align:center; color:burlywood;'> Suppression échoué ...</label>";
}
	
	
	?>
</form>		
</div>	

	
</body>
</html>