<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 PHP 2</title>
    <style>
        p { 
            font-weight: lighter;
        }
    </style>
</head>
<body>

    <h1>VII. Exercice 7 : Créer des cases à cocher</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
    <br>Exemple :
    genererCheckbox($elements);
    <br>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

    <?php
    function genererCheckbox($elements) {
        foreach ($elements as $label => $checked) {
            echo '<label>';
            echo '<input type="checkbox" name="' . strtolower($label) . '" ' . ($checked ? 'checked' : '') . '>';
            echo $label;
            echo '</label><br>';
        }
    }

    $elements = array(
        "Option 1" => false,
        "Option 2" => true,
        "Option 3" => false,
    );

    genererCheckbox($elements);
    ?>

</body>
</html>

