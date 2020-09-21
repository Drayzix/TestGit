<?php







	$argentDonne = $_POST[ "argentDonne"];
	$prixAPayer  = $_POST[ "prixAPayer"];


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


// cette fonction recoit le prixAPayer et l'argenDonné
// elle retoure un tableau qui contient la monnaie à rendre
function rendreLaMonnaie( $prixAPayerL, $argentDonneL )
{
	GLOBAL $fondDeCaisse;
	// l'ensemble des valeurs que je vais rendre au client
	// en clair : l'argent que j'aurais dans la main.
	$especesARendres = array();
	// calcule de la somme que je dois rendre
	// c-a-d ce qu'il m'a donné moins le prix à payer
	$aRendre =  $argentDonneL - $prixAPayerL;
	echo( "aRendre : $aRendre<br>" );
	// parcour du fond de caisse pour trouver la plus 
	// grande valeur à lui rendre
	while ( $aRendre <= 0 )
	{
		foreach( $fondDeCaisse as $valeur => $quantite )
		{
			// je regarde si il y a dans la caisse une valeur
			// inférieure au montant à rendre
			echo( "valeur => quantite : $valeur => $quantite<br>" );

			if ( $valeur < $aRendre && $quantite > 0)
			{
				echo( "valeur select : $valeur<br>" );

				// je réduis le montand à rendre de la 
				// valeurs que je retire du fond de caisse
				$aRendre -= $valeur;
				// je mets cette valeurs dans ma main
				array_push( $especesARendres, $valeur);

				// je retire cette valeur du fond de caisse
				$fondDeCaisse[ $valeur ] -= 1; 
				break;
			}
		}
	}
	return $especesARendres;
}





    $somme = 0;
    foreach( $fondDeCaisse as $valeur => $quantite )
    {
    	echo "il y a $quantite de '$valeur'<br>";

    	$somme += ($valeur * $quantite);
    }
    echo "la somme totale ".($somme/100)." euros'<br>";



    //$monnaieRendus = rendreLaMonnaie( $prixAPayer, $argentDonne );

    // en fonction du fond caisse
    $monnaieRendus = rendreLaMonnaie( 450, 1000 );
    // [ 500, 50 ]

    print_r( $monnaieRendus );
    echo "<br>";

    $somme = 0;
    foreach( $fondDeCaisse as $valeur => $quantite )
    {
    	echo "il y a $quantite de '$valeur'<br>";

    	$somme += ($valeur * $quantite);
    }
    echo "la somme totale ".($somme/100)." euros'<br>";


    //$monnaieRendus = rendreLaMonnaie( 45, 100 );
    // [ 50, 5 ]





?>

<form method="POST" action="tiroir_caisse.php">
        <input type="number" placeholder='argent donné' name="argentDonne" step=".01">
        <input type="number" placeholder='total articles' name="prixAPayer" step=".01">
        <input type="submit" value='Calculer' name="calcul">
 </form>
