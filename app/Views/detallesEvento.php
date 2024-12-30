<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>

<div class="contenidoPagina">

<h2 class="NombreEvento">INICIO DE CLASES</h2>
    <p class="fechaEvento">26 de Agosto del 2024</p>
    <p class="lugar">Explanada del Instituto 📌</p>
    
    <br>    
    <div class="descripcionEvento">
        <p><b>Descripción</b></p>
        <p>En este evento se abordarán las últimas tendencias en innovación tecnológica, incluyendo inteligencia artificial, desarrollo de software y tecnología en la nube. Ideal para estudiantes, académicos y profesionales interesados en el futuro de la tecnología.</p>
    </div>


   
    <div class="estadisticas" style="display: flex; align-items: center; justify-content: center; width: 90%;">

        <table class="datosEstadisticos">
            <caption><b>Estadisticas</b></caption>
            <tr>
                <td>Total de Estudiantes</td>
                <td>560</td>
            </tr>
            <tr>
                <td>Total de Estudiantes Hombres</td>
                <td>340</td>
            </tr>
            <tr>
                <td>Total de Estudiantes Mujeres</td>
                <td>220</td>
            </tr>
            
            <tr>
                <td>Total de Docentes</td>
                <td>18</td>
            </tr>
            <tr>
                <td>Porcentaje de Asistencia (según la matrícula)</td>
                <td>70%</td>
            </tr>
        </table>
    </div>
    

    <br><br><h3 class="titulo">Asistencia</h3>
    <h3 class="subtitulo" style="text-align: center;">Ordenar</h3> <br>
    <div class="botonesCentro">

        <!-- Campo de búsqueda -->
        <div class="busquedaCentro">
            <input type="text" id="buscarNControl" placeholder="Buscar por nombre 🔎">
        </div>


        <div class="btnOrdenar">
            <button class="btn1">N. Control</button>
            <button class="btn1">Nombre</button>
            <button class="btn1">Carrera</button>
            <button class="btn1">Semestre</button>
            <button class="btn1">Sexo</button>
        </div>
    
        <div class="exportarFiltrar">
            <button class="btn1">Exportar</button>
            <button class="btn1">Filtrar</button>
        </div>
    </div>
    
    <div class="tablaAsistencia">
        <table class="asistencia">
            <tr>
                <th>N. Control</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Sexo</th>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>

            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            <tr>
                <td>211160104</td>
                <td>Emmanuel Eliseo Rojas Hernández</td>
                <td>Ingeniería en Sistemas Computacionales</td>
                <td>7</td>
                <td>Hombre</td>
            </tr>
            
        </table>
    </div>

    
    
    <br><br>
    <h3 class="subtitulo">Galería de fotos</h3><br>
    <div class="galeria">
        <div class="imagen-con-descripcion">
            <img src="1 (1).jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Emmanuel Eliseo Rojas Hdz</span>
            </div>
        </div>
        <div class="imagen-con-descripcion">
            <img src="2.jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Ing. Miguel Morgan Matus</span>
            </div>
        </div>
        <div class="imagen-con-descripcion">
            <img src="3.jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Emmanuel Eliseo Rojas Hdz</span>
            </div>
        </div>
        <div class="imagen-con-descripcion">
            <img src="4.jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Ing. Miguel Morgan Matus</span>
            </div>
        </div>
        <div class="imagen-con-descripcion">
            <img src="3.jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Emmanuel Eliseo Rojas Hdz</span>
            </div>
        </div>
        <div class="imagen-con-descripcion">
            <img src="4.jpg" alt="Imagen 1" onclick="abrirLightbox(this)">
            <div class="descripcion">
                <span>Autor: Ing. Miguel Morgan Matus</span>
            </div>
        </div>
        <!-- Agrega más imágenes según lo necesites -->
    </div>
    
    <div id="lightbox" class="lightbox">
        <span class="cerrar" onclick="cerrarLightbox()">&times;</span>
        <img class="lightbox-img" id="imagenLightbox">
    </div>


</div>


<script>
    function abrirLightbox(img) {
        var lightbox = document.getElementById("lightbox");
        var imagenLightbox = document.getElementById("imagenLightbox");
        imagenLightbox.src = img.src; // Cambiar la fuente de la imagen del lightbox
        lightbox.style.display = "flex"; // Mostrar el lightbox
    }

    function cerrarLightbox() {
        var lightbox = document.getElementById("lightbox");
        lightbox.style.display = "none"; // Ocultar el lightbox
    }
</script>

<?= $this->endSection(); ?>
