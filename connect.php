<?php
// connect.php

// Détails de connexion à la base de données pour l'environnement local Laragon
$host = 'localhost';
$dbname = 'on_lyne';
$username = 'root';
$password = ''; // Le mot de passe par défaut pour Laragon est vide.

try {
    // Créer une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Définir le mode d'erreur PDO sur exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si la connexion échoue, arrêter le script et afficher un message d'erreur
    die("ERREUR: Impossible de se connecter. " . $e->getMessage());
}
