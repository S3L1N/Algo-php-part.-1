<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "Les notes obtenues sont : ";
foreach($notes as $note) {
    echo $note." ";
}

echo "<br>Les notes obtenues sont : ". implode(", ", $notes);

echo "<br>La moyenne est de : $moyenne";

$phrase = "Bonjour tout le monde";
$tableau = explode(" ", $phrase);
var_dump($tableau);

$motADeviner = "Formation";
$tab = str_split($motADeviner, 1);
var_dump($tab);

