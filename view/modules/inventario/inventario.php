<?php
include __DIR__ . '/../../../config/conexion.php';
?>

<div class="header">
    <input type="search" name="" placeholder="Buscar Producto..." class="barra-busqueda">
    <select name="" id="" class="btn-select">
        <option value="categoria">Categoria</option>
        <option value="1">1</option>
        <option value="3">2</option>
    </select>
    <button class="btn-buscar">Buscar</button>
    <button class="btn-agregar"> Agregar producto</button>
</div>

<div class="modal">
    <form action="modal/agregar.php" class="formulario">
     <span data-cerrar-modal class="btn-cerrar-modal"><img src="../view/assets/img/cruz.png"></span>
        <div class="form2">
            <input type="file" class="input-img">
            <div class="display-grid">
                <input type="insert" class="input-text">
                <input type="insert" class="input-text">
                <input type="insert" class="input-text">
            </div>
        </div>
        <div class="form3">

        </div>
    </form>
</div>



<div class="contenido-central">
    <div class="target">

    </div>
</div>