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
        <button><a href="?c=&m=" class="boton">Alta de Datos</a></button>
        <a href="?c=admin&m=baja" class="boton">Baja de Datos</a>
        <a href="?c=admin&m=modificacion" class="boton">Modificación de Datos</a>
    </section>
</section>
   
<?php 
  require 'src/vista/partials/footer.php';
?>

