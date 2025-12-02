<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombi.model.php';


function generateTrombinoscopePage() {
    $data = [ 
        'equipe' => getAllStudents(),
        'page_title' => "Trombinoscope", 
        'view' => 'app/view/trombi.view.php', 
        'layout' => 'app/view/common/layout.php', 
    ]; 
    generatePage($data);
}

function generateStudentPage() {

    $id = $_GET['id_equipe']; //TODO: pas sécurisé 

    $data = [ 
        'equipe' => getStudentById($id),
        'page_title' => "Trombinoscope", 
        'view' => 'app/view/student.view.php', 
        'layout' => 'app/view/common/layout.php', 
    ]; 
    generatePage($data);
}

?>

