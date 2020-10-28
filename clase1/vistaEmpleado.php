<?php

    require '../config/funciones.php';
    require 'Persona.php';
    require 'Empleado.php';

    $Empleado = new Empleado('Cosme', 'Fulanito');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
        <h1>Vista Empleado</h1>
        <div class="objeto">
            <?= $Empleado->verDatos() ?>
        </div>
</body>
</html>