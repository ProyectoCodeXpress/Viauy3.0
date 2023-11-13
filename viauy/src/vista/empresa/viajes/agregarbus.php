<!-- Formulario para insertar un nuevo bus -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" required>

        <label for="bano">Baño:</label>
        <select name="bano" required>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <label for="wifi">Wifi:</label>
        <select name="wifi" required>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <label for="aire">Aire acondicionado:</label>
        <select name="aire" required>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <label for="cant_asientos">Cantidad de asientos:</label>
        <input type="number" name="cant_asientos" required>

        <label for="rut">RUT de la empresa:</label>
        <input type="text" name="rut" required>

        <button type="submit">Guardar Bus</button>
    </form>
</body>
<script src="fetch/empresa/login.js"></script>
</html>