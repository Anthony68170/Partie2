<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 PHP 2</title>
    <style>
        p {
            font-weight: normal;
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
    function afficherTableHTML($capitales) {
        // Trier le tableau par ordre alphabétique des clés (pays)
        ksort($capitales);
        
        // Début du tableau HTML
        echo "<table>";
        echo "<tr><th>Pays</th><th>Capitale</th></tr>";
        
        // Parcourir le tableau trié et afficher chaque ligne
        foreach ($capitales as $pays => $capitale) {
            echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
        }
        
        // Fin du tableau HTML
        echo "</table>";
    }

    // Tableau des capitales
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    );

    // Appel de la fonction pour afficher le tableau HTML
    afficherTableHTML($capitales);
    ?>

</body>
</html>