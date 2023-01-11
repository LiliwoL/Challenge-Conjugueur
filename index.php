<?php

// 0. Inclusions
require_once('./functions.php');

// 0. Initialisation des variables
$T_verbes = [];

// 1. Lecture de la liste des verbes
$T_fichier = file('listeverbe.txt');

for ($i = 0; $i < count($T_fichier); $i++) {
    echo ("Ajout du verbe " . $T_fichier[$i] . "\n");

    // Ajout dans le tableau uniquement 
    // si le verbe est bien du premier groupe
    // On doit "nettoyer" avant d'envoyer
    if ( checkPremierGroupe( trim($T_fichier[$i]) ) )
    {
        // Nettoyage du verbe avant ajout en base
        $T_verbes[] = strtolower(trim($T_fichier[$i]));
    }        
}

// 2. Demande à l'utilisateur de choisir un verbe
echo "Choisir un chiffre entre 1 et " . count($T_verbes) . "\n";
$saisie = (int) readline();



echo conjuguer( $T_verbes[$saisie] );


