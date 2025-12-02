<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombi.model.php';


/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateFichePage()
{
    $id=1;
    if(!empty($id)){
        $id=$_GET["id_equipe"];
    }

    $id = isset($_GET["id_equipe"]) && ctype_digit($_GET["id_equipe"]) ? intval($_GET["id_equipe"]) : 0; 
    if ($id <= 0 || $id > getMaxStudentId()) {
        die("Invalid ID provided."); 
    };    
    
    $data = [
        'equipe' => getStudentById($id),
        'page_title' => "Fiche equipe",
        'view' => 'app/view/fiche.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}