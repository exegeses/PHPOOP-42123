<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->agregarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una nueva región</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar la región';
        if( $chequeo ){
            $css = 'success';
            $mensaje = 'Región: '.$Region->getRegNombre().' agregada corectamente.';
        }
?>
            <div class="alert alert-<?= $css ?> shadow-sm p-4 col-6 mx-auto">
                <?= $mensaje ?>
                <a href="adminRegiones.php" class="btn btn-outline-secondary ml-4">
                    volver a panel
                </a>
            </div>

    </main>

<?php
    include 'includes/footer.php';
?>