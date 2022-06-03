<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.<br>
Exemple : "Engage le jeu que le gagne" est une phrase palindrome</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseLower = mb_strtolower(str_replace(" ", "", $phrase));
// $phraseReverse = strrev(mb_strtolower(str_replace(" ", "", $phrase)));
$phraseReverse = strrev($phraseLower);

if($phraseLower == $phraseReverse) {
    echo "La phrase « $phrase » est palindrome<br>";
} else {
    echo "La phrase « $phrase » n'est pas palindrome<br>";
}

// ternaire
echo "La phrase « $phrase » est ". ($phraseLower == $phraseReverse ? "palindrome" : "non palindrome");