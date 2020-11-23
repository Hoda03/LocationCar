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
	   <form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
		
		
		   <h2 align="center" > Update a Car </h2>
		   <label><b>Immatriculation :</b></label>
		   <input type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['modcar'] ?>" readonly>
		   
		   <label><b>Marque :</b></label>
		   <input type="text" name="txtMarque" class="zonetext" placeholder="Entrer La marque ici" required>
		   
		   <label><b>Prix :</b></label>
		   <input type="text" name="txtPrix" class="zonetext" placeholder="Entrer Le prix ici" required>
		   
		   <label><b>photo :</b></label>
		   <input type="file" name="txtPhoto"  placeholder="choisir une image" required>
		   
		   <input type="submit" class="submit" name="btmod" value="Update">
		   
		   
		   <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p>
		   
		   <label style="text-align: center; color:#716161;">
		   <?php   
			if(isset($_POST['btmod'])){
				$imm=$_POST['txtImm'];
				$marque=$_POST['txtMarque'];
				$prixloc=$_POST['txtPrix'];
				$modifier=$_GET['modcar'];
				$image=$_FILES['txtPhoto']['tmp_name'];
				$traget="Image/".$_FILES['txtPhoto']['name'];
				
				move_uploaded_file($image,$traget);
				
				$reqUp="UPDATE automobile SET marque ='$marque', prixLoc='$prixloc',photo='$traget' WHERE immatriculation='$modifier'";
				
				$resultat=mysqli_query($cnlocationcar,$reqUp);
				
				if($resultat){
					echo "Update validés";
				}else{
					
					echo "failed!";
				}
			
				
				
			}
			   
			   
			   ?>
		   
		   
		   
		   </label>
		
		</form>
	
	</div>
	
</body>
</html>