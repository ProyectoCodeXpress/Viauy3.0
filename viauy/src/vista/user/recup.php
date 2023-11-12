<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViaUY</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/responsive.css">


    <!-- -----Iconos de Google------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
   
    
   <header class="header">
      <div class="menu container">
         <a href="/index.html" class="logo" >ViaUY</a>
         <input type="checkbox"  id="menu" />
         <label for="menu" class="menu-btn">
              <span class="material-symbols-outlined">
                  menu
              </span>
         </label>

         <nav class="navbar">
            <ul>
               <li><a href="/agencias.html">Agencias</a></li>
               <li><a href="/horarios.html">Horarios</a></li>
               <li><a href="/noticias.html">Noticias</a></li>
               <li><a href="/contacto.html">Contacto</a></li>
            </ul>
         </nav>
         <nav class="navbar-movil">
            <ul>
               <li><a href="/agencias.html">Agencias</a></li>
               <li><a href="/horarios.html">Horarios</a></li>
               <li><a href="/noticias.html">Noticias</a></li>
               <li><a href="/contacto.html">Contacto</a></li>
               <li><a href="/login.html">Login</a></li>
            </ul>
         </nav>

          <div class="icons">
              <li><a href="login.html"><span class="material-symbols-outlined">
               account_circle
               </span></i></a></li> 
          </div>

          </div>
          
      </div>
  </header>


    <div class="contenedor">
    <div class="formulario" id="registerForm">
        <h2>Recuperacion</h2>
        <input type="text" placeholder="Correo">
        <input type="password" placeholder="Nueva Contraseña">
        <input type="password" placeholder="Confrimar Nueva Contraseña">
        <button onclick="login()">Cambiar contraseña</button>
        <h1>ㅤㅤㅤㅤㅤㅤㅤㅤ</h1>
        <p>Probar otro metodo de recuperacion</p>
       
    </div>
    </div>


    <footer>
        <p>CodeExpress</p>
    </footer>

    


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/public/js/register.js" ></script>
</body>
</html>