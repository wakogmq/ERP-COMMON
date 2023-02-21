<?php
    class Datos
    {

        private $mysqli;
        private $data;

        public function __construct()
        {
            $this->mysqli=Connection::conn1();
            $this->data=array();
        }
        
        // Devuelve datos de la BD (select)
        public function getData1($sql)
        {
            if (!$this->mysqli->query($sql))
            {
                echo "La operacion no se ha podido realizar.";
                // echo "Detalle del error en la consulta (getData1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;
            }
            else
            {
                $result=$this->mysqli->query($sql);
                while($rows=$result->fetch_object())
                {
                    $this->data[]=$rows;
                }
                $result->close();
            }
            $this->mysqli->close();
            return $this->data;
        }

        // No devuelve datos de la BD (insert, update, delete)
        public function setData1($sql)
        {
            if(!$this->mysqli->query($sql))
            {
                $result = "La operacion no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setData1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;
            }
            else
            {
                $result = "Operacion realizada con exito";
            }
            $this->mysqli->close();
            return $result;
        }

        // Inserta y selecciona datos
        public function setGetData1($sql)
        {
            // Ejecutar multi consulta
            if (!$this->mysqli->multi_query($sql))
            {
                echo "La operacion no se ha podido realizar";
                // echo "Detalle del error en la consulta (setGetData1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;
            }
            else
            {
                do
                {
                    // Almacenar los resultados
                    if ($result = $this->mysqli->store_result())
                    {
                        while ($rows = $result->fetch_object())
                        {
                            $this->data[]=$rows;
                        }
                        $result->free();
                    }
                } while ($this->mysqli->more_results() && $this->mysqli->next_result());
            }
            // cerrar conexión
            $this->mysqli->close(); 
            return $this->data;
        }

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements1($sql, $par1, $par2, $par3)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param("ssi", $par1, $par2, $par3); // ssi = string, string, integer
            
            if(!$stmt->execute())
            {
                $result = "La operacion no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setData1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;
            }
            else
            {
                $result = "Operacion realizada con exito";
            }
            $this->mysqli->close();
            return $result;
        }

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements2($sql, $par1, $par2, $par3, $par4)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param("ssis", $par1, $par2, $par3, $par4); // ssis = string, string, integer, string
            
            if(!$stmt->execute())
            {
                $result = "La operacion no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setData1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;
            }
            else
            {
                $result = "Operacion realizada con exito";
            }
            $this->mysqli->close();
            return $result;
        }

        public function uploadFile($nombreFichero1, $nombreControlFile1, $rutaFichero1)
        {
            
            $extensionFichero = pathinfo($_FILES[$nombreControlFile1]['name'], PATHINFO_EXTENSION);
            $rutaNombrefichero1 = $rutaFichero1 . $nombreFichero1 . '.' . $extensionFichero;
            $rutaNombreficheroBaseDeDatos1 = $rutaFichero1 . $nombreFichero1 . '.' . $extensionFichero;
        
            // Subida del fichero
            if (move_uploaded_file($_FILES[$nombreControlFile1]['tmp_name'], $rutaNombrefichero1))
            {
                echo "Fichero subido correctamente (servidor).";
                /* INICIO - Captura de los datos extras enviados junto con el fichero */
                /* echo $_POST['descripcion1']; */
                /* echo $_POST['InformacionAdicional1']; */
                /* FIN - Captura de los datos extras enviados junto con el fichero */
                return $rutaNombreficheroBaseDeDatos1;
            }
            else
            {
                switch ($_FILES['ficheroInsercion1']['error'])
                {
                    case UPLOAD_ERR_OK: /* UPLOAD_ERR_OK: Archivo subido correctamente */
                    break;
                    case UPLOAD_ERR_INI_SIZE:
                    echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
                    break;
                    case UPLOAD_ERR_FORM_SIZE:
                    echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
                    break;		
                    case UPLOAD_ERR_PARTIAL:
                    echo 'El fichero fue sólo parcialmente subido.';
                    break;
                    case UPLOAD_ERR_NO_FILE:
                    echo 'No se subió ningún fichero.';
                    break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                    echo 'Falta la carpeta temporal.';
                    break;
                    case UPLOAD_ERR_CANT_WRITE:
                    echo 'No se pudo escribir el fichero en el disco.';
                    break;
                    case UPLOAD_ERR_EXTENSION:
                    echo 'Una extensión de PHP detuvo la subida de ficheros.';
                    break;			
                    default:
                    echo 'El archivo no se ha enviado.';
                    break;
                }
            }
        }

    }

?>