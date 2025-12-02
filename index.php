<?php

// index.php

require_once 'config.php';
require_once 'app/model/model.php';
//require_once 'app/controller/agecheck.controller.php';

// Si le cookie n'existe pas et que la route n'est pas validate_age, afficher la page de vérification
//if (!isset($_COOKIE['age_verified']) && (!isset($_GET['route']) || $_GET['route'] !== 'validate_age')) {
    //showAgeCheckPage();
    //exit;
//}

$route = 'agecheck';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
//faire des route pour le panier et l'ajout de bière
switch ($route) {

    case 'agecheck':
        require_once 'app/controller/agecheck.controller.php';
        generateAgeCheckPage();
        break;
    case 'home':
        require_once 'app/controller/accueil.controller.php';
        generateHomePage();
        break;

    case 'trombinoscope':
        require_once 'app/controller/trombi.controller.php';
        generateTrombinoscopePage();
        break;
    case 'ajout':
        require_once 'app/controller/ajoutbiere.controller.php';
        generateAjoutPage();
        break;
    case 'panier':
        require_once 'app/controller/panier.controller.php';
        generatePanierPage();
        break;
    case 'produit':
        require_once 'app/controller/products.controller.php';
        generateProductPage();
        break;
    case 'hacked':
        require_once 'app/controller/hacked.controller.php';
        generatehackedPage();
        break;
    case 'contact':
        require_once 'app/controller/contact.controller.php';
        generateContactPage();
        break;

    case 'search':
        require_once 'app/controller/recherche.controller.php';
        generateSearchPage();
        break;

    case 'student':
        require_once 'app/controller/trombi.controller.php';
        generateStudentPage();
        break;

    case 'compte':
        require_once 'app/controller/compte.controller.php';
        generateComptePage();
        break;

    case 'fiche':
        require_once 'app/controller/fiche.controller.php';
        generateFichePage();
        break;

    case 'fichebiere':
        require_once 'app/controller/fichebiere.controller.php';
        generateFichebierePage();
        break;

    case 'achat':
        require_once 'app/controller/achat.controller.php';
        generateAchatPage();
        break;

    case 'brassage':
        require_once 'app/controller/brassage.controller.php';
        generateBrassagePage();
        break;
    //case 'validate_age':
       
        //validateAgeCheck();
        //break;    
    default:
        http_response_code(404);
        echo "Page non trouvée";
        break;
        exit;
}
