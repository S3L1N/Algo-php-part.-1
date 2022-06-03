<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)</p>

<h2>Résultat</h2>

<?php

$now = new DateTime(); // instanciation d'un nouvel objet de la classe DateTime
$dateNaissance = new DateTime("1985-01-17 13:30:00");
// $dateNaissance2 = new DateTime("1989-12-03 15:30:00");

// echo $now->format("l d F Y H:i:s");
// echo $dateNaissance->format("l d F Y");

$interval = $dateNaissance->diff($now);

// $interval2 = $dateNaissance1->diff($dateNaissance2);

echo $interval->format("%y ans %m mois %d jours %h heures %i minutes");




