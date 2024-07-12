<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 PHP 2</title>
    <style>
        /* Style pour les paragraphes avec une police plus légère */
        p { 
            font-weight: lighter;
        }
        /* Style pour le texte en rouge */
        .red {
            color: red;
        }
        /* Style pour le tableau */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        /* Style pour les cellules du tableau */
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        /* Style pour l'en-tête du tableau */
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>II. Exercice 2 : Tableau des Capitales</h1>
    <p>
        Soit le tableau suivant :<br>
        $capitales = array<br>
        ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
        <br>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.<br>
        <br>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
        <br>Affichage :<br>
        <br>ALLEMAGNE Berlin<br>FRANCE Paris<br>ITALIE Rome<br>USA Washington<br>
    </p>
    
    <?php
    // Un tableau associatif en PHP lie des valeurs à des clés, comme un dictionnaire.
    // Les clés et valeurs sont définies sous la forme "clé => valeur".
    // Exemple : "France" est la clé et "Paris" est la valeur associée.
    $capitales = array(
        "France" => "Paris", // France est la "Clé" et "Paris" est la "Valeur"
        "Allemagne" => "Berlin", // Attention : Retenir syntxe de base pour les tableaux associatifs 
        "USA" => "Washington",
        "Italie" => "Rome", // Ajouter une virgule à la fin permet d'ajouter des nouveaux éléments plus facilement.
    );            

    // Appeler la fonction pour afficher le tableau HTML des capitales
    afficherTableHTML($capitales); // La fonction appelle le tableau cité; ici $capitales

    // Définir la fonction personnalisée afficherTableHTML()
    function afficherTableHTML($capitales) {
        // Trier le tableau par ordre alphabétique des pays (clés)
        ksort($capitales);
        
        // Début du tableau HTML
        echo "<table>";
        echo "<tr><th>Pays</th><th>Capitale</th></tr>";
    
        // Parcourir le tableau et afficher chaque pays et sa capitale dans une ligne du tableau
        foreach ($capitales as $pays => $capitale) {
            // Afficher le pays en majuscules et la capitale
            echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
        }
        
        // Fin du tableau HTML
        echo "</table>";
    }
    ?>

</body>
</html>
