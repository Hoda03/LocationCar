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
		<form action ="" method="post" class="formulaire">
		<h1>Connexion</h1>
	    <label><B>Nom d'utilisateur :</B></label>
		<input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required class="zonetext">
			
			
			
<label><B>Mot de passe :</B>	    
		<input type="password" placeholder="Entrer votre mot de passe" name="txtpw" required class="zonetext">
			
		<input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
	
	<?php 
	if(isset($_POST['btlogin'])) 
	{
		$req=" select * from utilisateur 
		where login='".$_POST['txtlogin']."' and motPasse='".$_POST['txtpw']."'";
      if($resultat = mysqli_query($cnlocationcar,$req))
	  {
		  $ligne=mysqli_fetch_assoc($resultat);
		  if($ligne!=0){
			  
			  session_start();
			  $_SESSION['monLogin']=$_POST['txtlogin'];
			  header("location:acceuil.php");
			  
		  }
		  else {
			  echo "<font color ='#F0001D'> Login ou mot de passe est invalide </font>";
		 }
		  
		  
	  }
		
	}

	?>		
		</form>
	</div>
</body>
</html>