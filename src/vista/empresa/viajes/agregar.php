<h2>Formulario de Viaje</h2>
    <form id="formViaje">
        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen" required>

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required>

        <label for="demora">Demora (HH:MM:SS):</label>
        <input type="time" id="demora" name="demora" required>

        <label for="nro_linea">Número de Línea:</label>
        <input type="number" id="nro_linea" name="nro_linea" required>

        <label for="rut">RUT de la Empresa:</label>
        <input type="number" id="rut" name="rut" required>

        <button type="submit">Agregar Viaje</button>
    </form>