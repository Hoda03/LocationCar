<?php require_once('connexion.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
	
<link rel ="stylesheet" href ="locationcar_style.css" type="text/css">
</head>

<body>
	
	
	
	<p><h1><b> LISTE DES Clients</h1></b>

	
	<table width="100%" border="1">
	
	<tr>
		<th> Numéro </th>
		<th> Nom </th>
		<th> Prénom </th>
		<th> N° CNI </th>
		
	</tr>
		<?php    
	     $reqselect="select * from client";
         $resultat=mysqli_query($cnlocationcar,$reqselect);     
         $nbr=mysqli_num_rows($resultat);
         echo "<p> Total <b>".$nbr." </b> Clients ... </p>";
            
	
	
	
	?>
		
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))	{
		?>
	
	<tr>
	<td><?php echo $ligne['id'];?></td>
	<td><?php echo $ligne['nom'];?></td>
	<td><?php echo $ligne['prenom'];?></td>
	<td><?php echo $ligne['NumCni'];?></td>	
		
			
	</tr>
	<?php
	}
	
	?>
	

	
	
</body>
</html>