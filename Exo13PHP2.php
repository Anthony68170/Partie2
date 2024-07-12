

<!-- Il faut débuter en créant une classe voiture, puisque c'est le dénominateur-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 PHP 2</title>
</head>
<body>

    <h1>XIII. Exercice 13 : Classe Voiture en PHP</h1>
    <p>Créer une classe Voiture avec les propriétés et méthodes spécifiées.</p>
    <p>La classe Voiture possède les propriétés suivantes : <strong>marque</strong> (la marque de la voiture, par exemple "Peugeot"), <strong>modèle</strong> (le modèle de la voiture, par exemple "408"), <strong>nbPortes</strong> (le nombre de portes de la voiture, par exemple 5) et <strong>vitesseActuelle</strong> (la vitesse actuelle de la voiture, initialisée à 0). Les méthodes de la classe incluent <strong>demarrer()</strong> (pour démarrer la voiture), <strong>accelerer(vitesse)</strong> (pour augmenter la vitesse de la voiture), <strong>stopper()</strong> (pour arrêter la voiture), <strong>ralentir(vitesse)</strong> (pour diminuer la vitesse de la voiture), ainsi que des accesseurs (get) et mutateurs (set) pour chacune des propriétés.</p>

    <p><strong>Introduction pour les développeurs débutants :</strong></p>
    <p>Dans cet exercice, nous allons créer une classe en PHP pour représenter une voiture. Une classe est un modèle ou un plan pour créer des objets. Chaque objet créé à partir de cette classe possédera les propriétés (variables) et les méthodes (fonctions) définies dans la classe. Voici ce que nous allons faire :</p>
    <ul>
        <li>Définir une classe <strong>Voiture</strong> avec quatre propriétés : <em>marque</em>, <em>modèle</em>, <em>nbPortes</em>, et <em>vitesseActuelle</em>.</li>
        <li>Créer un constructeur pour initialiser ces propriétés lorsque nous créons une nouvelle voiture.</li>
        <li>Ajouter des méthodes pour démarrer, accélérer, ralentir, et arrêter la voiture.</li>
        <li>Inclure des accesseurs (get) et des mutateurs (set) pour permettre l'accès et la modification des propriétés de la voiture de manière sécurisée.</li>
        <li>Créer des instances de la classe <strong>Voiture</strong> et tester les méthodes pour s'assurer qu'elles fonctionnent correctement.</li>
    </ul>

    <?php
    // Définir la classe Voiture
    class Voiture {
        // Propriétés de la classe
        private $marque;           // La marque de la voiture (ex: Peugeot)
        private $modele;           // Le modèle de la voiture (ex: 408)
        private $nbPortes;         // Le nombre de portes de la voiture (ex: 5)
        private $vitesseActuelle;  // La vitesse actuelle de la voiture

        // Constructeur pour initialiser les propriétés de la voiture
        public function __construct($marque, $modele, $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0; // La vitesse initiale est toujours 0
        }

        // Méthode pour démarrer la voiture
        public function demarrer() {
            return "Le véhicule " . $this->marque . " " . $this->modele . " démarre.";
        }

        // Méthode pour accélérer la voiture
        public function accelerer($vitesse) {
            $this->vitesseActuelle += $vitesse; // Ajouter la vitesse donnée à la vitesse actuelle
            return "Le véhicule " . $this->marque . " " . $this->modele . " accélère de " . $vitesse . " km/h.";
        }

        // Méthode pour stopper la voiture
        public function stopper() {
            $this->vitesseActuelle = 0; // La vitesse actuelle devient 0
            return "Le véhicule " . $this->marque . " " . $this->modele . " est à l'arrêt.";
        }

        // Méthode pour ralentir la voiture
        public function ralentir($vitesse) {
            // Réduire la vitesse actuelle de la voiture de la valeur donnée
            $this->vitesseActuelle -= $vitesse;
            
            // Vérifier si la vitesse actuelle est devenue négative
            if ($this->vitesseActuelle < 0) {
                // Si la vitesse est négative, la remettre à zéro car une voiture ne peut pas avoir une vitesse négative
                $this->vitesseActuelle = 0;
            }
            
            // Retourner un message indiquant de combien la voiture a ralenti
            return "Le véhicule " . $this->marque . " " . $this->modele . " ralentit de " . $vitesse . " km/h.";
        }

        // "GETTER" pour la propriété marque
        public function getMarque() {
            return $this->marque;
        }

        // "SETTER" pour la propriété marque
        public function setMarque($marque) {
            $this->marque = $marque;
        }

        // Getter pour la propriété modele
        public function getModele() {
            return $this->modele;
        }

        // Setter pour la propriété modele
        public function setModele($modele) {
            $this->modele = $modele;
        }

        // Getter pour la propriété nbPortes
        public function getNbPortes() {
            return $this->nbPortes;
        }

        // Setter pour la propriété nbPortes
        public function setNbPortes($nbPortes) {
            $this->nbPortes = $nbPortes;
        }

        // Getter pour la propriété vitesseActuelle
        public function getVitesseActuelle() {
            return $this->vitesseActuelle;
        }

        // Setter pour la propriété vitesseActuelle
        public function setVitesseActuelle($vitesse) {
            $this->vitesseActuelle = $vitesse;
        }

        // Méthode pour obtenir les informations de la voiture
        public function infos() {
            // Retourne une chaîne de caractères contenant toutes les informations de la voiture
            return "Marque : " . $this->marque . "<br>Modèle : " . $this->modele . "<br>Nombre de portes : " . $this->nbPortes . "<br>Vitesse actuelle : " . $this->vitesseActuelle . " km/h<br>";
        }
    }

    // Création des objets voiture
    // Instanciation de la première voiture avec la marque "Peugeot", modèle "408" et 5 portes
    $voiture1 = new Voiture("Peugeot", "408", 5);
    // Instanciation de la deuxième voiture avec la marque "Citroën", modèle "C4" et 3 portes
    $voiture2 = new Voiture("Citroën", "C4", 3);

    //Tests des méthodes de la classe Voiture
    echo $voiture1->demarrer() . "<br>";            // Tester la méthode démarrer pour la première voiture
    echo $voiture1->accelerer(50) . "<br>";         // Tester la méthode accélérer avec 50 km/h pour la première voiture
    echo $voiture1->infos() . "<br>";               // Afficher les informations de la première voiture
    echo $voiture1->ralentir(20) . "<br>";          // Tester la méthode ralentir avec 20 km/h pour la première voiture
    echo $voiture1->infos() . "<br>";               // Afficher les informations de la première voiture après ralentissement
    echo $voiture1->stopper() . "<br>";             // Tester la méthode stopper pour la première voiture
    echo $voiture1->infos() . "<br>";               // Afficher les informations de la première voiture après l'arrêt

    echo $voiture2->demarrer() . "<br>";            // Tester la méthode démarrer pour la deuxième voiture
    echo $voiture2->accelerer(30) . "<br>";         // Tester la méthode accélérer avec 30 km/h pour la deuxième voiture
    echo $voiture2->infos() . "<br>";               // Afficher les informations de la deuxième voiture
    echo $voiture2->stopper() . "<br>";             // Tester la méthode stopper pour la deuxième voiture
    echo $voiture2->infos() . "<br>";               // Afficher les informations de la deuxième voiture après l'arrêt
    ?>

</body>
</html>
