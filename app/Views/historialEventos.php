<?= $this->extend('layout/template')?>

<?= $this->section('content'); ?>

<div class="contenedorHistorial">

    <div class="title-section">
        <h1>Historial de Eventos</h1>
    </div>
    
    <div class="event-gridUno">
        <?php
            // Mapeo de tipos de eventos a sus respectivas imágenes
            $tipoImagenes = [
                "Cívico" => "civico.png",
                "Cultural" => "Cultural.png",
                "Deportivo" => "Deportivo.png",
                "Académico" => "Academico.png"
            ];

            foreach($historial as $history):
                $imagen = isset($tipoImagenes[$history->tipo]) ? $tipoImagenes[$history->tipo] : 'default.png';
        ?>
            <div class="cardUno">
                <img src="<?= base_url('/' . $imagen) ?>" width="150" height="80" alt="Imagen de fondo">
                <div class="fechaUno"> <?= esc($history->fecha); ?> </div>
                <a href="<?= base_url('/detalles') ?>" class="titleUno"><?= esc($history->nombre); ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>