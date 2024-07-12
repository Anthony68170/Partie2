<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 PHP 2</title>
    <h1>iV. Exercice 4 : Créer un lien d'accès vers le site d’Elan Formation :</h1><br>
    Tableau des Capitales avec lien hypertexte</h1>
    <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML 
        qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    
    <br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :<br>
    
    <br>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
    </p>
</head>
<body>
    <?php
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid",
    );

    // Trier le tableau par ordre alphabétique de la capitale
    asort($capitales);
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien wiki</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($capitales as $pays => $capitale): ?>
                <tr>
                    <td><?php echo $pays; ?></td>
                    <td><?php echo $capitale; ?></td>
                    <td><a href="https://fr.wikipedia.org/wiki/<?php echo $capitale; ?>" target="_blank">Lien</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
