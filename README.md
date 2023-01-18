# Challenge-PHP-Conjugueur

Un challenge pour créer un conjugueur de verbes du premier groupe avec le langage PHP en mode CLI.

Lire les verbes stockés dans le fichier **listeverbe.txt**, et les conjuguer au présent.

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
