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
    <button class="btn-agregar" id="abrir-modal" onclick="abrirModal()"> Agregar producto</button>
</div>

<div class="modal-container" id="modal">
    <form action="modal/agregar.php" class="modal">
        <span data-cerrar-modal class="btn-cerrar-modal"  id="btn-cerrarModal" onclick="cerrarModal()"><img src="../view/assets/img/cruz.png"></span>
        <div class="form2">
            <input type="file" class="input-img">
            <div class="display-grid">
                <input type="insert" class="input-text" placeholder="Nombre">
                <input type="insert" class="input-text" placeholder="Codigo">
                <input type="insert" class="input-text" placeholder="Descripcion">
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