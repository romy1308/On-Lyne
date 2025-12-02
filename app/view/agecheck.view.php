<head>
  <link rel="stylesheet" href="public/css/agecheck.css">
</head>

<main>
  <div class="verif">
    <div class="container">
      <div class="card">
        <img src="public/images/logo.png" alt="logo" class="logo">
        <h1 class="titre">ATTENTION : Individu suspect détecté.</h1>
          <h1>La matrice Cyb3r Heaven est réservée aux unités matures (18+).
            <h1>Veuillez confirmer votre âge.</h1>
          </h1>
          <h1></h1>
        <div class="buttons">
          <button onclick="validerAge(true)">18 +</button>
          <button onclick="validerAge(false)">18 -</button>
        </div>
        <p id="message-erreur"></p>
        <small>En cliquant sur “OUI”, vous confirmez que vous êtes majeur et acceptez nos conditions d'utilisation et notre politique de confidentialité.</small>
      </div>
    </div>

    <script>
      function validerAge(Majeur) {
        if (Majeur) {
          window.location.href = "index.php?route=home"; 
        } else {
          document.getElementById("message-erreur").innerText = "ALERTE INTRUSION SUSPECTE : AUTO-DESTRUCTION IMMINENTE.";
          document.getElementById("message-erreur").style.color = "red";
        }
      }
    </script>
  </div>



</main>



<style>


  /*code pour le fond d'ecran matrix*/


  canvas#matrix {
    position: fixed;
    top: 0;
    left: 0;
    display: block;
    width: 100vw;
    height: 100vh;
    z-index: 0;
    background: black;
  }

  /* Content container above canvas */
  #content {
    position: relative;
    z-index: 1;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none; /* disable pointer events if you want clicks to go through */
    user-select: none;
  }

  /* Example text styling */
  #content h1 {
    font-size: 2rem;
    text-align: center;
    pointer-events: auto; /* enable interaction if needed */
  }
</style>
</head>
<body>

<canvas id="matrix"></canvas>


<script>
const canvas = document.getElementById('matrix');
const ctx = canvas.getContext('2d');

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
resizeCanvas();

const fontSize = 14;
let columns = Math.floor(canvas.width / fontSize);

const drops = [];
const positions = [];
const velocities = [];

let mouseX = null;
let mouseY = null;
const mouseRadius = 150;
let mouseVelX = 0;
let mouseVelY = 0;

for(let x = 0; x < columns; x++) {
    drops[x] = Math.floor(Math.random() * canvas.height / fontSize) * -1;
    positions[x] = x * fontSize;
    velocities[x] = { x: 0, y: 0 };
}

const matrix = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%+-/~{[|`]}";

let lastTime = 0;
const FPS = 60;
const frameTime = 1000 / FPS;

canvas.addEventListener('mousemove', (e) => {
    const rect = canvas.getBoundingClientRect();
    if (e.clientX >= rect.left && e.clientX <= rect.right &&
        e.clientY >= rect.top && e.clientY <= rect.bottom) {
        mouseVelX = e.clientX - (mouseX || e.clientX);
        mouseVelY = e.clientY - (mouseY || e.clientY);
        mouseX = e.clientX;
        mouseY = e.clientY;
    }
});

canvas.addEventListener('mouseleave', () => {
    mouseX = null;
    mouseY = null;
    mouseVelX = 0;
    mouseVelY = 0;
});

function draw(currentTime) {
    if (currentTime - lastTime < frameTime) {
        requestAnimationFrame(draw);
        return;
    }

    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = fontSize + 'px monospace';

    for(let i = 0; i < drops.length; i++) {
        const originalX = i * fontSize;
        let x = positions[i];
        const y = drops[i] * fontSize;

        if (mouseX !== null && mouseY !== null) {
            const dx = x - mouseX;
            const dy = y - mouseY;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < mouseRadius) {
                const angle = Math.atan2(dy, dx);
                const force = Math.pow((mouseRadius - distance) / mouseRadius, 2) * 2;

                const repelX = Math.cos(angle) * force * 25;
                const repelY = Math.sin(angle) * force * 25;

                velocities[i].x += repelX + mouseVelX * force * 0.2;
                velocities[i].y += repelY + mouseVelY * force * 0.2;

                velocities[i].x += (Math.random() - 0.5) * force * 10;
                velocities[i].y += (Math.random() - 0.5) * force * 10;
            }
        }

        positions[i] += velocities[i].x;
        drops[i] += velocities[i].y / fontSize;

        velocities[i].x *= 0.95;
        velocities[i].y *= 0.95;

        positions[i] += (originalX - positions[i]) * 0.05;

        const text = matrix[Math.floor(Math.random() * matrix.length)];

        if (drops[i] * fontSize > 0) {
            ctx.fillStyle = '#0F0';
            ctx.fillText(text, positions[i], y);

            ctx.fillStyle = '#040';
            for(let j = 1; j < 10; j++) {
                const trailChar = matrix[Math.floor(Math.random() * matrix.length)];
                ctx.fillText(trailChar, positions[i], y - j * fontSize);
            }
        }

        drops[i]++;

        if(drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
            velocities[i].y = 0;
        }

        if (positions[i] < 0) positions[i] = 0;
        if (positions[i] > canvas.width) positions[i] = canvas.width;
    }

    lastTime = currentTime;
    requestAnimationFrame(draw);
}

window.addEventListener('resize', () => {
    resizeCanvas();
    columns = Math.floor(canvas.width / fontSize);
    for(let x = 0; x < columns; x++) {
        if (!drops[x]) {
            drops[x] = Math.floor(Math.random() * canvas.height / fontSize) * -1;
            positions[x] = x * fontSize;
            velocities[x] = { x: 0, y: 0 };
        }
    }
});

requestAnimationFrame(draw);
</script>

</body>
</html>

/*credits*/
/* Nous tenons à préciser que nous avons repris ce code sur le site codepen.io intitulé Interactive Matrix Rain par Puneet Techartist*/