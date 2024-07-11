<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 PHP 2</title>
    <style>
        p {
            font-weight: normal;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>

    <h1>I. Exercice 1 : Fonction Personnalisée</h1>
    <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.<br>
    <br>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
    <br>Affichage (si $texte = « Mon texte en paramètre »)<br>
    MON TEXTE EN PARAMETRE.
    </p>
    
    <?php

    // Ajouter une function personnalisée ()
    function convertirMajRouge($texte) {
        $texte = strtoupper($texte);
        return "<span class='red'>$texte</span>";
    }

    $texte = "Mon texte en paramètre";
    echo convertirMajRouge($texte);
    ?>

</body>
</html>