<?php


require_once 'app/controller/panier.controller.php';  
require_once 'app/view/ajout_biere.php';

$achat = $_SESSION['achat'] ;
$id_articles = array_keys($achat);


$bieres = getSpecificBeers($db, $id_articles);

$bieresIndexed = [];
foreach ($bieres as $biere) {
    $bieresIndexed[$biere['id_articles']] = $biere;
}

$totalPanier = 0;

foreach ($achat as $id_articles => $quantite) {
    if (!isset($bieresIndexed[$id_articles])) continue;

    $fichebiere = $bieresIndexed[$id_articles];
    $montant = $fichebiere['Prix'] * $quantite;

    $achat = [
        'quantite' => $quantite,
        'biere' => $fichebiere,
        'montant' => $montant
    ];

    $totalPanier += $montant;
}

include 'index.php?route=achat';
?>