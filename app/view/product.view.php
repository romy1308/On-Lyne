
<main> 
    <br></br>
   <h1 class="header__title">Vivez l'expérience unique de Cyb3r Heaven avec nos CYBEERS</h1>
   <br></br>
   
<div class="bieres-container">




    <?php foreach ($articles as $biere): ?>
        <div class="biere-card">
            <a href="?route=fichebiere&id_articles=<?php echo $biere["id_articles"]  ?>">
                <figure class="biere-photo">    
                        <img src="public/images/small/<?php echo $biere['Images'] ?>" alt="photo de <?php echo $biere['Nom']   ?>" />     
                </figure>
                <div class="biere-infos">
                    <p class="biere-nom"><?php echo $biere["Nom"]   ?></p>
                    <p class="biere-prix">Prix : <span><?php echo$biere["Prix"]  ?> €</span></p>

                    <?php if (!empty($biere["type"])): ?>
                        <p class="biere-type">Type : <span><?= htmlspecialchars((string)$biere["type"]) ?></span></p>
                    <?php endif; ?>

                    <p class="biere-desc"><?php  echo$biere["Description"]  ?></p>
                    <a href="index.php?route=fichebiere&id_articles=<?php echo $biere['id_articles'] ?>" class="buy-buttons">Voir le produit</a>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</main>
