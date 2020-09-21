<?php

// cette fonction recoit le prixAPayer et l'argenDonné
// elle retoure un tableau qui contient la monnaie à rendre
function rendreLaMonnaie( $prixAPayerL, $argentDonneL )
{
	// reference au fond de caisse déclaré dans 
	// le fichier principal
	GLOBAL $fondDeCaisse;
	GLOBAL $__TEST;

	//si la variable $__TEST est true alors les test sont affichés
	if ($__TEST)
		echo( "function rendreLaMonnaie( $prixAPayerL, $argentDonneL )<br>" );	
	// l'ensemble des valeurs que je vais rendre au client
	// en clair : l'argent que j'aurais dans la main.
	$especesARendres = array();
	// calcule de la somme que je dois rendre
	// c-a-d ce qu'il m'a donné moins le prix à payer
	$aRendre =  $argentDonneL - $prixAPayerL;
	if ($__TEST)
		echo( "rendreLaMonnaie:aRendre : $aRendre<br>" );
	//tant qu'on doit rendre de l'argent....

	while ( $aRendre > 0 )
	{
		// je mémorise la somme à rendre dans 'memoireARendre'
		$memoireARendre = $aRendre;

		// parcour du fond de caisse pour trouver la plus 
		// grande valeur à lui rendre
		foreach( $fondDeCaisse as $valeur => $quantite )
		{
			// je regarde si il y a dans la caisse une valeur
			// inférieure au montant à rendre
			if ($__TEST)
				echo( "valeur => quantite : $valeur => $quantite<br>" );

			if ( $valeur <= $aRendre && $quantite > 0)
			{
				if ($__TEST)
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
		// si à la fin du foreach la variable memoireARendre est 
		// toujours égal $aRendre, alors c'est qu'on ne plus rendre 
		// de monnaie   
		if ( $memoireARendre == $aRendre )
		{
			return NULL; 
		}
	}
	return $especesARendres;
}



// if $__TEST à true alors
// j'exécute les tests
if ( $__TEST )
{
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
    if ( $monnaieRendus == NULL )
    {
    	echo "caisse impossible<br>";
    }
    else
    	print_r( $monnaieRendus );
    echo "<br>";

    $monnaieRendus = rendreLaMonnaie( 450, 0 );
    $monnaieRendus = rendreLaMonnaie( 0, 500 );
    $monnaieRendus = rendreLaMonnaie( 500, 500 );



    $somme = 0;
    foreach( $fondDeCaisse as $valeur => $quantite )
    {
    	echo "il y a $quantite de '$valeur'<br>";

    	$somme += ($valeur * $quantite);
    }
    echo "la somme totale ".($somme/100)." euros'<br>";
}

?>