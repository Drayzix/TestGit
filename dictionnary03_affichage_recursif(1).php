<?php

echo "RECURSIF<br>\n";


// premier indice
//if ( gettype($kv) == "array" )
//	...

// deuxieme indice
// RECURSIF




function affKVR( $kv, $pr = "" )
{
	//echo "je rentre dans affKVR<br>";
	$pr .= "&nbsp&nbsp&nbsp&nbsp";
	foreach ($kv as $key => $value )
	{ 
		
			echo "$pr<b> $key :</b>";
		if ( gettype($value) == "array" )
		{	
			echo "<br>\n";
			affKVR( $value, $pr );
		}
		else
			echo " $value<br>\n";
	}
}



$ordinateur = 
[
		'OS' 		=> [ 'windows' => 'Millenium' ],
		'HW' 		=> [  'RAM' => 16, 'HD' => '1To', 'CG' => 'VGA16'   ],
		'software'  => [  'VScode' => '3.17',  'PackOffice' => '1.1'   ]
];

$ordinateur2 = 
[
		'OS' 		=> [ 'windows' => 'Millenium' ],
		'HW' 		=> [  'RAM' => 16, 'HD' => '1To', 'CG' => 'VGA16'   ],
		'software'  => [  'VScode' => '3.17',  'PackOffice' => [  "word" => "2.2", "excel" => "8.01"    ]   ]
			"8.01" ] ]
];



//affKV( $ordinateur );


$villes = [ 'maubeuge' => 'remparts', 'douai' => 'les géants', 'binch' => 'gilles'   ];


affKVR( $ordinateur );

echo "========================<br>\n";

affKVR( $villes );

echo "========================<br>\n";

affKVR( $ordinateur2 );




?>