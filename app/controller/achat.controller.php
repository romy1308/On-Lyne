<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateAchatPage() {
    $data = [
        'page_title' => "Votre panier",
        'view' => 'app/view/achat.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
