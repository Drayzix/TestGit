<?php


// déclaration et assignement du tableau
$tableau = [  "luc" , "henri", "gertrude"  ];


$tableau100 = array( );


for( $i=0 ; $i<100 ; $i++ )
	array_push( $tableau100, random_int(0, 10)  ); 



//fonction affichage d'un tableau
function affTableau( $tab )
{
	foreach(   $tab  as $element )
		echo "$element<br>";
}


affTableau( $tableau );
affTableau( $tableau100 );

function recherche( $tab)
{
	$compteur = 0;
    foreach ( $tab as $element)
    {
		if ($element==5)
            $compteur = $compteur + 1;
    }
	echo "il y a " . "$compteur " . "5";

}
recherche($tableau100);


?>