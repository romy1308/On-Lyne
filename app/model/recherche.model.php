<?php

require_once 'app/model/model.php';
function getSearchedStudents(string $search)
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM equipe WHERE Prenom LIKE :search OR Nom LIKE :search");
    $stmt->bindParam(':search', $search, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
}
