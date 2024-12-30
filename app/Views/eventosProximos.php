<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>
<br><br>
<section class="seccion-titulo">
    <h1>Eventos Próximos</h1>
</section>
<main class="contenedor-eventos">
    <!-- Tarjeta Educativa -->
    <div class="tarjeta-evento tipo-educativo">
        <div class="encabezado">
            <h2>Conferencia de Innovación Tecnológica</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 25 de marzo de 2024</p>
            <p><strong>Hora:</strong> 10:00 AM</p>
            <p><strong>Lugar:</strong> Auditorio Principal</p>
            <p><strong>Área:</strong> Ingeniería en Sistemas</p>
            <p><strong>Responsable:</strong> Mtro. Juan Pérez López</p>
            <p class="descripcion"><strong>Descripción:</strong> En este evento se abordarán las últimas tendencias en innovación tecnológica, incluyendo inteligencia artificial, desarrollo de software y tecnología en la nube.</p>
        </div>
    </div>
    
    <!-- Tarjeta Deportiva -->
    <div class="tarjeta-evento tipo-deportivo">
        <div class="encabezado">
            <h2>Torneo de Fútbol Interuniversitario</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 15 de abril de 2024</p>
            <p><strong>Hora:</strong> 4:00 PM</p>
            <p><strong>Lugar:</strong> Estadio Universitario</p>
            <p><strong>Responsable:</strong> Comité Deportivo</p>
            <p class="descripcion"><strong>Descripción:</strong> Participa o asiste al torneo interuniversitario de fútbol. Un evento lleno de emoción y deporte.</p>
        </div>
    </div>
    
    <!-- Tarjeta Cultural -->
    <div class="tarjeta-evento tipo-cultural">
        <div class="encabezado">
            <h2>Festival de Arte y Cultura</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 20 de mayo de 2024</p>
            <p><strong>Hora:</strong> 6:00 PM</p>
            <p><strong>Lugar:</strong> Plaza Central</p>
            <p><strong>Responsable:</strong> Dirección de Cultura</p>
            <p class="descripcion"><strong>Descripción:</strong> Disfruta de presentaciones artísticas, música en vivo y exposiciones culturales en un ambiente familiar.</p>
        </div>
    </div>
    
    <!-- Tarjeta Cívica -->
    <div class="tarjeta-evento tipo-civico">
        <div class="encabezado">
            <h2>Ceremonia del Día de la Independencia</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 16 de septiembre de 2024</p>
            <p><strong>Hora:</strong> 8:00 AM</p>
            <p><strong>Lugar:</strong> Zócalo Municipal</p>
            <p><strong>Responsable:</strong> Autoridades Locales</p>
            <p class="descripcion"><strong>Descripción:</strong> Acompáñanos en la ceremonia oficial para conmemorar el Día de la Independencia de México.</p>
        </div>
    </div>

     <!-- Tarjeta Deportiva -->
     <div class="tarjeta-evento tipo-deportivo">
        <div class="encabezado">
            <h2>Torneo de Fútbol Interuniversitario</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 15 de abril de 2024</p>
            <p><strong>Hora:</strong> 4:00 PM</p>
            <p><strong>Lugar:</strong> Estadio Universitario</p>
            <p><strong>Responsable:</strong> Comité Deportivo</p>
            <p class="descripcion"><strong>Descripción:</strong> Participa o asiste al torneo interuniversitario de fútbol. Un evento lleno de emoción y deporte.</p>
        </div>
    </div>

    <!-- Tarjeta Cívica -->
    <div class="tarjeta-evento tipo-civico">
        <div class="encabezado">
            <h2>Ceremonia del Día de la Independencia</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 16 de septiembre de 2024</p>
            <p><strong>Hora:</strong> 8:00 AM</p>
            <p><strong>Lugar:</strong> Zócalo Municipal</p>
            <p><strong>Responsable:</strong> Autoridades Locales</p>
            <p class="descripcion"><strong>Descripción:</strong> Acompáñanos en la ceremonia oficial para conmemorar el Día de la Independencia de México.</p>
        </div>
    </div>

    <!-- Tarjeta Cultural -->
    <div class="tarjeta-evento tipo-cultural">
        <div class="encabezado">
            <h2>Festival de Arte y Cultura</h2>
        </div>
        <div class="contenido">
            <p><strong>Fecha:</strong> 20 de mayo de 2024</p>
            <p><strong>Hora:</strong> 6:00 PM</p>
            <p><strong>Lugar:</strong> Plaza Central</p>
            <p><strong>Responsable:</strong> Dirección de Cultura</p>
            <p class="descripcion"><strong>Descripción:</strong> Disfruta de presentaciones artísticas, música en vivo y exposiciones culturales en un ambiente familiar.</p>
        </div>
    </div>

</main>
<?= $this->endSection(); ?>
