<?php

require_once 'app/controller/controller.php';

/**
 * @return void
 */
function generateAgeCheckPage() {
    $data = [
        'page_title' => "Vérification d'âge",
        'view' => 'app/view/agecheck.view.php',
        'layout' => 'app/view/common/layout.php',
        'css' => 'app/public/css/agecheck.css',
    ];

    generatePage($data);
}