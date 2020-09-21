<?php


// variable globale de test
// si true alors les test son activés
$__TEST = false;


// dictionaire contenat le fond de caisse
$fondDeCaisse = 
	[
        2000 	=>  1 	,
        1000 	=>  1	,
        500 	=>  2	,
        200 	=>  3	,
        100 	=>  5	,
        50 		=>  2	,
        20 		=>  4	,
        10 		=>  0	,
        5 		=>  10	,
        1 		=>  10	
    ];


// include du fichier qui contient la fonction du rendu de monnaie
include ( "TC_rendreLaMonnaie.php");

// si le formulaire a été rempli alors $_POST different de NULL
// et le code est exécuté
if ( $_POST )
{
	$argentDonne = $_POST[ "argentDonne"];
	$prixAPayer  = $_POST[ "prixAPayer"];
	echo "$argentDonne  $prixAPayer<br>";
	$monnaiesARendre = rendreLaMonnaie( $prixAPayer, $argentDonne );
	print_r($monnaiesARendre);
}


?>
<form method="POST" action="tiroir_caisse01.php">
        <input type="number" placeholder='argent donné' name="argentDonne" step=".01">
        <input type="number" placeholder='total articles' name="prixAPayer" step=".01">
        <input type="submit" value='Calculer' name="calcul">
 </form>
