<?php
 include __DIR__.'/../config/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="body.css">
    <title>XOREX</title>
</head>
<body>

<div class="barra-lateral">
    <?php include __DIR__.'/../view/include/navbar.php';?>
    <main class="contenido-principal">
        <?php 
        $modulo = $_GET['modulo'] ?? 'dashboard';

        if ($modulo == 'dashboard') {
            include __DIR__.'/../view/modules/dashboard/dashboard.php';
        }
        elseif($modulo == 'inventario'){
            include __DIR__.'/../view/modules/inventario/inventario.php';
        }
        elseif ($modulo == 'entrada'){
            include __DIR__.'/../view/modules/entrada/entrada.php';
        }
        elseif ($modulo == 'venta'){
            include __DIR__.'/../view/modules/venta/venta.php';     }
        elseif ($modulo == 'productos') {
            include __DIR__.'/../view/modules/productos/productos.php';
        }
        elseif ($modulo == 'proveedores') {
            include __DIR__.'/../view/modules/proveedores/proveedores.php';
        }
         ?>
    </main>
</div>



    
</body>
</html>