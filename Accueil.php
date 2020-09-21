<!doctype html>
<?php

$bdd = new PDO ('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription']))
{
	if(!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['mail']))
	{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = htmlspecialchars($_POST['mdp']);
		$mdp2 = htmlspecialchars($_POST['mdp2']);
		$mail =htmlspecialchars($_POST['mail']);
		$pseudolength = strlen($pseudo);
		if ($pseudolength<= 10)
		{
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				if($mdp == $mdp2)
				{

				}
				else
				{
					$erreur = " Les mots de passe ne corespondent pas.";
				}
			}
			else
			{
				$erreur ="Veuillez entrer une adresse mail valide";
			}
		}
		else
		{
			$erreur = "Votre pseudo ne doit pas dépasser 10 caractères";
		} 
		}
	else
	{
		$erreur =  "Tous les champs doivent être remplis !";
	}
}
?>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <div align="center">
    <h2>Inscription</h2>
	</br></br>
	<table>
		<form method ="POST" ACTION="">
			<tr>
				<td align="right">
					<label for=pseudo>Pseudo:</label>
					<input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo">
				</td>
			</tr>
				</br>
				<td align="right">
					<label for=password>mdp</label>
					<input type="password" placeholder="Votre mot de passe" name="mdp" id="password">
				</td>
			</tr>
			</br>
				<td align="right">
					<label for=password>mdp2</label>
					<input type="password" placeholder="Votre mot de passe" name="mdp2" id="password">
				</td>
			</tr>
				</br>
				<td align="right">
					<label for=mail>Mail </label>
					<input type="text" placeholder="Votre mail" name="mail" id="pseudo">
				</td>
				</tr>
				</br>
				<td>
				</br>
			</tr>

			


		</table>
	<input type="submit" name="forminscription" value="Je m'inscris">
	</br>
		
		</form>
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur."</font>";
		}
		?>

	</div>

	</body>
</html>