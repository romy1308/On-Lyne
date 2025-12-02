<?php
require_once 'app/controller/ajoutbiere.controller.php';

if (!isset($_SESSION['achat'])) {
    $_SESSION['achat'] = [];
}
$id_articles = (int)$id_articles;
$quantite = (int)$quantite;
$id_articles = $_POST['id_articles'];
$quantite = $_POST['quantite'] ;




if (!is_numeric($id_articles) || !is_numeric($quantite) || $quantite < 0) {
    header("Location: index.php?route=achat");
    exit;
}
var_dump('dddd') ; die();


if (isset($_SESSION['achat'][$id_articles])) {
    $_SESSION['achat'][$id_articles] += $quantite;
} else {
    $_SESSION['achat'][$id_articles] = $quantite;
}

var_dump($_SESSION); die();

header("Location: index.php?route=achat");
exit;
?>