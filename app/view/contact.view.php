 <main class="contact">
    <h1>Retrouvez-nous sur les Réseaux Sociaux</h1>

    <section class="social-section">
      <div class="social-box">
        <p>Sur notre compte Instagram</p>
    <a href="https://www.instagram.com/cyb3r_heaven?igsh=OHRkc2x5cDJqa3Zm&utm_source=qr" target="_blank">
      <img src="public/images/instagram.svg" alt="Instagram">
    </a>
        </a>
      </div>

      <div class="social-box">
        <p>Sur notre chaîne YouTube</p>
        <a class="social-youtube" href="https://www.youtube.com/@Cyb3rHeaven" target="_blank">
      <img src="public/images/youtube.svg" alt="Youtube">
    </a>
      </div>
    </section>

    <div class="newsletter">
      <p>Rejoignez notre newsletter pour suivre toutes nos actualités et offres spéciales directement dans votre boîte mail !</p>

      <form id="newsletterForm">
        <input type="email" name="email" id="email" placeholder="Votre Email" required>
        
        <label>
          <input type="checkbox" required>
          J'accepte de recevoir des emails de Cyb3rHeaven.
        </label>

        <button type="submit">S'abonner</button>
        <div id="message"></div>
      </form>

      <div class="contact-info">
        <p>Tél : 01.10.01.10.01</p>
        <p>Mail : <a href="mailto:cyb3rheaven@brasserie.fr" style="color:#00ffff;">cyb3rheaven@brasserie.fr</a></p>
      </div>
    </div>
  </main>

  <script>
    const form = document.getElementById("newsletterForm");
    const message = document.getElementById("message");

    form.addEventListener("submit", function(e) {
      e.preventDefault();
      const email = document.getElementById("email").value;

      if (!email) {
        message.textContent = "Veuillez entrer une adresse email valide.";
        return;
      }

      // Simule une requête POST
      setTimeout(() => {
        message.textContent = "Merci pour votre abonnement à la newsletter ! 🌐";
        form.reset();
      }, 1000);
    });
  </script>

  