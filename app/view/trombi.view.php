<main class="trombi">
  <h1>Notre équipe</h1>
  <form class="formrecherche">
    <input  type="hidden" name="route" value="search" />
    <input class="boxrecherche"
      type="text"
      name="search"
      id="search"
      class="search"
      placeholder="Nom ou Prénom" />
    <input class="recherche" type="submit" value="Rechercher" name="submit" />
  </form>
  <div class="line-decoration" aria-hidden="true">
    <div class="line" id="line1"></div>
    <div class="line" id="line2"></div>
  </div>
  <div class="trombi-decoration" aria-hidden="true">
    <img src="public/images/dots.svg" id="dots1" alt="" />
    <img src="public/images/dots.svg" id="dots2" alt="" />
  </div>
  <div class="student-cards">
    <?php foreach ($equipe as $student): ?>
      <div class="student-card">
        
          <figure class="photo">
            <img src="public/images/small/<?php echo $student['Images'] ?>" alt="photo de <?php echo $student['Prenom']; ?>" />
          </figure>
          <div class="card-infos">
            <p class="name"><?php echo $student["Prenom"] ?> <span><?php echo $student["Nom"] ?></span></p>
            <p class="birthdate"><?php echo str_replace("-", "/", $student["Age"]) ?></p>
            <p class="group">groupe <span><?php echo $student["Groupe"] ?></span></p>
            <p class="role"><span><?php echo $student["Role"]?></span>
            
          </div>
        </a>
      </div>
        <?php endforeach ?>
      
    
  </main>