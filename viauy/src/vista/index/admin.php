<?php 



  require 'src/vista/partials/headerAD.php';
?>
  <link rel="stylesheet" href="public/css/admin.css">
<section class="dashboard-container">
  <section class="admin-img">
  <img src="public/images/admin.png" alt="Imagen de fondo">
  <H2>ADMINISTRADOR</H2>
  </section>

    
    <section class="botones-container">
        <a href="?c=admin&m=alta" class="boton">Alta de Datos</a>
        <a href="?c=admin&m=baja" class="boton">Baja de Datos</a>
        <a href="?c=admin&m=modificacion" class="boton">Modificación de Datos</a>
    </section>
</section>
   
<?php 
  require 'src/vista/partials/footer.php';
?>

