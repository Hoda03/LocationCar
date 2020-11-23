<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
	
<link rel ="stylesheet" href ="locationcar_style.css" type="text/css">
</head>
<body>
	<p><h1><b> LISTE DES VOITURES </h1></b>
	<?php    
	     $reqselect="select * from automobile";
         $resultat=mysqli_query($cnlocationcar,$reqselect);     
         $nbr=mysqli_num_rows($resultat);
         echo "<p> Total <b>".$nbr." </b> Voitures ... </p>";
            
	
	
	
	?>
	</p>
	<p> <a href="ajouter.php"> <img src="Image/AJOUTER.jpg" width="50px" height="50px"> </a> </p>
	
	
<table width="100%" border="1">
	
	<tr>
		<th> IMMATRICULATION </th>
		<th> MARQUE </th>
		<th> PHOTO </th>
		<th> PRIX </th>
		<th> SUPPRIMER </th>
		<th> MODIFIER </th>
	</tr>
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))	{
		?>
	
	<tr>
	<td><?php echo $ligne['immatriculation'];?></td>
		<td><?php echo $ligne['marque'];?></td>
		<td><img src='<?php echo $ligne['photo'];?>' class="photovoiture"></td>
		<td><?php echo $ligne['prixLoc'];?></td>
		<td> <a href="supprimer.php?supcar=<?php echo $ligne['immatriculation'];?>"> <img src="Image/SUPPRIMER.png" width="50px" height="50px"> </a> </td>
		<td> <a href="modifier.php?modcar="<?php echo $ligne['immatriculation'];?>> <img src="Image/MODIFIER.jpg" width="50px" height="50px"> </a> </td>
	</tr>
	<?php
	}
	
	?>
	
	
	
	</table>
</body>
</html>