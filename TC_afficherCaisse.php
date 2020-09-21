<?php


//$__TEST = true;


function afficheCaisse( )
{
	// reference au fond de caisse déclaré dans 
	// le fichier principal
	GLOBAL $fondDeCaisse;
	GLOBAL $__TEST;

    $somme = 0;
    foreach( $fondDeCaisse as $valeur => $quantite )
    {
    	echo "il y a $quantite de '$valeur'<br>";
    	$somme += ($valeur * $quantite);
    }
    echo "la somme totale ".($somme/100)." euros'<br>";
}


if ( $__TEST )
{

	echo "===================================================<br>";  
	echo "DEBUT section de test du fichier afficherCaisse.php<br>";  
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

	    afficheCaisse();

	echo "FIN de section de test du fichier afficherCaisse.php<br>";  
	echo "====================================================<br>";  
}


?>