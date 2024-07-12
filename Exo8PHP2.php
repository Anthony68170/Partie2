<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 PHP 2</title>
    <style>
        img {
            margin: 5px;
        }
    </style>
</head>
<body>

    <h1>VIII. Exercice 8 : Afficher une image N fois</h1>
    <p>Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
<br>
Résultat :<br></p>

    <?php
    // Créer la fonction liée à l'image
    function repeterImage($url, $n) {
        for ($i = 0; $i < $n; $i++) {
            echo '<img src="' . $url . '" alt="Image" width="200">';
        }
    }

    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    repeterImage($url, 4);
    ?>

</body>
</html>
