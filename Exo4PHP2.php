<!DOCTYPE html>
<!-- Déclaration du type de document comme étant HTML5 -->
<html lang="fr">
<!-- Début du document HTML avec la langue définie sur "fr" pour le français -->
<head>
    <meta charset="UTF-8">
    <!-- Définition du jeu de caractères utilisé (UTF-8) pour assurer la compatibilité avec la plupart des caractères -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise en page responsive pour s'adapter à la largeur de l'écran du dispositif utilisé -->
    <title>Exercice 4 PHP 2</title>
    <!-- Titre de la page qui apparaîtra dans l'onglet du navigateur -->
    <h1>IV. Exercice 4 : Créer un lien d'accès vers le site d’Elan Formation :</h1><br>
    <!-- Titre principal de la page, utilise une balise <h1> pour une importance maximale -->
    <h1>Tableau des Capitales avec lien hypertexte</h1>
    <!-- Sous-titre principal de la page -->
    <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML 
        qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    
    <br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :<br>
    
    <br>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
    </p>
    <!-- Paragraphe expliquant l'objectif de l'exercice et donnant les détails de la tâche -->
</head>
<body>
    <!-- Début du corps de la page, où le contenu visible de la page est placé -->
    <?php
    // Définir le tableau associatif des capitales avec les pays comme clés et les capitales comme valeurs
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid",
    );

    // Trier le tableau par ordre alphabétique des capitales (valeurs)
    asort($capitales);
    ?>

    <table border="1">
        <!-- Début du tableau HTML avec une bordure de 1 pixel -->
        <thead>
            <!-- Section de l'en-tête du tableau -->
            <tr>
                <!-- Début de la ligne de l'en-tête du tableau -->
                <th>Pays</th>
                <!-- Colonne pour les pays -->
                <th>Capitale</th>
                <!--Colonne pour les capitales-->
                <th>Lien wiki</th>
                <!--Colonne pour les liens Wikipédia -->
            </tr>
        </thead>
        <tbody>
            <!-- Section du corps du tableau où les données seront affichées -->
            <?php foreach ($capitales as $pays => $capitale): ?>
                <!-- Boucle pour parcourir chaque élément du tableau associatif-->
                <tr>
                    <!-- Début d'une ligne du tableau -->
                    <td><?php echo $pays; ?></td>
                    <!-- Cellule affichant le nom du pays -->
                    <td><?php echo $capitale; ?></td>
                    <!-- Cellule affichant le nom de la capitale -->
                    <td><a href="https://fr.wikipedia.org/wiki/<?php echo $capitale; ?>" target="_blank">Lien</a></td>
                    <!-- Cellule contenant un lien hypertexte vers la page Wikipédia de la capitale, ouvrant dans un nouvel onglet -->
                </tr>
                <!-- Fin de la ligne du tableau -->
            <?php endforeach; ?>
            <!-- Fin de la boucle foreach-->
        </tbody>
    </table>
    <!-- Fin du tableau HTML -->
</body>
</html>
