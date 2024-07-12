<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 PHP 2</title>
    <style>
        p { 
            font-weight: lighter;
        }
    </style>
</head>
<body>

    <h1>XI. Exercice 11 : Afficher une date en français</h1>
    <p>Écrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractères représentant une date.</p>

    <?php
    // Fonction pour formater une date en français
    function formaterDateFr($date) {
        // Définir les jours de la semaine en français
        $jours = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
        // Définir les mois de l'année en français
        $mois = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

        // Convertir la chaîne de caractères en timestamp
        $timestamp = strtotime($date);

        // Récupérer le jour de la semaine (numéro) à partir du timestamp
        $jourSemaine = $jours[date("w", $timestamp)];
        // Récupérer le jour du mois à partir du timestamp
        $jour = date("d", $timestamp);
        // Récupérer le mois (numéro) à partir du timestamp et convertir en texte
        $moisTexte = $mois[date("n", $timestamp)];
        // Récupérer l'année à partir du timestamp
        $annee = date("Y", $timestamp);

        // Assembler et retourner la date formatée en français
        return $jourSemaine . " " . $jour . " " . $moisTexte . " " . $annee;
    }

    // Exemple d'utilisation de la fonction
    $date = "2018-02-23";
    // Affichage de la date formatée
    echo "<p>" . formaterDateFr($date) . "</p>";
    ?>

</body>
</html>
