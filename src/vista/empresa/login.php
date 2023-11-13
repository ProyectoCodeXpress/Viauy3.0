
<?php

if (isset($_SESSION['correo_empresa'])) {
  header('Location: /viauy/index.php?c=index&m=admin');
  exit();
}
 
  require 'src/vista/partials/head.php';
?>

<section class="contenedor">
  <p id="data-msg"></p>
    <form class="formulario login-form" id="loginForm">
        <h2>Iniciar Sesión como empresa</h2>
        <input type="text" id="correo_empresa" name="correo_empresa" placeholder="Correo">
        <input type="password" id="contrasena_empresa" name="contrasena_empresa" placeholder="Contraseña">
        <input type="submit" value="entrar">
        
        <h1>ㅤㅤㅤㅤㅤㅤㅤㅤ</h1>
        <li><a href="?c=empresa&m=login"><p>Olvide mi contraseña</p></a></li>
</form>
    
    </section>
<script src="fetch/empresa/login.js"></script>
<?php 
  require 'src/vista/partials/footer.php';
?>