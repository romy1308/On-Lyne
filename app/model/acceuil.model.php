<?php

function getAllProducts(): array {

    $pdo = getDatabaseConnexion();
    $sql = 'SELECT * FROM articles';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getProductspe(int $id): array {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM articles WHERE id_articles=:id_articles";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_articles', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
