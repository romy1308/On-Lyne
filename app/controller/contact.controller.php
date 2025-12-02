<?php
require_once 'app/controller/controller.php';

function generateContactPage() {
    $data = [
        'page_title' => "Nous contacter",
        'view' => 'app/view/contact.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>