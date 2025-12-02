<?php

require_once 'app/controller/controller.php';


function generateComptePage() {
    $data = [
        'page_title' => "Se connecter",
        'view' => 'app/view/compte.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}