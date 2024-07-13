<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 PHP 2</title>
</head>
<body>

    <h1>XV. Exercice 15 : Validation d'Adresse E-mail en PHP</h1>
    <p>Vérifier si une adresse e-mail est au bon format en utilisant les ressources de la documentation PHP.</p>

    <?php
    // Adresse e-mail à vérifier
    $email = "elan@elan-formation.fr";


                        // ATTENTION Peut Etre très utile


    // // Vérification du domaine ProtonMail / Tutanota / RIPP Privé

    //if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '@protonmail.com') !== false) {
    //    echo "L'adresse $email est une adresse e-mail valide de ProtonMail";
   // } else {
   //     echo "L'adresse $email n'est pas une adresse e-mail ProtonMail valide";
   // }


    // Utiliser l'algo de vérification filter_var pour valider l'adresse e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse $email est une adresse e-mail valide";
    } else {
        echo "L'adresse $email n'est pas une adresse e-mail valide";
    }
    ?>

</body>
</html>
