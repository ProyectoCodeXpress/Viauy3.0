<?php 
  require 'src/vista/partials/head.php';
?>

<div class="contenedor">
    <div class="formulario" id="loginForm">
        <h2>Iniciar Sesión</h2>
        <input type="text" placeholder="Usuario">
        <input type="password" placeholder="Contraseña">
        <button onclick="login()">Iniciar Sesión</button>
        <h1>ㅤㅤㅤㅤㅤㅤㅤㅤ</h1>
        <li><a href="/register.html"><p>¿No tienes una cuenta? Regístrate aquí.</p></a></li>
        <li><a href="/recup.html"><p>Olvide mi contraseña</p></a></li>
    </div>
    
    </div>

<?php 
  require 'src/vista/partials/footer.php';
?>