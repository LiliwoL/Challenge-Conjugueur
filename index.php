<?php

// 0. Initialisation des variables
$T_verbes = new array();

// 1. Lecture de la liste des verbes
$t = file('listeverbe.txt');

for ($i = 0; $i < count($t); $i++) {
    echo ("Ajout du verbe " . $t[$i] . '\n');

    // Ajout dans le tableau uniquement si le verbe est bien du premier groupe
    if ( checkPremierGroupe($t[$i]) )
        $T_verbes[] = $t[$i];
}

// 2. Fonction de conjugaison


/**
 * 
 */
function checkPremierGroupe (string $verb) : bool
{
    // Vérifie les deux dernières lettres du verbe mises en minuscule
    if ( strtolower(substr($verb, -2)) == "er" )
        return true;
    else
        return false;
}
