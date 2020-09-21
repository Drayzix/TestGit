<?php


// déclaration et assignement du tableau
$tableau = [  "luc" , "henri", "gertrude"  ];



//fonction affichage d'un tableau
function affTableau( $tab )
{
	foreach(  $tab  as $element )
		echo "$element<br>";
}

//fonction affichage d'un tableau
function affTableauN( $tab )
{
	for( $i=0 ; $i < 5 ; $i++ )
		echo "$i ->".$tab[$i]."<br>";
}

affTableauN( $tableau );
echo "-------------<br>";

// ajoute à la fin
array_push( $tableau, "justin");
affTableauN( $tableau );
echo "-------------<br>";

//ajoute au début
array_unshift( $tableau, "nicole");
affTableauN( $tableau );
echo "-------------<br>";


//enlève GERTRUDE qui est à l'index 3 du tableau
// la string GERTRUDE est remplacé par une string vide
//$tableau[3] = "";
affTableauN( $tableau );
echo "-------------<br>";
echo $tableau[4]."<br>";
echo "-------------<br>";
echo "-------------<br>";

// l'élément 3 du tableau est supprimé
unset( $tableau[3] );
affTableauN( $tableau );
echo "-------------<br>";

$tableau[3] = "bernadette";
affTableauN( $tableau );
echo "-------------<br>";


function insertion(x,y)
	$copie = $element[i];
	$element[x]."<br>";
	


?>


