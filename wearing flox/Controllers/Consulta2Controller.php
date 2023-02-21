<?php
    // Para poder accder desde motor.js o desde alguna View
    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Datos1Model.php";
    }
    elseif(file_exists("Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "Db/Con1Db.php";
        // Llamada al modelo
        require_once "Models/Datos1Model.php";
    }

    // Instanciacion del objeto
    $oData = new Datos;
    // Llamada al metodo
    $sql = "select * from articulos inner join fotografias on articulos.ide_art=fotografias.ide_art group by articulos.ide_art order by nom_art, pvp_art asc";

    $data = $oData->getData1($sql);
    
    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {
        echo
        "
        <div class='bloque0 negrita'>
            <div class='bloque1'>Articulo</div>
            <div class='bloque1'>PVP</div>
            <div class='bloque1'>Fotografía</div>
            <div class='bloque1'>Detalle</div>
            <div class='bloque1'>Editar</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->nom_art</div>
                <div class='bloque1'>$row->pvp_art</div>
                <div class='bloque1'>$row->rut_fot</div>
                <div class='bloque1'><a href='detalle-prenda.php?ideArt=$row->ide_art'>Detalle</a></div>
                <div class='bloque1'><a href='editar-prenda.php?ideArt=$row->ide_art'>Editar</a></div>
            </div>
            ";
        }
    }

?>