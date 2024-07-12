<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 PHP 2</title>
</head>
<body>

    <h1>XI. Exercice 11 : Convertir une date (chiffre en caractères) en français</h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractères représentant une date.</p>

    <?php
    function formaterDateFr($dateStr) {
        // Définir la locale en français
        $locale = 'fr_FR';
        $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        
        // Définir le format de date souhaité
        $formatter->setPattern('EEEE d MMMM yyyy');
        
        // Convertir la chaîne de caractères en objet DateTime
        $date = new DateTime($dateStr);
        
        // Formater la date en français
        $dateFr = $formatter->format($date);
        
        // Afficher la date formatée
        echo ucfirst($dateFr);
    }

