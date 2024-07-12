<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 PHP 2</title>
    <style>
        p { 
            font-weight: lighter;
        }
    </style>
</head>
<body>

    <h1>V. Exercice 5 : Création d'un champs de texte</h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>

    <br>Exemple :<br>

    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);</p>

    <?php
    
    function afficherInput($nomsInput) {
        echo '<form>';
        foreach ($nomsInput as $nom) {
            echo '<label for="' . strtolower($nom) . '">' . $nom . ':</label><br>';
            echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '"><br><br>';
        }
        echo '</form>';
    }

    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);
    ?>

</body>
</html>
