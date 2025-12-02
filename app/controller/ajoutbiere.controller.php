<?php
require_once 'app/controller/controller.php';
require_once 'app/model/products.model.php';
function generateAjoutPage() {
    $data = [
        'panier'=>getSpecificBeers(),
        'page_title' => "Nous contacter",
        'view' => 'app/view/ajout_biere.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>