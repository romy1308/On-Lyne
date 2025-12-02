<?php

require_once 'app/controller/controller.php';
require_once 'app/model/recherche.model.php';

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateSearchPage()
{
    $search = "%";
    if (!empty($_GET['search'])) {
        $search = $_GET['search'];
    }

    $data = [
        'students' => getSearchedStudents($search),
        'page_title' => "Trombinoscope",
        'view' => 'app/view/recherche.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
};
