
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 PHP 2</title>
</head>
<body>

    <h1>XIV. Exercice 14 : Héritage de Classe Voiture en PHP</h1>
    <p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>

    <?php
    // Définir la classe Voiture de base
    class Voiture {
        // Propriétés de la classe
        protected $marque;  // La marque de la voiture
        protected $modele;  // Le modèle de la voiture

        // Constructeur pour initialiser les propriétés de la voiture
        public function __construct($marque, $modele) {
            $this->marque = $marque;
            $this->modele = $modele;
        }

        // Méthode pour obtenir les informations de la voiture
        public function getInfos() {
            return "Marque : " . $this->marque . "<br>Modèle : " . $this->modele;
        }
    }

    // Définir la classe VoitureElec qui hérite de Voiture
    class VoitureElec extends Voiture {
        // Propriété supplémentaire pour l'autonomie
        private $autonomie;

        // Constructeur pour initialiser les propriétés de Voiture et l'autonomie
        public function __construct($marque, $modele, $autonomie) {
            parent::__construct($marque, $modele);  // Appel du constructeur de la classe parente
            $this->autonomie = $autonomie;
        }

        // Méthode pour obtenir les informations de la voiture électrique
        public function getInfos() {
            return parent::getInfos() . "<br>Autonomie : " . $this->autonomie . " km";
        }
    }

    // Instanciation d'une voiture classique et d'une voiture électrique
    $vl = new Voiture("Peugeot", "408");
    $vel = new VoitureElec("BMW", "i3", 150);

    // Afficher les informations desdeux voitures
    echo $vl->getInfos() . "<br><br>";
    echo $vel->getInfos() . "<br>";
    ?>

</body>
</html>
