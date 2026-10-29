<?php
$modulo = $_GET['modulo'] ?? 'dashboard';
?>
<div class="div-navbar">
    <nav class="nav">
        <ul class="ul-nav">
            <li><a href="?modulo=dashboard">Dashboard</a></li>
            <li><a href="?modulo=inventario">Inventario</a></li>
            <li><a href="?modulo=entrada">Entrada</a></li>
            <li><a href="?modulo=venta">Venta</a></li>

            <div class="nav-buttom">
                <span class="span-navbar"></span>
                <li><a href="?modulo=productos">Productos</a></li>
                <li><a href="?modulo=proveedores">Proveedores</a></li>
            </div>
        </ul>
    </nav>
</div>