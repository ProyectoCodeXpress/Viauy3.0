document.addEventListener('DOMContentLoaded', function () {
    const asientosContainer = document.getElementById('asientosContainer');
    
    // Obtiene los datos de pasajes desde el controlador
    const datosAsientos =  $datosAsientos ;

    // Itera sobre los datos de pasajes y crea elementos HTML para cada asiento
    datosAsientos.forEach(function (asientoInfo) {
        const asiento = document.createElement('div');
        asiento.classList.add('asiento');
        
        if (asientoInfo.asientos_disponibles) {
            asiento.style.backgroundColor = 'green';
        } else {
            asiento.style.backgroundColor = 'red';
        }
        
        asientosContainer.appendChild(asiento);
    });
});

