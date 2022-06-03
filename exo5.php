<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.<br>
Exemple : 100 francs = 15.24 €</p>

<h2>Résultat</h2>

<?php

$valeurFrancs = 100;
$tauxChange = 6.55957;
$valeurEuros = round($valeurFrancs / $tauxChange, 2); // float
$valeurEuros = number_format($valeurFrancs / $tauxChange, 2, ",", " "); // string

echo "Montant en francs : $valeurFrancs = $valeurEuros €<br>";

