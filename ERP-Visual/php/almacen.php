<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envíos</title>
    <link rel="stylesheet" href="/ERP-Visual/css/style.css">
    <script src="/js/erp.js"></script> 
</head>
<body class="envios">
<header>
        <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
              <img src="/ERP-Visual/images/casa (2).png" alt=""><a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item" id="clientes">
              <img src="/ERP-Visual/images/clientes.png" alt=""><a class="nav-link" href="clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
              <img src="/ERP-Visual/images/ventas.png" alt=""><a class="nav-link" href="ventas.php">Ventas</a>
            </li>
            <li class="nav-item" >
                <img src="/ERP-Visual/images/envios.png" alt="">   <a class="nav-link disabled" href="envios.php">Envios</a>
            </li>
            <li class="nav-item">
                
                <img src="/ERP-Visual/images/compras.png" alt="">  <a class="nav-link disabled" href="compras.php">Compras</a>
              </li>
              <li class="nav-item">
                <img src="/ERP-Visual/images/almacen.png" alt=""><a class="nav-link disabled" href="almacen.php">Almacen</a>
              </li>
              <li class="nav-item">
               <img src="/ERP-Visual/images/proveedores.png" alt=""> <a class="nav-link disabled" href="proveedores.php">Proovedores</a>
              </li>
          </ul>
        </nav>
    </header>
   <section class="enviosh1">
    <h1>
     Almacen
    </h1>
   </section>
<div>
   <hr size="7px" color="#26736E" />
  </div>
  <div>
    <select name="stock" id="invAlmacen">
      <option value="Disponibilidad">Disponibilidad</option>
      <option value="En stock">En stock</option>
      <option value="Agotado">Agotado</option>
     
    </select>
    <select name="stock" id="invAlmacen">
      <option value="Categoria">Categoria</option>
      <option value="Ventilador">Ventilador</option>
      <option value="Grafica">Grafica </option>
      <option value="Procesador">Procesador</option>
      <option value="Memoria RAM">Memoria RAM</option>
      <option value="Placa base">Placa base</option>
    </select>
  </div>

  <div class="botones">
    
    <input type="button" value="Agregar" id="agregar">
    <input type="button" value="Rutas" id="rutas">
  </div>
    <section class="tabla">
    <table>
      <tr>
        <th>ID</th>
        <th>Producto</th>
        
       
        <th>Cantidad Disponible</th>
      </tr>

      <tr>
        <td>1</td>
        <td>NVIDIA GTX1060</td>
       
       
        <td>300</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Intel I7 2040</td>
       
        
        <td>200</td>
      </tr>
        <tr>
        <td>3</td>
        <td>RAM 16GB</td>
        
        
        <td>250</td>
      </tr>
      <tr>
        <td>4</td>
        <td>NVIDIA RTX 4090</td>
       
        
        <td>150</td>
      </tr>

      <tr>
        <td>5</td>
        <td>Intel I5 10500K</td>
        <td>200</td>
        
       
        
       
      </tr>

      <tr>
        <td>6</td>
        <td>Ventilador 120mm</td>
        
        
        <td>200</td>
      </tr>

      <tr>
        <td>7</td>
        <td>Placa base B460</td>
        
       
        <td>350</td>
      </tr>
      

      
    </table>
  </section>


    
</head>
<body>
 

</body>
</html>