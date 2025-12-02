
   
   <div class="login-container">
    <h2>Connexion à la matrice</h2>
    <form id="loginForm">
        <div class="form-group1">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group2">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-access">Valider l'identité</button>
        </div>
        <div id="error-message" class="error-message"></div>
    </form>
</div>
  



 <script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

   if (username === 'aimemihi' && password === 'mmi') {
    alert('Système contourné avec succès ! Bienvenue dans la matrice, agent V.');
} else {
    // Redirige vers la page "hacked"
    window.location.href = "index.php?route=hacked";
}});
</script>


<div class="SpeedLineArea"></div>

<script>
function InitSpeedLine(){
  var tHTML=``;
  var width = window.innerWidth;
  var height = window.innerHeight;
  for(var i=0; i<100; i++){
    var dx = Math.random() * width;     // position x aléatoire plein écran
    var dy = Math.random() * height;    // position y aléatoire plein écran
    var dz = (Math.random()-0.5)*0;
    var dt = Math.random()*5;
    var dangle = Math.random()*360;     // angle rotation en degrés
    var rc = `hsl(${Math.random()*360}deg,100%,50%)`;
    tHTML += `<div class="SpeedLineChange" style="animation-delay:${-dt}s; left:${dx}px; top:${dy}px;">
      <div class="SpeedLine" style="transform:
      rotateZ(${dangle}deg) rotateY(90deg);background:${rc}"></div>
    </div>`;
  }
  document.querySelector(".SpeedLineArea").innerHTML = tHTML;
}

InitSpeedLine();
</script>





</body>
</html>




