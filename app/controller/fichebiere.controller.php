<?php

require_once 'app/controller/controller.php';
require_once 'app/model/products.model.php';



function generateFichebierePage()
{
    $id=1;
    if(!empty($id)){
        $id=$_GET["id_articles"];
    }

    $id = isset($_GET["id_articles"]) && ctype_digit($_GET["id_articles"]) ? intval($_GET["id_articles"]) : 0; 
    if ($id <= 0 || $id > getMaxBiereId()) {
        die("Invalid ID provided."); 
    };    
    
    $data = [
        'fichebiere' => getBiereById($id),
        'page_title' => "Notre biere",
        'view' => 'app/view/fichebiere.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}