<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français => « Salut », anglais => « Hello », espagnol => « Hola »)</p>

<h2>Résultat</h2>

<?php

$personnes = [
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
    "Mickael" => "FRA",
    "Stéphane" => "JAP"
]; 

ksort($personnes);  // k = key = clé -> trie par prénom
// asort($personnes);  // valeur -> trie par langue

foreach($personnes as $prenom => $langue) {
    switch($langue) {
        case "FRA" : echo "Salut $prenom<br>"; break;
        case "ENG" : echo "Hello $prenom<br>"; break;
        case "ESP" : echo "Hola $prenom<br>"; break;
        default: echo "Langue non gérée pour $prenom !<br>";
    }
}
