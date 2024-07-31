<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Dinámico PHP</title>
    

    <!-- Agrega enlaces a Bootstrap y otros recursos CSS si los estás utilizando -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega enlaces a tus scripts JavaScript si los necesitas -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace al archivo JavaScript que contiene las funciones -->
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="Estilos.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body id="body">
<div class="titulo">
    <h1 id="titulo">Calculadora <img src="volta.png" alt=""></h1>
   
  </div>
    <div class="container mt-5">
        <form id="f">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card" id="formulario">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="categoria" class="col-sm-4 col-form-label">Categoría</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="categoria" id="categoria" aria-label="Default select example" onchange="cambiarOpciones(); actualizartiempo();">
                                        <option selected>Seleccionar</option>
                                        <option value="Tv y Entretenimiento">Tv y Entretenimiento</option>
                                        <option value="Telefonia e Internet">Telefonia e Internet</option>
                                        <option value="Neveras y Congeladores">Neveras y Congeladores</option>
                                        <option value="Iluminacion">Iluminacion</option>
                                        <option value="Herramientas">Herramientas</option>
                                        <option value="Electrobombas">Electrobombas</option>
                                        <option value="Computacion">Computacion</option>
                                        <option value="Cocina y Hogar">Cocina y Hogar</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="equipo" class="col-sm-4 col-form-label">Equipo</label>
                                <div class="col-sm-6">
                                    <select class="form-select" id="equipo" name="equipo" onchange="actualizarPotencia(); actualizartiempo(); habilitarInput()">
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pico" class="col-sm-4 col-form-label">Potencia Pico</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="pico" id="pico" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="potencia" class="col-sm-4 col-form-label">Potencia (W)</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="potencia" id="potencia" value="potencia">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="cantidad" class="col-sm-4 col-form-label">Cantidad</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" value="1" name="cantidad" id="cantidad">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tiempo" class="col-sm-4 col-form-label">Tiempo de uso (h)</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="tiempo" id="tiempo" min="1" max="24">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <section class="botones">
                                    <div class="separar">
                                    <button type="button" class="boton4" onclick="agregarEquipo()">Agregar</button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                </form>


                <div class="col-sm-6">
      <ol class='list-group list-group' id='lista'>
<li class='list-group-item d-flex justify-content-between align-items-start'>
<div class='ms-2 me-auto'>
  
  <h2 style='color:#ff5e00'>EQUIPOS SELECCIONADOS</h2>
  <table border='0' id='tabla'>
  <thead>
        <tr>
            <th>Equipos Seleccionados</th>
          
        </tr>
    </thead>
    <tbody id="tablaCuerpo">
    </tbody>
  </table> 
            
        </ol>
        


        <div class='card' id='resultado'>
<div class='card-body'>
<h3 class='card-title' id='w'>Potencia Total: <span id="potenciaTotal">0</span></h3>
</div>
</div>

<div class='row'>
<div class='col-sm-12 mb-3 mb-sm-0'>
<div class='card' id='resultadoc'>
<div class='card-body'>
<h3 class='card-title' id='w'>Consumo Total:<span id="consumoTotal">0</span> </h3>

</div>
</div>
<button id="calcular" type="button" class="boton4 ml-5 my-5" data-toggle="modal" data-target="#calcularModal" onclick="calcularSuma()">
        Calcular Precio
    </button>
</div>
</div>

<h1 id="inversor">0</h1>
<div id="resultadoc"></div>


</div>
</div>
</div>

<p class="estilo-frase">Energía Solar a tu alcance</p>
<div class="prt">
    <p id="produccion">0</p>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="calcularModal" tabindex="-1" role="dialog" aria-labelledby="calcularModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calcularModalLabel">Calcular Precio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <h3>  El precio aproximado es: <span id="sumaValores">0</span></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Funcion para calcular la producción basada en el consumo
    function calcularProduccion(consumo) {
        let produccion = 0;

        if (consumo >= 0 && consumo < 350) {
            produccion = 525000;
        } else if (consumo >= 350 && consumo < 750) {
            produccion = 1125000;
        } else if (consumo >= 750 && consumo < 1000) {
            produccion = 1500000;
        } else if (consumo >= 1000 && consumo < 1500) {
            produccion = 2250000;
        } else if (consumo >= 1500 && consumo < 2000) {
            produccion = 3000000;
        } else if (consumo >= 2000 && consumo < 2500) {
            produccion = 3750000;
        } else if (consumo >= 2500 && consumo < 3000) {
            produccion = 4500000;
        } else if (consumo >= 3000 && consumo < 3500) {
            produccion = 5250000;
        } else if (consumo >= 3500 && consumo < 4000) {
            produccion = 6000000;
        } else if (consumo >= 4000 && consumo < 4500) {
            produccion = 6750000;
        } else if (consumo >= 4500 && consumo < 5000) {
            produccion = 7500000;
        } else if (consumo >= 5000 && consumo < 5500) {
            produccion = 8250000;
        } else if (consumo >= 5500 && consumo < 6000) {
            produccion = 9000000;
        } else if (consumo >= 6000 && consumo < 6500) {
            produccion = 9750000;
        } else if (consumo >= 6500 && consumo < 7000) {
            produccion = 10500000;
        } else if (consumo >= 7000 && consumo < 7500) {
            produccion = 11250000;
        } else if (consumo >= 7500 && consumo <= 8000) {
            produccion = 12000000;
        }

        return produccion;
    }
    function calcularSuma() {
    // Obtener los valores de producción e inversor como números enteros
    const produccion = parseInt(document.getElementById('produccion').innerText.replace(/\D/g, ''));
    const inversor = parseInt(document.getElementById('inversor').innerText.replace(/\D/g, ''));

    const suma = produccion + inversor;

    // Mostrar la suma en el modal con separadores de miles
    document.getElementById('sumaValores').innerText = suma.toLocaleString();
}


    // Función para actualizar la producción en la página
    function actualizarProduccion() {
        const consumoTotalElement = document.getElementById('consumoTotal');
        const produccionElement = document.getElementById('produccion');

        const consumoTotal = parseFloat(consumoTotalElement.innerText);

        const produccion = calcularProduccion(consumoTotal);

        produccionElement.innerText = produccion.toLocaleString();
    }

    // Observer to watch for changes in the consumoTotal element
    const consumoTotalElement = document.getElementById('consumoTotal');
    const observer = new MutationObserver(() => {
        actualizarProduccion();
    });

    observer.observe(consumoTotalElement, { childList: true, subtree: true });

    // JavaScript para manejar la eliminación de equipos y actualizar el consumo total
    document.addEventListener('DOMContentLoaded', function() {
        function actualizarConsumoYProduccion() {
            const filas = document.querySelectorAll('#tablaCuerpo tr');

            let nuevoConsumoTotal = 0;

            filas.forEach(fila => {
                const potencia = parseFloat(fila.querySelector('td:nth-child(2)').innerText);
                const tiempo = parseFloat(fila.querySelector('td:nth-child(3)').innerText);
                nuevoConsumoTotal += potencia * tiempo;
            });

            consumoTotalElement.innerText = nuevoConsumoTotal.toFixed(2);
        }

        var botonesEliminar = document.querySelectorAll('.eliminar-equipo');

        botonesEliminar.forEach(function(boton) {
            boton.addEventListener('click', function(event) {
                event.preventDefault();

                var fila = this.closest('tr');
                fila.remove();

                actualizarConsumoYProduccion();
            });
        });

        document.getElementById('calcular').addEventListener('click', calcularSuma);
    });
</script>
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Incluye tus funciones JavaScript aquí o enlázalas como archivos externos según sea necesario
        <?php include 'scripts.js'; ?>
        
        // Llama a la función cambiarOpciones() para que se ejecute al cargar la página
        cambiarOpciones();
    </script>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    const equipoDeseado = ""; // Cambia el equipo aquí

    const textoEquipo = document.getElementById('equipo-dinamico');
    textoEquipo.textContent = equipoDeseado;

    const textoAnimado = document.querySelector('.texto-anima');
    textoAnimado.style.display = 'block';
});



</script>
     <script>
        // JavaScript para manejar la eliminación de equipos y actualizar el consumo total
        document.addEventListener('DOMContentLoaded', function() {
            // Seleccionar todos los botones de eliminar
            var botonesEliminar = document.querySelectorAll('.eliminar-equipo');

            // Agregar un event listener a cada botón
            botonesEliminar.forEach(function(boton) {
                boton.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Obtener la fila a la que pertenece el botón
                    var fila = this.closest('tr');

                    // Obtener la potencia total del equipo a eliminar desde la primera celda de la fila
                    var potenciaTotalEliminarStr = fila.querySelector('td:nth-child(1)').textContent.trim();
                    var potenciaTotalEliminar = parseFloat(potenciaTotalEliminarStr.split(':')[1].trim());

                    // Validar si se pudo convertir a número correctamente
                    if (isNaN(potenciaTotalEliminar)) {
                        alert('Error al obtener la potencia total del equipo.');
                        return;
                    }

                    // Eliminar la fila específica del DOM
                    fila.remove();

                    // Actualizar el Consumo Total sin recargar la página
                    var consumoTotalElemento = document.getElementById('consumoTotal');
                    var consumoTotalActual = parseFloat(consumoTotalElemento.textContent.trim());

                    // Validar si se pudo convertir a número correctamente
                    if (isNaN(consumoTotalActual)) {
                        consumoTotalActual = 0;
                    }

                    var nuevoConsumoTotal = consumoTotalActual - potenciaTotalEliminar;
                    consumoTotalElemento.textContent = nuevoConsumoTotal.toFixed(2); // Mostrar dos decimales
                });
            });
        });
    </script>
</body>
<footer>
        <p>&copy; 2024 Volta. Todos los derechos reservados.</p>
    </footer>
</html>
