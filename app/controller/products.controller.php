<?php
require_once 'app/controller/controller.php';     
require_once 'app/model/products.model.php';       
function generateProductPage() {
     

    $data = [
        'articles'=> getAllBieres(),
        'page_title' => "Nos bières",
        'view' => 'app/view/product.view.php',
        'layout' => 'app/view/common/layout.php',
        
    ];

    generatePage($data); 
}
?>


