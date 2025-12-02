<?php

require_once 'app/model/model.php';

function getAllStudents(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudentById(int $id): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe WHERE id_equipe=:id_equipe");
    $stmt->bindParam(':id_equipe', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

function getMaxStudentId()
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT id_equipe FROM equipe ORDER BY id_equipe DESC LIMIT 1");
    $stmt->execute();
    return $stmt->fetch()["id_equipe"];
}

function getNextStudentsPage(int $page): array
{
    $offset = ($page - 1) * 12;
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe LIMIT 12 OFFSET :offset");
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getStudentsAmount(): int
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT count(*) as total FROM equipe");
    $stmt->execute();
    $result = $stmt->fetch();
    return (int) $result['total'];
}

function getPageAmount(): int
{
    return ceil(getStudentsAmount() / 12);
}
function Trombinoscope()
{
    $page = 1;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }

    if (!(isset($page) && ctype_digit(strval($page)))) {
        die("Error 404 : The page does not exist");
    }

    if (!($page > 0 && $page <= getPageAmount())) {
        die("Error 404 : The page does not exist");
    }

    $data = [
        'pageAmount' => getPageAmount(),
        'page' => $page,
        'students' => getAllStudents(),
        'studentAmount' => getStudentsAmount(),
        'studentsPage' => getNextStudentsPage($page),
        'page_title' => "Trombinoscope",
        'view' => 'app/view/trombinoscope.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
};
