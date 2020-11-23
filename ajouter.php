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
	   <h2 align="center"> Add New car..</h2>
	
		<label> <b> Immatriculation </b> </label>
		<input type="number" name="txtImm" class="zonetext" placeholder="Add Immatriculation" required>
		
		<label> <b> marque</b> </label>
		<input type="text" name="txtMarque" class="zonetext" placeholder="Add Marque" required>
		
		<label> <b>	prix </b> </label>
		<input type="text" name="txtPrix" class="zonetext" placeholder="Add prix" required>
		
		<label> <b>	PHOTO </b> </label>
		<input type="file" name="txtPhoto" class="zonetext" placeholder="Add photo" required>

		
		<input type="submit" name="btadd" value="ADD" class="submit">
		
		<p> <a href="acceuil.php" class="submit"> Tableau de bord</a></p>
		
		<label style="text-align:center; color:burlywood;">
			
		
	<?php    
			if(isset($_POST['btadd']))
			
			{
				
				$imm=$_POST['txtImm'];
				$marque=$_POST['txtMarque'];
				$prixLoc=$_POST['txtPrix'];
				$images=$_FILES['txtPhoto']['tmp_name'];
				$trajet="Image/".$_FILES['txtPhoto']['name'];

				
				move_uploaded_file($images,$trajet);
				
				$reqAdd = "INSERT INTO automobile (immatriculation,marque,prixLoc,photo) VALUES ('$imm','$marque','$prixLoc','$images')";	
				
				$resultat=mysqli_query($cnlocationcar,$reqAdd);
				if($resultat)
				{
					
					echo "Good Work !!";
				}
				
				else{
					echo "failed";
					
				}
				
				
				
					
			}
			
			?>
		
		</label>
		
		
		
		
		</form>
	</div>
	
</body>
</html>