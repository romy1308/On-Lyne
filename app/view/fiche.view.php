



<main class="trombi">
    <h1>Notre équipe</h1>
    <div class="studentimg">
        <figure class="photo">
            <img src="public/images/big/<?php echo $data["equipe"]["Images"] ?>" alt="photo de <?php echo $data["equipe"]["Prenom"] ?>" />
        </figure>
        <div class="student-infos">
            <p class="name"><?php echo $data["equipe"]["Prenom"] ?> <span><?php echo $data["equipe"]["Nom"] ?></span></p>
            
            <div class="data">
                <p class="birthdate"><?php echo str_replace("-", "/", $data["equipe"]["Age"]) ?></p>
                <p class="group">Groupe <?php echo $data["equipe"]["Groupe"] ?></p>
            </div>
            <p class="desc">
                <?php echo $data["equipe"]["Description"] ?>
            </p>
        </div>
    </div>
</main>