<!DOCTYPE html>
<!-- Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <title>Exercice 6 PHP 2</title>
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

    <h1>V. Exercice 6 : Création d'une liste déroulante</h1>
    <!-- Titre principal de la page, utilise une balise <h1> pour une importance maximale -->

    <p>
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
        <br>Exemple :<br>
        $elements = array("Monsieur","Madame","Mademoiselle");<br>
        alimenterListeDeroulante($elements);
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->

    <?php
    // Définir la fonction personnalisée alimenterListeDeroulante()
    function alimenterListeDeroulante($elements) {
        // Début de la liste déroulante HTML
        echo '<select name="titre">';
        // Boucle pour parcourir chaque élément du tableau $elements
        foreach ($elements as $element) {
            // Création d'une option (<option>) pour chaque élément de la liste
            // Utilisation de strtolower() pour convertir l'élément en minuscules dans l'attribut value
            echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
        }
        // Fin de la liste déroulante HTML
        echo '</select>';
    }

    // Définir un tableau des éléments à inclure dans la liste déroulante
    $elements = array("Monsieur", "Madame", "Mademoiselle");
    // Appeler la fonction alimenterListeDeroulante() pour créer et afficher la liste déroulante
    alimenterListeDeroulante($elements);
    ?>
    <!-- Fin du code PHP -->

</body>
</html>
