<?php

    /* INICIO - Tratamiento de los input type='text' */
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];
    /* FIN - Tratamiento de los input type='text' */

    // Llamada a la conexion
    require_once "../Db/Con1Db.php";
    // Llamada al modelo
    require_once "../Models/Datos1Model.php";

    // Instanciacion del objeto
    $oData = new Datos;
    // Llamada al metodo
    $sql = "insert into coches (mar_coc, mod_coc, aut_coc) values ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3');";
    $sql .= "select * from coches order by mar_coc, mod_coc, aut_coc";

    $data = $oData->setGetData1($sql);
    
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
            <div class='bloque1'>Marca</div>
            <div class='bloque1'>Modelo</div>
            <div class='bloque1'>Autonomia (Km)</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->mar_coc</div>
                <div class='bloque1'>$row->mod_coc</div>
                <div class='bloque1'>$row->aut_coc</div>
            </div>
            ";
        }
    }

?>