<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 PHP 2</title>
    <style>
        p {
            font-weight: lighter;
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
    <br>MON TEXTE EN PARAMETRE.
    </p>
    
    <?php

    // Ajouter une fonction personnalisée ()
    function convertirMajRouge($texte) {
        // Modifier le texte en majuscule avec la fonction "strtoupper" (en minuscule => strlower)
        $texte = mb_strtoupper($texte); // L'option "mb_" devant la fonction strtoupper, perùet de prendre en charge les caractères spéciaux comme "è" de "paramètre"

        // Reprendre la chaîne de caractère avec la fonction "RETURN" 
        // Puis modifier en rouge du texte grâce à la fonction "SPAN"
        // (span) Ne pas oublier d'appeler la "Class" de style nouvellement créée dans la section "style"
        return "<span class='red'>$texte</span>";
    }
    // Enregistrer le texte dans un iD (pour le faire apparaître plus tard)
    $texte = "Mon texte en paramètre.";

    // Faire apparaître le texte, modifié selon les critères de style précédents 
    echo convertirMajRouge($texte);
    ?>

</body>
</html>