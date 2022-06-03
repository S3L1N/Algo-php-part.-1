<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php

$aPayer = 152;
$versement = 200;
$reste = $versement - $aPayer;  // 48

echo "A payer : $aPayer €<br>";
echo "Somme versée : $versement €<br>";
echo "Reste : $reste €<br>";

$billet10 = intdiv($reste, 10);  // 48 / 10 = 4.8  intdiv -> 4
$reste = $reste - 10 * $billet10;  // 8
$billet5 = intdiv($reste, 5);
$reste = $reste - 5 * $billet5;
$piece2 = intdiv($reste, 2);
$reste = $reste - 2 * $piece2;

echo "*******************************************<br>";

echo    "Billets de 10 : $billet10<br>
        Billets de 5 : $billet5<br>
        Pièces de 2 : $piece2<br>
        Pièces de 1 : $reste"; 