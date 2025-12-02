<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" href="public/images/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/view/common/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Cyb3rHeaven</title>
</head>








<body>
 <header>
  <button class="menu-toggle">☰</button>

 <nav>
  <ul>
     
    <li><a href="index.php?route=home"><img src="public/images/logo.png" alt="Accueil" /></a></li>
    <li><a href="index.php?route=produit" data-text="PRODUITS">Produits</a></li>
    <li><a href="index.php?route=trombinoscope" data-text="À PROPOS">À propos</a></li>
    <li><a href="index.php?route=brassage" data-text="BRASSAGE">Brassage</a></li>
    <li><a href="index.php?route=contact" data-text="NOUS CONTACTER">Nous contacter</a></li>
    <li><a href="index.php?route=achat" ><img src="public/images/panier.png"class="logopanier"/></a></li>
    <li><a class="btn-login" href="index.php?route=compte"><img src="public/images/logocompte.png" class="logocompte" /></a></li>
  </ul>
</nav>



  <!-- Mobile Menu -->
    <div class="mobile-menu">
      <button class="close-mobile">✖</button>
       <a href="index.php?route=home"><img src="public/images/small/Render.gif" alt="Logo" class="h" /></a>
       
    <a href="index.php?route=produit" class="produitlien">Produits</a>
    <a href="index.php?route=trombinoscope">À propos</a>
    <a href="index.php?route=brassage">Brassage</a>
    <a href="index.php?route=contact">Nous contacter</a>
    <a href="index.php?route=achat">Achat</a>
    <a href="index.php?route=compte" class="btn-login">Compte</a>
  </div>
</header>







<script>
  const toggleBtn = document.querySelector('.menu-toggle');
  const navList = document.querySelector('nav ul');
  const mobileMenu = document.querySelector('.mobile-menu');
  const closeBtn = document.querySelector('.close-mobile');

  toggleBtn.addEventListener('click', () => {
    navList.style.display = 'none';
    mobileMenu.style.display = 'flex';
  });

  closeBtn.addEventListener('click', () => {
    navList.style.display = 'flex';
    mobileMenu.style.display = 'none';
  });
</script>
</body>
</html>









  <div class="menu-toggle menu-toggle--open">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="menu-close">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>




  
  <pmx-group id="pmx-home"></pmx-group>
  <div class="header__content">
        <div class="header__inner">
      <div class="header__bottom">
 


