<!DOCTYPE html>
<!-- Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <title>Exercice 9 PHP 2</title>
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

    <h1>IX. Exercice 9 : Créer des boutons radio en lien avec un tableau</h1>
    <!-- Titre principal de la page, utilise une balise <h1> pour une importance maximale -->

    <p>
        Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
    </p>
    <p>
        <br>Exemple :
        afficherRadio($nomsRadio);
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->

    <?php
    // Définir la fonction personnalisée afficherRadio() pour afficher des boutons radio
    function afficherRadio($nomsRadio) {
        // Boucle pour parcourir chaque élément du tableau $nomsRadio
        foreach ($nomsRadio as $nom) {
            // Affichage de l'étiquette (<label>) pour chaque bouton radio
            echo '<label>';
            // Création du bouton radio (<input type="radio">)
            // Utilisation de strtolower() pour convertir le nom en minuscules pour l'attribut value
            echo '<input type="radio" name="titre" value="' . strtolower($nom) . '"> ' . $nom;
            // Affichage du nom à côté du bouton radio
            echo '</label><br>';
        }
    }

    // Définir un tableau des noms des boutons radio
    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
    // Appeler la fonction afficherRadio() pour créer et afficher les boutons radio
    afficherRadio($nomsRadio);
    ?>
    <!-- Fin du code PHP -->

</body>
</html>
