<?php

/**
 * Vériufie qu'il s'agit bien d'un verbe du premier groupe (qui finit en er)
 *
 * @param string $verb
 * @return boolean
 */
function checkPremierGroupe (string $verb) : bool
{
    // Vérifie les deux dernières lettres du verbe mises en minuscule
    if ( strtolower(substr($verb, -2)) == "er" )
        return true;
    else
        return false;
}

/**
 * Vérifie que c'est un verbe pronominal ou non (qui commence par se)
 *
 * @param string $verb
 * @return boolean
 */
function isVerbePronominal (string $verb) : bool
{
    // Vérifie les deux premières lettres du verbe mises en minuscule
    if ( strtolower(substr($verb, 0, 2)) == "se" )
        return true;
    else
        return false;
}

function conjuguerVerbePronominal( string $verb ) : string
{
    // Je
    $output = "Je me " . substr($verb, 0, -1) . "\n";

    // Tu
    $output .= "Tu te " . substr($verb, 0, -1) . "s" . "\n";

    // Il Elle On
    $output .= "Il / Elle / On se " . substr($verb, 0, -1) . "\n";

    // Nous
    $output .= "Nous nous" . substr($verb, 0, -2) . "ons" . "\n";

    // Vous
    $output .= "Vous vous " . substr($verb, 0, -2) . "ez" . "\n";

    // Ils Elles
    $output .= "Ils / Elles se" . substr($verb, 0, -1) . "nt" . "\n";

    return $output;
}


/**
 * Fonction principale pour conjuguer le verbe
 *
 * @param string $verb
 * @return string
 */
function conjuguer( string $verb) : string
{

    // Test si verbe pronominal
    if ( isVerbePronominal($verb) )
    {
        $output = conjuguerVerbePronominal($verb);
    }
    else
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
    }

    return $output;
}