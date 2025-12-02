<?php
require_once 'app/model/products.model.php';
require_once 'app/controller/controller.php';
$quantite['quantité'];
function generatePanierPage() {
    $data = [
        'achat'=>getSpecificBeers(),
        'page_title' => "Votre panier",
        'view' => 'app/view/panier.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>