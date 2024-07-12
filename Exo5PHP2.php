<!DOCTYPE html>
<!-- Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <!-- Avec meta name="viewport" Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 PHP 2</title>
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

    <h1>V. Exercice 5 : CHAMPS-FORMULAIRE / Création d'un champ de texte</h1>
    <!--Titre principal de la page, utilise une balise <h1> pour une importance maximale -->

    <p>
        Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>
        <br>Exemple :<br>
        $nomsInput = array("Nom","Prénom","Ville");<br>
        afficherInput($nomsInput);
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->

    <?php
    // Définir la fonction personnalisée afficherInput()
    function afficherInput($nomsInput) {
        // Début du formulaire HTML
        echo '<form>';
        // Boucle pour parcourir chaque élément du tableau $nomsInput
        foreach ($nomsInput as $nom) {
            // Création de l'étiquette (<label>) pour chaque champ de texte
            //Utilisation de strtolower() pour convertir le nom en minuscules
            echo '<label for="' . strtolower($nom) . '">' . $nom . ':</label><br>';
            // Création du champ de texte (<input type => "text">) avec un identifiant et un nom en minuscules
            echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '"><br><br>';
        }
        // Fin du formulaire HTML
        echo '</form>';
    }

    // Définir un tableau associatif des noms des champs de texte
    $nomsInput = array("Nom","Prénom","Ville");
    // Appeler la fonction afficherInput() pour créer et afficher le formulaire de champs de texte
    afficherInput($nomsInput);
    ?>
    <!-- Fin du code PHP -->
</body>
</html>

