<?php
// concours.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Concours photo – Espace naturel de la Motte</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 40px;
            line-height: 1.6;
        }

        h1 {
            color: #2e6f3e;
        }

        h2 {
            margin-top: 40px;
            color: #245a32;
        }

        .rules {
            background: #ffffff;
            border-left: 4px solid #2e6f3e;
            padding: 20px;
            border-radius: 6px;
            max-width: 700px;
            margin-bottom: 40px;
        }

        form {
            background: #ffffff;
            padding: 25px;
            border-radius: 6px;
            max-width: 700px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #2e6f3e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #245a32;
        }

        a {
            color: #2e6f3e;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
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