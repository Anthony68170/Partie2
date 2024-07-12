<!DOCTYPE html>
<!--Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue tjs définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <!-- Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <!--Définit la largeur de la page à la largeur de l'écran de l'appareil. Cela signifie que la page utilisera toute la largeur disponible de l'écran.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 PHP 2</title>
    <!-- Titre de la page qui apparaîtra dans l'onglet du navigateur -->
    <style>
        /* Style pour les images avec une marge de 5 pixels */
        img {
            margin: 0px;
        }
    </style>
    <!-- Fin de la section de style CSS -->
</head>
<body>
    <!-- Début du corps de la page, où le contenu visible de la page est placé -->

    <h1>VIII. Exercice 8 : Afficher une image N fois</h1>
    <!-- Titre principal de la page, utilise une balise <h1> pour une importance maximale -->

    <p>
        Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
        <br>Résultat :<br>
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->

    <?php
    // Définir la fonction personnalisée repeterImage() pour afficher une image N fois
    function repeterImage($url, $n) {
        // Boucle pour afficher l'image $n fois
        // Initialisation : $i = 0 commence à 0
        // Condition : $i < $n continue la boucle tant que $i est inférieur à $n
        // Incrémentation : $i++ augmente $i de 1 après chaque itération
        for ($i = 0; $i < $n; $i++) {
            // Affichage de l'image en utilisant la balise <img>
            // L'attribut src spécifie l'URL de l'image
            echo '<img src="' . $url . '" alt="Image" width="200">';
        }
    }

    // URL de l'image à afficher
    $url = "http://my.mobirise.com/data/userpic/764.jpg";

    // Appeler la fonction repeterImage() pour afficher l'image 4 fois
    repeterImage($url, 4);
    ?>

</body>
</html>