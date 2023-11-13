<?php 
  require 'src/vista/partials/head.php';
?>
  <section class="agencias-section">
    <h2>Agencias</h2>
    <section class="agencias">
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia1" name="agencia" value="agencia1">
                <label for="agencia1">Grupo Agencia</label>
            </section>
            <img src="public/images/238932799_4295162133905454_1912954402805537232_n.png" alt="Agencia 1">
            <button class="comprar">Ver</button>
        </section>
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia2" name="agencia" value="agencia2">
                <label for="agencia2">Alonso</label>
            </section>
            <img src="public/images/Alonso.jpg" alt="Agencia 2">
            <button class="comprar">Ver</button>
        </section>
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia3" name="agencia" value="agencia3">
                <label for="agencia3">JOTA ELE</label>
            </section>
            <img src="public/images/jota-ele-logo.jpg" alt="Agencia 3">
            <button class="comprar">Ver</button>
        </section>
        
        

        
        
        <?php 
  require 'src/vista/partials/boton.php';
?>


        <!-- Agrega más agencias según sea necesario -->
    </section>
</section>
<?php 
  require 'src/vista/partials/footer.php';
?>