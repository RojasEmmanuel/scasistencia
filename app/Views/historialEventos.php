<?= $this->extend('layout/template')?>

<?= $this->section('content'); ?>

<div class="contenedorHistorial">

    <div class="title-section">
        <h1>Historial de Eventos</h1>
    </div>
    
    <div class="event-gridUno">
       
        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>

        <div class="cardUno">
            <img src="https://via.placeholder.com/350x180" alt="Imagen de fondo">
            <div class="fechaUno">24/10/2024</div>
            <a href="<?= base_url('/detalles') ?>" class="titleUno">Nombre del Evento</a>
        </div>
        
        
        <!-- Puedes agregar más tarjetas de eventos aquí -->
    </div>
</div>

<?= $this->endSection(); ?>