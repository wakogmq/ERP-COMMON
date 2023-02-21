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

    // Llamada al metodo para subir el archivo (uploadFile)

    // El nombre del fichero es la concetenacion de la marca y el modelo de coche
    $nombreFichero1 = $textoInsercion1 . ' ' . $textoInsercion2;
    // Name del <input type="file" name="ficheroInsercion1"...
    $nombreControlFile1 = 'ficheroInsercion1';
    // Ruta en la que se guarda el fichero
    $rutaFichero1 = '../Assets/img/';

    // Llamada al metodo para subir el fichero que devuelve la ruta completa en la que se encuetra el fichero (url)
    $rutaNombreficheroBaseDeDatos1 = $oData->uploadFile($nombreFichero1, $nombreControlFile1, $rutaFichero1);
    // Eliminacion de los tres caracteres "../" en la ruta en la que se encuetra el fichero
    $rutaNombreficheroBaseDeDatos1 = substr($rutaNombreficheroBaseDeDatos1, 3);

    // Llamada al metodo para la insertar el registro (setDataPreparedStatements2)
    $sql1 = "insert into coches (mar_coc, mod_coc, aut_coc, rut_coc) values (?, ?, ?, ?)";
    $data = $oData->setDataPreparedStatements2($sql1, $textoInsercion1, $textoInsercion2, $textoInsercion3, $rutaNombreficheroBaseDeDatos1);
    
    echo $data;

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements

?>