<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 PHP 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        
        /* Style pour le formulaire */
        form {
            display: flex; /* Utilise le modèle de boîte flexible pour la mise en page */
            flex-wrap: wrap; /* Permet aux éléments de s'enrouler sur plusieurs lignes si nécessaire */
            gap: 20px; /* Ajoute un espacement de 20 pixels entre les éléments */
        }
        
        /* Style pour les labels */
        label {
            display: flex; /* Utilise le modèle de boîte flexible pour le label */
            flex-direction: column; /* Dispose les enfants (texte et champ de saisie) en colonne */
            flex: 1 1 100%; /* Permet aux éléments de s'étendre pour remplir l'espace disponible */
            margin-top: 16px; /* Ajoute une marge supérieure de 16 pixels */
        }
        
        /* Style pour les champs de saisie et les listes déroulantes */
        input[type="text"], select {
            width: 100%; /* Les champs de saisie et les listes déroulantes occupent toute la largeur disponible */
            padding: 8px; /* Ajoute un padding de 8 pixels à l'intérieur de l'élément */
            box-sizing: border-box; /* Inclut le padding dans le calcul de la largeur totale de l'élément */
        }
    </style>
</head>
<body>

    <h1>X. Exercice 10 : Créer un formulaire complet pour un utilisateur</h1>
    <p>Créer un formulaire complet contenant les informations suivantes : nom, prénom, adresse e-mail, ville, sexe, et une liste de choix parmi les intitulés de formation.</p>

    <?php
    // Définir la fonction afficherInput() pour générer des champs de texte
    function afficherInput($nomsInput) {
        // Parcourir chaque élément du tableau $nomsInput
        foreach ($nomsInput as $nom) {
            // Afficher un label pour chaque champ de texte
            echo '<label for="' . strtolower($nom) . '">' . $nom . ':</label>';
            // Afficher un champ de saisie de texte avec l'ID et le nom en minuscules
            // input[type="text"] : Champ de saisie pour une ligne de texte
            echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '"><br>';
        }
    }

    // Définir la fonction genererCheckbox() pour générer des cases à cocher
    function genererCheckbox($elements) {
        // Parcourir chaque élément du tableau associatif $elements
        foreach ($elements as $label => $checked) {
            // Afficher un label pour chaque case à cocher
            echo '<label>';
            // Afficher une case à cocher
            // input[type="checkbox"] : Case à cocher permettant une sélection multiple
            echo '<input type="checkbox" name="' . strtolower($label) . '" ' . ($checked ? 'checked' : '') . '>';
            // Afficher le label à côté de la case à cocher
            echo $label;
            echo '</label><br>';
        }
    }

    // Définir la fonction afficherRadio() pour générer des boutons radio
    function afficherRadio($nomsRadio) {
        // Parcourir chaque élément du tableau $nomsRadio
        foreach ($nomsRadio as $nom) {
            // Afficher un label pour chaque bouton radio
            echo '<label>';
            // Afficher un bouton radio
            // input[type="radio"] : Bouton radio permettant une sélection unique parmi un groupe
            echo '<input type="radio" name="sexe" value="' . strtolower($nom) . '"> ' . $nom;
            echo '</label><br>';
        }
    }

    // Définir la fonction alimenterListeDeroulante() pour générer une liste déroulante
    function alimenterListeDeroulante($elements) {
        // Afficher un label pour la liste déroulante
        echo '<label for="formation">Formation :</label>';
        // Début de la liste déroulante
        echo '<select name="formation" id="formation">';
        // Parcourir chaque élément du tableau $elements
        foreach ($elements as $element) {
            // Afficher une option pour chaque élément du tableau
            echo '<option value="' . strtolower($element) . '">' . $element . '</option>';
        }
        // Fin de la liste déroulante
        echo '</select><br>';
    }
    ?>

    <form>
        <?php
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

        // Bouton de soumission du formulaire
        // input[type="submit"] : Bouton pour soumettre le formulaire
        echo '<br><input type="submit" value="Soumettre">';
        ?>
    </form>

</body>
</html>
