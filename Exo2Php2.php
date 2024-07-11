<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 PHP 2</title>
    <style>
        
        p { 
            font-weight: lighter;
        }
        .red {
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>II. Exercice 2 : Tableau des Capitales</h1>
    <p>Soit le tableau suivant :<br>

$capitales = array<br>

("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>

<br>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br>

<br>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
    
<br>Affichage<br>
    <br>ALLEMAGNE Berlin<br>FRANCE Paris<br>ITALIE Rome<br>USA Washington<br>
    </p>
    
    <?php
    // Compléter le tableau associatif en liant les pays aux différentes capitales
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
    );            

    // Appeler la fonction pour créer le tableau HTML des capitales, pour l'afficher plus tard (pour être stylysé et apparaître)
    afficherTableHTML($capitales);

    // Ajouter la fonction personnalisée devant être nommée "afficherTableHTML($capitales)"
    function afficherTableHTML($capitales) {

        // Utiliser la fonction ksort($______) pour trier les éléments du tableau par ordre alphabétique selon les pays (clés)
        ksort($capitales);
        
        // APPELER/CREER le DEBUT du tableau HTML
        echo "<table>";
        echo "<tr><th>Pays</th><th>Capitale</th></tr>";
    
        // Puis parcourir le tableau POUR TRIER / PUIS AFFICHER (echo) chaque ligne 
        foreach ($capitales as $pays => $capitale) {

        // strtoupper pour la modification des caractères en majuscules / Le restant des caractères obéissent aux styles précédemment définis.
        echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
        }
        
    // APPELER/CREER la FIN du tableau HTML
    echo "</table>";
    }

    ?>

</body>
</html>