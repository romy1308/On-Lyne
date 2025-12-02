<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Enregistrer dans un fichier texte
        file_put_contents("emails.txt", $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        echo "Merci pour votre inscription !";
    } else {
        echo "Adresse email invalide.";
    }
} else {
    echo "Requête invalide.";
}
?>
