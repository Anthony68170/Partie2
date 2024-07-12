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
    $tableauValeurs = array(true, "texte", 10, 25.369, array("valeur1", "valeur2"));

    foreach ($tableauValeurs as $valeur) {
        var_dump($valeur);
        echo "<br>";
    }
    ?>

</body>
</html>
