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


// **************************
// Cas des verbes Pronominaux
// **************************

/**
 * Vérifie que c'est un verbe pronominal ou non (qui commence par se)
 *
 * @param string $verb
 * @return boolean
 */
function isVerbePronominal (string $verb) : bool
{
    // Prnoms possibles
    $T_pronom = [ 'se', "s'" ];

    // Vérifie les deux premières lettres du verbe mises en minuscule
    if ( in_array( strtolower(substr($verb, 0, 2)), $T_pronom) )
        return true;
    else
        return false;
}

function conjuguerVerbePronominal( string $verb ) : string
{
    // On doit d'abord retirer le pronom (se)
    $verb = substr($verb, 3);

    // Je
    $output = "Je me " . substr($verb, 0, -1) . "\n";

    // Tu
    $output .= "Tu te " . substr($verb, 0, -1) . "s" . "\n";

    // Il Elle On
    $output .= "Il / Elle / On se " . substr($verb, 0, -1) . "\n";

    // Nous
    $output .= "Nous nous " . substr($verb, 0, -2) . "ons" . "\n";

    // Vous
    $output .= "Vous vous " . substr($verb, 0, -2) . "ez" . "\n";

    // Ils Elles
    $output .= "Ils / Elles se " . substr($verb, 0, -1) . "nt" . "\n";

    return $output;
}

function conjuguerVerbePronominalAvecVoyelle( string $verb ) : string
{
    // On doit d'abord retirer le pronom (s')
    $verb = substr($verb, 2);

    // Je
    $output = "Je m'" . substr($verb, 0, -1) . "\n";

    // Tu
    $output .= "Tu t'" . substr($verb, 0, -1) . "s" . "\n";

    // Il Elle On
    $output .= "Il / Elle / On s'" . substr($verb, 0, -1) . "\n";

    // Nous
    $output .= "Nous nous " . substr($verb, 0, -2) . "ons" . "\n";

    // Vous
    $output .= "Vous vous " . substr($verb, 0, -2) . "ez" . "\n";

    // Ils Elles
    $output .= "Ils / Elles s'" . substr($verb, 0, -1) . "nt" . "\n";

    return $output;
}

function conjuguerVerbeVoyelle( string $verb ) : string
{
    // Je
    $output = "J'" . substr($verb, 0, -1) . "\n";

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

function conjuguerVerbeConsonne( string $verb ) : string
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

// **************************
// Détermine le type de verbe
// **************************

function getTypeVerbe (string $verb ) : string
{
    // Tableau des voyelles
    $T_voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

    // On vérifie d'abord si c'est un verbe pronominal
    if ( isVerbePronominal($verb) )
    {
        // Vérifie la première lettre après le prnom (me ou se) mise en minuscule
        if ( in_array( strtolower(substr($verb, 2, 1)), $T_voyelles) )
            $typeVerbe = "PronominalVoyelle";
        else
            $typeVerbe = "Pronominal";
    }else{
        // Vérifie la première lettre
        if ( in_array( strtolower(substr($verb, 0, 1)), $T_voyelles) )
            $typeVerbe = "Voyelle";
        else
            $typeVerbe = "Consonne";
    }

    return $typeVerbe;
}


/**
 * Fonction principale pour conjuguer le verbe
 *
 * @param string $verb
 * @return string
 */
function conjuguer( string $verb ) : string
{
    // Nettoyage du verbe
    $verb = trim($verb);

    // Détermine le type de verbe
    $typeVerbe = getTypeVerbe($verb);

    echo "Le type de verbe est: $typeVerbe \n";

    switch ($typeVerbe){
        case 'Pronominal':
            $output = conjuguerVerbePronominal($verb);
            break;

        case 'PronominalVoyelle':
            $output = conjuguerVerbePronominalAvecVoyelle($verb);
            break;

        case 'Voyelle':
            $output = conjuguerVerbeVoyelle($verb);
            break;

        case 'Consonne':
            $output = conjuguerVerbePronominal($verb);
            break;
    }

    return $output;
}