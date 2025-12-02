<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateBrassagePage() {
    $data = [
        'page_title' => "Le Brassage",
        'view' => 'app/view/brassage.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}