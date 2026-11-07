<?php
include __DIR__ . '/../../../config/conexion.php';
?>

<div class="header">
    <div class="div-header">
         <input type="search" name="" placeholder="Buscar Producto..." class="barra-busqueda">
        <select name="" id="" class="btn-select">
            <option value="categoria">Categoria</option>
            <option value="1">1</option>
            <option value="3">2</option>
        </select>
        <button class="btn-buscar">Buscar</button>
    </div>
    <button class="btn-agregar" id="abrir-modal" onclick="abrirModal()"> Agregar </button>
</div>

<div class="modal-container" id="modal">
    <form action="modal/agregar.php" class="modal">
        <span data-cerrar-modal class="btn-cerrar-modal" id="btn-cerrarModal" onclick="cerrarModal()"><img src="../view/assets/img/cruz.png"></span>
        <div class="form">
            <label for="img" class="label-img">
                <input type="file" class="input-img" id="img">
                <span>Insertar imagen</span>
            </label>
            <label for="nombre">
                <span>Nombre</span>
                <input type="insert" class="input-text" placeholder="Nombre">
            </label>
            <label for="codigo">
                <span>Codigo</span>
                <input type="insert" class="input-text" placeholder="Codigo">
            </label>
            <label for="descripcion">
                <span>Descripcion</span>
                <input type="insert" class="input-text" placeholder="Descripcion">
            </label>
            <label for="proveedores">
                <span>Proveedor</span>
                <select name="" id="proveedores">
                    <option value="">proveedor</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </label>
        </div>
    </form>
</div>



<div class="contenido-central">
    <div class="target">

    </div>
</div>