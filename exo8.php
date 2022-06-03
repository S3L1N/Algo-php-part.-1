<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>

<h2>Résultat</h2>

<?php

$table = 8;

// Méthode FOR
echo "Table de $table : <br>";

echo "<h3>Méthode FOR</h3>";
for($i = 1; $i <= 10; $i++) {
    $result = $i * $table;
    echo "$i x $table = $result<br>";
}

// Méthode WHILE
echo "<h3>Méthode WHILE</h3>";
$i = 1;
while($i <= 10) {
    $result = $i * $table;
    echo "$i x $table = $result<br>";
    $i++;
}

// Méthode FOREACH
echo "<h3>Méthode FOREACH</h3>";
foreach(range(1,10) as $i) {
    $result = $i * $table;
    echo "$i x $table = $result<br>";
}

