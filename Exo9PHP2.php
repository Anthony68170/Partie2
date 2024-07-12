<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 PHP 2</title>
    <style>
        p { 
            font-weight: lighter;
        }
    </style>
</head>
<body>

    <h1>IX. Exercice 9 : Créer des boutons radio en lien avec un tableau</h1>
    <p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>
    <p><br>Exemple :
    
    afficherRadio($nomsRadio);
    </p>

    <?php

    
    function afficherRadio($nomsRadio) {
        foreach ($nomsRadio as $nom) {
            echo '<label>';
            echo '<input type="radio" name="titre" value="' . strtolower($nom) . '"> ' . $nom;
            echo '</label><br>';
        }
    }

    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle",);
    afficherRadio($nomsRadio);


    ?>

</body>
</html>

