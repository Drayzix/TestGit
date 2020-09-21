<?php 


    GET les données sont transmises dans l'URL 
    POST  les données sont transmises le HEADER 

    $nom = $_POST[ "nom" ]; 
    $age = (int)$_POST[ "age" ]; 


    echo "bonjour $nom<br> ";


    if( $age >= 18 )
        echo "tu es majeur";
    else
        echo "tu es mineur";
?>
