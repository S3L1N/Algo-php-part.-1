<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
    <ul>
        <li>Poussin : entre 6 et 7 ans</li>
        <li>Pupille : entre 8 et 9 ans</li>
        <li>Minime : entre 10 et 11 ans</li>
        <li>Cadet : à partir de 12 ans</li>
        <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
    </ul>
</p>

<h2>Résultat</h2>

<?php

$age = 11;

if(gettype($age) == "integer") {
    if ($age >= 12) {
        $categorie = "Cadet";
    } elseif ($age >= 10) {
        $categorie = "Minime";
    } elseif ($age >= 8) {
        $categorie = "Pupille";
    } elseif ($age >= 6) {
        $categorie = "Poussin";
    } else {
        $categorie = "Non gérée";
    }
    
    echo "L'enfant qui a $age ans appartient à la catégorie : $categorie<br>";
    
} else {
    echo "Veuillez saisir un âge numérique !";
}
    