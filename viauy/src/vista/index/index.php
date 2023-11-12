<?php 
  require 'src/vista/partials/head.php';
?>

<section class="header-txt">
<section class="contenedor">
    <section class="formulario" id="compraPasajeForm">
        <h2>BUSES</h2>
        <label for="tipoPasaje">Seleccione tipo de pasaje:</label>
        <select id="tipoPasaje">
            <option value="ida">Ida</option>
            <option value="vuelta">Ida y Vuelta</option>
        </select>
        <br>
                                                                         
        <label for="origen">Origen:</label>                                             
        <select id="origen" name="origen" placeholder="Seleccione Origen">
            <option value="">Artigas</option>
            <option value="">Canelones</option>
            <option value="">Cerro Largo</option>
            <option value="">Colonia</option>
            <option value="">Durazno</option>
            <option value="">Flores</option>
            <option value="">Florida</option>
            <option value="">Lavalleja</option>
            <option value="">Maldonado</option>
            <option value="">Montevideo</option>
            <option value="">Paysandú</option>
            <option value="">Río Negro</option>
            <option value="">Rivera</option>
            <option value="">Rocha</option>
            <option value="">Salto</option>
            <option value="">San José</option>
            <option value="">Soriano</option>
            <option value="">Tacuarembó</option>
            <option value="">Treinta y Tres</option>
            
        </select>
        <label for="destino">Destino:</label>
        <select id="destino" name="destino" placeholder="Seleccione Destino">
            <option value="">Artigas</option>
            <option value="">Canelones</option>
            <option value="">Cerro Largo</option>
            <option value="">Colonia</option>
            <option value="">Durazno</option>
            <option value="">Flores</option>
            <option value="">Florida</option>
            <option value="">Lavalleja</option>
            <option value="">Maldonado</option>
            <option value="">Montevideo</option>
            <option value="">Paysandú</option>
            <option value="">Río Negro</option>
            <option value="">Rivera</option>
            <option value="">Rocha</option>
            <option value="">Salto</option>
            <option value="">San José</option>
            <option value="">Soriano</option>
            <option value="">Tacuarembó</option>
            <option value="">Treinta y Tres</option>
        </select>
         <br>
         <label for="fechaIda">Fecha de Ida:</label>
<input type="date" id="fecha_ida" name="fecha_inicio" min="<?php echo date('Y-m-d'); ?>">

        <label for="fechaVuelta">Fecha de Vuelta:</label>
        <input type="date" id="fecha_vuelta" name="fecha_inicio" min="<?php echo date('Y-m-d'); ?>">
        <label for="nro_asiento">Seleccione cantidad de asientos:</label>
        <select id="nro_asiento" name="nro_asiento">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3+">+3</option>
        </select>
        <button onclick="comprarPasaje()">Buscar Omnibus</button>

    </section>
</section>

</section>




<?php 
  require 'src/vista/partials/footer.php';
?>