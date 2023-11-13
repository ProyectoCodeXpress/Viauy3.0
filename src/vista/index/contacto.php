<?php 
  require 'src/vista/partials/head.php';
?>              
  <!-- <section class="contenido2">
    <section class="white-bar">
      <section class="-container">
        <section class="container">
            <section class="cuadro-contacto">
                <h2>Contacto</h2>
                <p>VIAUY</p>
                <p>Email: viauy@viauy.com</p>
                <p>Teléfono: 123-456-7890</p>
                <a href="https://www.ejemplo.com">www.ViaUY.com</a>

            </section>

    </section>
  </section> -->

 <section class="contenedor-formulario">
    <section class="formulario-contacto">
        <h2>Formulario de Contacto</h2>
        <form action="procesar_formulario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
           
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <br>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje" class="campo-comentario"><br>Comentario o Mensaje:</label>
            <input type="text" id="mensaje" name="mensaje" class="input-comentario" required>

            <button type="submit">Enviar</button>
        </form>
    </section>
</section>

  <?php 
  // require 'src/vista/partials/footer.php';
?>