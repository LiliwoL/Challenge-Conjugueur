# Challenge-Conjugueur
Un challenge pour créer un conjugueur de verbes du premier groupe

Lire les verbes stockés dans le fichier **listeverbe.txt**, et les conjuguer.

Pour parcourir un fichier:
```php
$t = file('listeverbe.txt');

for ($i = 0; $i < count($t); $i++) {
    echo ($t[$i] . '\n');
}
```

## Sources

Liste des verbes du premier groupe
https://www.conjugaisonfrancaise.com/verbes/liste-verbes-premier-groupe.html

Règle de conjugaison
https://www.conjugaisonfrancaise.com/conjugaison/verbes-premier-groupe.html


# Proposition de solution

## Cas possibles

* Verbe pronominal
    * se désaltérer, se marrer
* Verbe pronominal avec une voyelle
    * s'aérer, s'égosiller
* Verbe commencant avec une voyelle
    * applaudir, uriner
* Verbe commenant par une consonne
    * tous les autres