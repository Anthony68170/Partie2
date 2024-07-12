<!DOCTYPE html>
<!-- Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <title>Exercice 7 PHP 2</title>
    <!-- Titre de la page qui apparaîtra dans l'onglet du navigateur -->
    <style>
        /* Style pour les paragraphes avec une police plus légère */
        p { 
            font-weight: lighter;
        }
    </style>
    <!-- Fin de la section de style CSS -->
</head>
<body>
    <!-- Début du corps de la page, où le contenu visible de la page est placé -->

    <h1>VII. Exercice 7 : Créer des cases à cocher</h1>
    <!-- Titre principal de la page, utilise une balise <h1> pour une importance maximale -->

    <p>
        Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
        <br>Exemple :
        genererCheckbox($elements);<br>
        //où $elements est un tableau associatif clé => valeur avec 3 entrées.
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->

    <?php
    // Définir la fonction personnalisée genererCheckbox()
    function genererCheckbox($elements) {
        // Boucle pour parcourir chaque élément du tableau associatif $elements
        foreach ($elements as $label => $checked) {
            // Affichage de l'étiquette (<label>) pour chaque case à cocher
            echo '<label>';
            // Création de la case à cocher (<input type="checkbox">)
            // Utilisation de strtolower() pour convertir le label en minuscules pour l'attribut name
            // Si $checked est vrai, ajouter l'attribut 'checked' pour cocher la case
            echo '<input type="checkbox" name="' . strtolower($label) . '" ' . ($checked ? 'checked' : '') . '>';
            // Affichage du label à côté de la case à cocher
            echo $label;
            echo '</label><br>';
        }
    }

    // Définir un tableau associatif des éléments à inclure dans les cases à cocher
    $elements = array(
        "Option 1" => false,
        "Option 2" => true,
        "Option 3" => false,
    );

    // Appeler la fonction genererCheckbox() pour créer et afficher les cases à cocher
    genererCheckbox($elements);
    ?>
    <!-- Fin du code PHP -->

</body>
</html>
