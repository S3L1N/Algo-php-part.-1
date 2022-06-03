<h1>Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$voitures = ["Peugeot", "Mercedes", "BMW", "Renault"];

$nbVoitures = count($voitures);

echo "Il y $nbVoitures voitures dans le tableau : <br>";

echo "<ul>";
foreach($voitures as $marque) {
    echo "<li>$marque</li>";
}
echo "</ul>";

echo "<ul>";
for($i = 0; $i < $nbVoitures; $i++) {
    echo "<li>".$voitures[$i]."</li>";    
}
echo "</ul>";
