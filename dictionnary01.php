<?php

$frigo_array = [ "lait",  "oeuf", "poireaux" ];

foreach( $frigo_array as $nourriture )
	echo "$nourriture <br>";

echo "<br>";


echo $frigo_array[1]."<br>";


$frigo_kv = [ 
				'legumes' 	=> [   "poireaux" => 2 , "potiron"   => 1 ],	
				'laitiers' 	=> [   'fromage'  => 2 , 'lait'      => 1  ],
				'viandes' 	=> [   "steack"   => 3,  'tournedos' => 1 ]
			 ];


echo "<br>"; 

print_r( $frigo_kv[ 'laitiers' ] );

echo "<br>------------------<br>";

foreach ( $frigo_kv as $categorie => $values )
{
	echo "$categorie => :<br>";
	foreach ($values as $aliment => $quantite) 
	{
		echo "- - - $aliment : $quantite<br>";
	}
	echo "<br>";   
}

echo "<br>------------------<br>";
echo "------------------<br>";



$classe = [

	'fouad' => [ 'age' => 15, 'sport' => 'jogging', 'enfant' => 'non'    ],
	'alex'  => [ 'age' => 23, 'sport' => 'rien', 'passion' => 'lecture' , 'musique' => 'rock' ]
];


foreach ($classe as $prenom => $infos) 
{
	echo "$prenom  :<br>";
	foreach ($infos as $interet => $contenu) 
	{
		echo "- - - $interet : $contenu<br>";
	}
	echo "<br>";   
}

echo "<br>------------------<br>";
echo "------------------<br>";



$ordinateur = 
[
		'OS' 		=> [ 'windows' => 'Millenium' ],
		'HW' 		=> [  'RAM' => 16, 'HD' => '1To', 'CG' => 'VGA16'   ],
		'software'  => [  'VScode' => '3.17',  'PackOffice' => '1.1'   ]
];


foreach ($ordinateur as $info => $details) 
{
	echo "$info  :<br>";
	foreach ($details as $libel => $detail) 
	{
		echo "- - - $libel : $detail<br>";
	}
	echo "<br>";   
}

$SQ = 
[
		'pyramide' 		=> [ 'étage dragon' => 'Draco', 'vibraninf' ],
		'papillon' 		=> [  'jj' => 'ukhuhkuh', 'j' => 'jtryf', "ffswfdx"=> 'ggdfgd'   ],
		'matière'  => [  'g' => 'uygugug',  'ugugyugdfcbg' => 'trdtdrt'   ]
];

foreach ($SQ as $info => $details) 
{
	echo "$info  :<br>";
	foreach ($details as $libel => $detail) 
	{
		echo "- - - $libel : $detail<br>";
	}
	echo "<br>";   
}

?>