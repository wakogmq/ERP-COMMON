<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="formModificacion1" class="bloque1">
            <?php require_once "Controllers/Editar1Controller.php"; ?>
            <input type="hidden" id="textoModificacion0" name="textoModificacion0"  value="<?php echo $ideArt; ?>">
            <input type="text" id="textoModificacion1" name="textoModificacion1" required class="campo1" value="<?php echo $nomArt; ?>" placeholder="Articulo">
            <input type="number" id="textoModificacion2" name="textoModificacion2" required class="campo1" value="<?php echo $pvpArt; ?>" placeholder="PVP">
            <input type="submit" id="botonModificacion1" name="botonModificacion1" value="Modificar" class="boton1">
        </form>
    </div>
    <div id="contenedor2" class="contenedor2">
    </div>
</div>