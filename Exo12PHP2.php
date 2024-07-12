<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 PHP 2</title>
</head>
<body>

    <h1>XII. Exercice 12 : Utilisation de var_dump</h1>
    <p>Afficher les informations des variables contenues dans le tableau à l'aide de var_dump.</p>

    <?php
    // Définition d'un tableau contenant différentes valeurs de types variés
    $tableauValeurs = array(
        true,          // Valeur booléenne (vrai)
        "texte",       // Chaîne de caractères
        10,            // Nombre entier
        25.369,        // Nombre flottant
        array("valeur1", "valeur2") // Tableau imbriqué contenant des chaînes de caractères
    );

    // Parcourir chaque élément du tableau $tableauValeurs
    foreach ($tableauValeurs as $valeur) {
        // var_dump affiche le type et la valeur de la variable $valeur
        // Pour les types simples, cela inclut le type (bool, string, int, float) et la valeur
        // Pour les tableaux, ça inclut les types et les valeurs de tous les éléments du tableau
        var_dump($valeur);

        // Afficher une balise <br> pour ajouter un saut de ligne après chaque var_dump
        // Cela permet de séparer visuellement les informations de chaque variable affichée
        echo "<br>";
    }
    ?>

</body>
</html>
