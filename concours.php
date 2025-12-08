<?php
// On récupère l'IP du visiteur et on la stocke dans un cookie. C'est pour les stats de visite.
$ip = $_SERVER['REMOTE_ADDR'];
$cookievalue = $ip;
setcookie('user_ip', $cookievalue, time() + (86400 * 30), "/"); // 86400 = 1 jour

// concours.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Concours photo – Espace naturel de la Motte</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <a href="index.html">← Retour à l'accueil</a>

    <h1>Concours Photo – Espace naturel de la Motte</h1>

    <div class="rules">
        <h2>Règles du concours</h2>
        <p>
            Pour célébrer les paysages et les instants furtifs de l’Espace naturel de la Motte,
            ce concours invite chaque visiteur à partager une photo prise sur place.
            Voici les règles essentielles :
        </p>
        <ul>
            <li>✔ La photo doit être prise dans ou autour de l’Espace naturel de la Motte.</li>
            <li>✔ Une participation par personne.</li>
            <li>✔ Les images doivent être libres de droits et appartenir au participant.</li>
            <li>✔ Taille maximale du fichier : 10 Mo.</li>
            <li>✔ Formats acceptés : JPG, PNG.</li>
            <li>✔ Toute participation incomplète sera ignorée par le jury (très sympas, mais stricts).</li>
        </ul>
        <p>
            Les photos sélectionnées seront affichées lors de l’événement final et valorisées dans une
            petite exposition en plein air.
        </p>
    </div>

    <form action="traitement.php" method="POST" enctype="multipart/form-data">
        <h2>Participer au concours</h2>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required>

        <label for="photo">Votre photo :</label>
        <input type="file" id="photo" name="photo" accept="image/jpeg, image/png" required>

        <button type="submit">Envoyer la participation</button>
    </form>

</body>

</html>