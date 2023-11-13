<?php 
  require 'src/vista/partials/head.php';
?>
    <!-- <section class="selector">
        <h2>Selecciona tu destino:</h2>
        <select id="destinos">
            <option value="lp">Las Piedras</option>
            <option value="vc">Villa carton</option>
            <option value="lapaz">La Paz</option>
        </select>
        <a href="/compra/login.html" class="comprar">Comprar</a>

    </section> -->
    <section class="agencias-section">
    <h2>Destinos</h2>
    <section class="agencias">
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia1" name="agencia" value="agencia1">
                <label for="agencia1">Salto</label>
            </section>
            <img src="public/images/salto.jpg" alt="Agencia 1">
            <button class="comprar">Ver</button>
        </section>
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia2" name="agencia" value="agencia2">
                <label for="agencia2">Colonia</label>
            </section>
            <img src="public/images/colonia.jpg" alt="Agencia 2">
            <button class="comprar">Ver</button>
        </section>
        <section class="agencia">
            <section class="info">
                <input type="radio" id="agencia3" name="agencia" value="agencia3">
                <label for="agencia3">Punta del Este</label>
            </section>
            <img src="public/images/punta.jpg" alt="Agencia 3">
            <button class="comprar">Ver</button>
        </section>

  
       
    <?php 
  require 'src/vista/partials/footer.php';
?>