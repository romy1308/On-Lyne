<?php
require_once 'app/controller/controller.php';

function generatehackedPage() {
    $data = [
        'page_title' => "Hacked",
        'view' => 'app/view/hacked.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
?>