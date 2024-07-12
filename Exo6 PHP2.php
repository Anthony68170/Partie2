<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 PHP 2</title>
    <style>
        p { 
            font-weight: lighter;
        }
    </style>
</head>
<body>

    <h1>V. Exercice 6 : Création d'une liste déroulante</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>

    <br>Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");
    alimenterListeDeroulante($elements);</p>

    <?php
    function alimenterListeDeroulante($elements) {
        echo '<select name="titre">';
        foreach ($elements as $element) {
            echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
        }
        echo '</select>';
    }

    $elements = array("Monsieur", "Madame", "Mademoiselle");
    alimenterListeDeroulante($elements);
    ?>

</body>
</html>
