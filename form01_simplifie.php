<?php 
	// GET les données sont transmises dans l'URL 
	// POST  les données sont transmises le HEADER 

	// si des infos sont rempli dans le formulaire
	// php va mettre ces infos dans le dictionnaire _POST
	if ( $_POST )
	{
		// recupération d'un champ du formulaire
		// les keys du dictionaire correspondent aux chanp name de chaque INPUT du formulaire
		$prenom = $_POST[ 'prenom' ];

		echo "$prenom<br>"; 

		if ( $prenom == "google" )
			header( 'location: https://www.google.com');
		else
			header( 'location: form01_simplifie.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>formulaire</title>
	</head>
	<body>
		<!--  GET les données sont transmises dans l'URL --> 
		<!--  POST  les données sont transmises le HEADER --> 
		<form  action="form01_simplifie.php" method="POST">
			<input type="text" id="nm" name="prenom" placeholder="tapez votre nom" />
			<br>
			<input type="text" id="ag" name="age"  placeholder="tapez votre age"/>
			<br>
			<input type="text" id="vi" name="ville" placeholder="tapez votre ville"/>
			<button type="submit">OK</button>
		</form>
	</body>
</html>