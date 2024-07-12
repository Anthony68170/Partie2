<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Avec meta name = "viewport" on permet le controle des dimensions et échelles en donnant des instructions au navigateur -->
    <!-- Avec "content" on définit la hauteur et la largeur de l'appareil de l'utilisateur-->
    <!-- initial-scale=1.0 : Définit le niveau de zoom initial lorsque la page est chargée pour la première fois par le navigateur. Une valeur de 1.0 signifie qu'il n'y a pas de zoom (1:1) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 PHP 2</title>
    <style>
        /* Style pour les paragraphes, avec une police plus légère */
        p {
            font-weight: lighter;
        }
        /* Style pour le texte rouge */
        .red {
            color: red;
        }
    </style>
</head>
<body>

    <h1>I. Exercice 1 : Fonction Personnalisée</h1>
    <p>
        Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
        caractères passée en argument en majuscules et en rouge.<br>
        <br>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte);<br>
        Affichage (si $texte = « Mon texte en paramètre ») - Alors => "MON TEXTE EN PARAMETRE".
    </p>
    
    <?php

    // Définir la variable $texte avec la chaîne de caractères initiale
    // Cette variable "$texte" contient le texte à transformer
    $texte = "Mon texte en paramètre.";

    // Déclaration de la fonction personnalisée convertirMajRouge()
    function convertirMajRouge($texte) {
        
        // Convertir le texte en majuscules en utilisant mb_strtoupper pour gérer les caractères spéciaux.
        // Remarque : strtoupper transforme la chaîne en majuscules sans gérer les caractères spéciaux.
        $texte = mb_strtoupper($texte); 

        // Retourner le texte encapsulé dans une balise span avec la classe CSS 'red' pour le rendre rouge.
        // Le texte est retourné pour être affiché avec les modifications appliquées.
        return "<span class='red'>$texte</span>";
    }
    echo "Résultat : <br>";
    // Afficher le texte transformé en appelant la fonction convertirMajRouge().
    // Le texte est transformé grâce à l'appel de la fonction convertirMajRouge.
    echo convertirMajRouge($texte);
    ?>

</body>
</html>
