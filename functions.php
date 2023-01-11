<?php

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

function conjuguer( string $verb) : string
{
    // Je
    $output = "Je " . substr($verb, 0, -1) . "\n";

    // Tu
    $output .= "Tu " . substr($verb, 0, -1) . "s" . "\n";

    // Il Elle On
    $output .= "Il / Elle / On " . substr($verb, 0, -1) . "\n";

    // Nous
    $output .= "Nous " . substr($verb, 0, -2) . "ons" . "\n";

    // Vous
    $output .= "Vous " . substr($verb, 0, -2) . "ez" . "\n";

    // Ils Elles
    $output .= "Ils / Elles " . substr($verb, 0, -1) . "nt" . "\n";

    return $output;
}