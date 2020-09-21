<?php



echo "<br>";
echo "------------------<br>";
echo "------------------<br>";



// premier indice
//if ( gettype($kv) == "array" )
//	...

// deuxieme indice
// RECURSIF



function affKV( $dicKV )
{
	echo "je suis dans la fonction<br>";
	foreach ($dicKV as $key1 => $value1 ) 
	{
		echo "$key1  :<br>";
		foreach ($value1 as $key2 => $value2) 
		{
			echo "- - - $key2 : $value2<br>";
		}
		echo "<br>";   
	}
}

function affKV1( $dicKV )
{
	echo "je suis dans la fonction<br>";
	foreach ($dicKV as $key1 => $value1 ) 
			echo "- - - $key1 : $value1<br>";
}



$ordinateur = 
[
		'OS' 		=> [ 'windows' => 'Millenium' ],
		'HW' 		=> [  'RAM' => 16, 'HD' => '1To', 'CG' => 'VGA16'   ],
		'software'  => [  'VScode' => '3.17',  'PackOffice' => '1.1'   ]
];



affKV( $ordinateur );


$villes = [ 'maubeuge' => 'remparts', 'douai' => 'les géants', 'binch' => 'gilles'   ];


affKV1( $villes );




?>