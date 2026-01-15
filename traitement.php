<?php
// traitement.php

// 1. Inclure le fichier de connexion à la base de données
require_once 'connect.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Concours</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="treatment-result">

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Défini le répertoire cible pour les uploads
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($_FILES["photo"]["name"]);
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

    // Récupère les données du formulaire et les nettoie
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validation des données

    // Vérifie si le fichier uploadé est une image
    if (isset($_FILES["photo"]["tmp_name"]) && !empty($_FILES["photo"]["tmp_name"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check === false) {
            echo '<p class="message error">Le fichier n\'est pas une image.</p>';
            $upload_ok = 0;
        }
    } else {
        echo '<p class="message error">Aucun fichier n\'a été sélectionné.</p>';
        $upload_ok = 0;
    }


    // Vérifie si le fichier existe déjà
    if (file_exists($upload_file)) {
        echo '<p class="message error">Désolé, un fichier avec ce nom existe déjà.</p>';
        $upload_ok = 0;
    }

    // Vérifie si le fichier est trop volumineux
    if ($_FILES["photo"]["size"] > 10000000) {
        echo '<p class="message error">Désolé, votre fichier est trop volumineux (max 10Mo).</p>';
        $upload_ok = 0;
    }

    // Vérifie si le format du fichier est autorisé
    if ($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg") {
        echo '<p class="message error">Désolé, seuls les formats JPG, JPEG & PNG sont autorisés.</p>';
        $upload_ok = 0;
    }

    // Traitement si tout est OK

    if ($upload_ok == 0) {
        echo '<p class="message error">Votre fichier n\'a pas été uploadé.</p>';
        echo '<a href="concours.php" class="button-link">Réessayer</a>';

    } else {
        // Déplace le fichier uploadé dans le répertoire ciblé
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_file)) {
            echo '<p class="message success">Le fichier ' . htmlspecialchars(basename($_FILES["photo"]["name"])) . ' a bien été uploadé.</p>';

            // 3. Enregistre les données dans la base de données
            try {
                $sql = "INSERT INTO participations (nom, prenom, email, photo_filename) VALUES (:nom, :prenom, :email, :photo_filename)";
                $stmt = $pdo->prepare($sql);

                // Liaison des paramètres
                $photo_filename = basename($_FILES["photo"]["name"]);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':photo_filename', $photo_filename);

                // Exécution de la requête
                $stmt->execute();

                echo '<p class="message success">Votre participation a bien été enregistrée !</p>';
                echo '<a href="index.html" class="button-link">Retour à l\'accueil</a>';
            } catch (PDOException $e) {
                // Si il y a une erreur de base de données, il est utile de le savoir
                // Dans un environnement de production réel, vous voudriez peut-être vouloir enregistrer cette erreur au lieu de l'afficher
                die('<p class="message error">Erreur lors de l\'enregistrement dans la base de données : ' . $e->getMessage() . '</p><a href="concours.php" class="button-link">Réessayer</a>');
            }
        } else {
            echo '<p class="message error">Désolé, une erreur s\'est produite lors de l\'upload de votre fichier.</p>';
            echo '<a href="concours.php" class="button-link">Réessayer</a>';
        }
    }
} else {
    // Si ce n'est pas une requête POST, redirige vers le formulaire
    header("Location: concours.php");
    exit();
}
?>
</div>
</body>
</html>