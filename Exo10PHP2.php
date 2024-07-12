<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Exercice 10 PHP 2</title>

    <style>
        p { 
            font-weight: lighter;
        }
        label {
            display: block;
            margin-top: 16px;
        }
    </style>

</head>
<body>

    <h1>X. Exercice 10 : Créer un formulaire complet pour un utilisateur</h1>
    <p>Créer un formulaire complet contenant les informations suivantes : nom, prénom, adresse e-mail, ville, sexe, et une liste de choix parmi les intitulés de formation.</p>

    <?php

    // 
    function afficherInput($nomsInput) {
        foreach ($nomsInput as $nom) {
            echo '<label for="' . strtolower($nom) . '">' . $nom . ':</label>';
            echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '"><br>';
        }
    }

    // 
    function genererCheckbox($elements) {
        foreach ($elements as $label => $checked) {
            echo '<label>';
            echo '<input type="checkbox" name="' . strtolower($label) . '" ' . ($checked ? 'checked' : '') . '>';
            echo $label;
            echo '</label><br>';
        }
    }
    // 
    function afficherRadio($nomsRadio) {
        foreach ($nomsRadio as $nom) {
            echo '<label>';
            echo '<input type="radio" name="sexe" value="' . strtolower($nom) . '"> ' . $nom;
            echo '</label><br>';
        }
    }
    //
    function alimenterListeDeroulante($elements) {
        echo '<label for="formation">Formation :</label>';
        echo '<select name="formation" id="formation">';
        foreach ($elements as $element) {
            echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
        }
        echo '</select><br>';
    }

    // Champs de texte
    $nomsInput = array("Nom", "Prénom", "Adresse e-mail", "Ville");
    afficherInput($nomsInput);

    // Boutons radio pour le sexe
    echo '<label>Sexe :</label>';
    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
    afficherRadio($nomsRadio);

    // Liste déroulante pour la formation
    $formations = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
    alimenterListeDeroulante($formations);

    // Bouton de soumission
    echo '<br><input type="submit" value="Soumettre">';
    ?>

</body>
</html>
