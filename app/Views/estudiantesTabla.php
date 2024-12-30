<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>

<div class="contenidoPagina">

    <?php if (session()->has('message')): ?>
        <div class="alert alert-success">
            <?= session('message') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>
    <h3 class="titulo">Estudiantes Inscritos en el Periodo</h3>
    <div class="datosEstadisticos">
        <table>
            <caption><b>Estadísticas tabla</b></caption>    <br>
            <tr>
                <td>Total de Estudiantes:</td><td id="totalEstudiantes"></td>
            </tr>
            <tr>
                <td>Total de Estudiantes hombres:</td><td id="totalHombres"></td>
            </tr>
            <tr>
                <td>Total de Estudiantes mujeres:</td><td id="totalMujeres"></td>
            </tr>
        </table>
    </div>
    
    <h3 class="subtitulo" style="text-align: center;">Ordenar</h3> <br>
    <div class="botonesCentro">
         <!-- Campo de búsqueda -->
         <div class="busquedaCentro">
            <input type="number" id="buscarNControl" placeholder="Buscar por N. Control 🔎">
        </div>

        <div class="btnOrdenar">
            <button class="btn1" id="ordenarNControl">N. Control</button>
            <button class="btn1" id="ordenarNombre">Nombre</button>
            <button class="btn1" id="ordenarCarrera">Carrera</button>
            <button class="btn1" id="ordenarSemestre">Semestre</button>
            <button class="btn1" id="ordenarSexo">Sexo</button>
        </div>

        <div class="exportarFiltrar">
            <button class="btn1">Exportar</button>
            <button class="btn1"  id="filtroBtn4">Filtrar Tabla</button>
        </div>
    </div>


    <div class="tablaEstudiantesDocentes">
        <table class="estudiantes">
            <tr>
                <th>N. Control</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Sexo</th>
            </tr>
            <?php foreach ($estudiantes as $estudiante): ?>
            <tr>
                <td><?php echo $estudiante->nroControl ?></td>
                <td><?php echo mb_convert_case(mb_strtolower($estudiante->nombre, 'UTF-8'), MB_CASE_TITLE, 'UTF-8'); ?></td>
                <td><?php 
                    switch ($estudiante->carrera) {
                        case "IC":
                            echo "Ingeniería Civil";
                            break;
                        case "ISC":
                            echo "Ingeniería en Sistemas Computacionales";
                            break;
                        case "IGE":
                            echo "Ingeniería en Gestión Empresarial";
                            break;
                        case "IEME":
                            echo "Ingeniería Electromecánica";
                            break;
                        case "IIAL":
                            echo "Ingeniería en Industrias Alimentarias";
                            break;

                        case "LAMD":
                            echo "Licenciatura en Administración de Empresas";
                            break;
                        // Otros casos...
                    }
                ?></td>
                <td><?php echo $estudiante->semestre ?></td>
                <td><?php if($estudiante->sexo == 'M'){echo "Masculino";}else {echo "Femenino";}?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- Modal para filtrar la tabla -->
<div id="filtrarModal4" class="modal4" style="display: none;">
    <div class="modal-content4">
        <span class="close4">&times;</span>
        <h2>Filtrar Estudiantes</h2>
        <form id="filtrarForm4">
            <label for="carrera4">Carrera:</label>
            <select id="carrera4" name="carrera">
                <option value="">Todas</option>
                <option value="Ingeniería Civil">Ingeniería Civil</option>
                <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
                <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
                <option value="Ingeniería Electromecánica">Ingeniería Electromecánica</option>
                <option value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
                <option value="Licenciatura en Administración de Empresas">Licenciatura en Administración de Empresas</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
            <label for="semestre4">Semestre:</label>
            <input type="number" id="semestre4" name="semestre" min="1" max="16">
            <label for="sexo4">Sexo:</label>
            <select id="sexo4" name="sexo">
                <option value="">Todos</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <button type="button" id="aplicarFiltro4">Aplicar Filtro</button>
        </form>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const table = document.querySelector('.tablaEstudiantesDocentes table');
    const rows = Array.from(table.querySelectorAll('tr')).slice(1); // Excluir la fila de encabezado

    function sortTable(columnIndex, isNumeric = false) {
        const sortedRows = rows.sort((a, b) => {
            const aText = a.cells[columnIndex].textContent.trim();
            const bText = b.cells[columnIndex].textContent.trim();

            if (isNumeric) {
                return parseFloat(aText) - parseFloat(bText);
            } else {
                return aText.localeCompare(bText, 'es', { sensitivity: 'base' });
            }
        });

        // Reinsertar las filas ordenadas en la tabla
        sortedRows.forEach(row => table.appendChild(row));
    }
    document.getElementById('ordenarNControl').addEventListener('click', () => sortTable(0));
    document.getElementById('ordenarNombre').addEventListener('click', () => sortTable(1));
    document.getElementById('ordenarCarrera').addEventListener('click', () => sortTable(2));
    document.getElementById('ordenarSemestre').addEventListener('click', () => sortTable(3, true));
    document.getElementById('ordenarSexo').addEventListener('click', () => sortTable(4));

    // Modal de filtro
    const filtroModal4 = document.getElementById('filtrarModal4');
    const filtroCarrera4 = document.getElementById('carrera4');
    const filtroSemestre4 = document.getElementById('semestre4');
    const filtroSexo4 = document.getElementById('sexo4');
    const aplicarFiltro4 = document.getElementById('aplicarFiltro4');
    const closeModal4 = document.querySelector('.close4');

    document.getElementById('filtroBtn4').addEventListener('click', function() {
        filtroModal4.style.display = 'block';
    });

    closeModal4.addEventListener('click', function() {
        filtroModal4.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == filtroModal4) {
            filtroModal4.style.display = 'none';
        }
    });

    aplicarFiltro4.addEventListener('click', function() {
        const carreraFiltro = filtroCarrera4.value.toLowerCase();
        const semestreFiltro = filtroSemestre4.value;
        const sexoFiltro = filtroSexo4.value;

        rows.forEach(row => {
            const carrera = row.cells[2].textContent.toLowerCase();
            const semestre = row.cells[3].textContent;
            const sexo = row.cells[4].textContent;

            if ((carrera.includes(carreraFiltro) || carreraFiltro === '') &&
                (semestre === semestreFiltro || semestreFiltro === '') &&
                (sexo === sexoFiltro || sexoFiltro === '')) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        filtroModal4.style.display = 'none';
        actualizarEstadisticas(); // Actualizar estadísticas después de aplicar el filtro
    });

    // Actualizar estadísticas
    function actualizarEstadisticas() {
        const visibleRows = rows.filter(row => row.style.display !== 'none');
        const totalEstudiantes = visibleRows.length;
        const totalHombres = visibleRows.filter(row => row.cells[4].textContent.trim() === 'Masculino').length;
        const totalMujeres = visibleRows.filter(row => row.cells[4].textContent.trim() === 'Femenino').length;

        document.getElementById('totalEstudiantes').textContent = totalEstudiantes;
        document.getElementById('totalHombres').textContent = totalHombres;
        document.getElementById('totalMujeres').textContent = totalMujeres;
    }

    // Llamar a la función para actualizar las estadísticas al cargar la página
    actualizarEstadisticas();

    // Buscar por N. Control
    document.getElementById('buscarNControl').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        rows.forEach(row => {
            const nControl = row.cells[0].textContent.toLowerCase();
            if (nControl.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        actualizarEstadisticas();
    });
});
</script>
<?= $this->endSection(); ?>