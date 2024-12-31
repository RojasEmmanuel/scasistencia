<?= $this->extend('layout/template') ?>
<?= $this->section('content'); ?>
<br><br>
<section class="seccion-titulo">
    <h1>Eventos Próximos</h1>
</section>
<main class="contenedor-eventos">
<?php if (!empty($eventos) && is_array($eventos)): 
    foreach ($eventos as $evento): 
        if($evento->tipo == "Académico"){
            $tipo = "tipo-educativo";
        }else if($evento->tipo == "Deportivo"){
            $tipo = "tipo-deportivo";
        }else if($evento->tipo == "Cultural"){
            $tipo = "tipo-cultural";
        }else if($evento->tipo == "Cívico"){
            $tipo = "tipo-civico";
        }

        // Establecer el locale a español
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'es_MX.UTF-8', 'es_MX');

        // Formatear la fecha
        $fecha = DateTime::createFromFormat('Y-m-d', $evento->fecha);
        $fechaFormateada = strftime('%d de %B del %Y', $fecha->getTimestamp());

        // Formatear la hora
        $hora = DateTime::createFromFormat('H:i:s', $evento->hora);
        $horaFormateada = $hora->format('h:i a');
        ?>
        <div class="tarjeta-evento <?= esc($tipo) ?>">
            <div class="encabezado">
                <h2><?= esc($evento->nombre) ?></h2>
            </div>
            <div class="contenido">
                <p><strong>Fecha:</strong> <?= esc($fechaFormateada) ?></p>
                <p><strong>Hora:</strong> <?= esc($horaFormateada) ?></p>
                <p><strong>Lugar:</strong> <?= esc($evento->lugar) ?></p>
                <p><strong>Área:</strong> <?= esc($evento->area) ?></p>
                <p><strong>Responsable:</strong> <?= esc($evento->responsable) ?></p>
                <p><strong>Descripción:</strong> <?= esc($evento->descripcion) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No hay eventos próximos.</p>
<?php endif; ?>
</main>
<?= $this->endSection(); ?>