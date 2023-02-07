<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="/ERP-Visual/css/style.css">
    <script src="/js/erp.js"></script>
</head>
<body class="compras">
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
        Compras
      </h1>
     </section>
  <div>
     <hr size="7px" color="#26736E" />
    </div>
  
    <div class="botones">
      <input type="button" value="Agregar" id="agregar">
      <input type="button" value="Rutas" id="rutas">
    </div>
      <section class="tabla">
      <table>
        <tr>
          <th>COD</th>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>PVP Unidad € </th>
          <th>PVP Total €</th>
        </tr>
  
        <tr>
          <td>1</td>
          <td>NVIDIA RTX 2080</td>
          <td>4</td>
          <td>800</td>
          <td>3200</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Intel i7 10700K</td>
          <td>6</td>
          <td>360</td>
          <td>2160</td>
        </tr>
          <tr>
          <td>3</td>
          <td>Memoria RAM 16GB</td>
          <td>12</td>
          <td>130
          </td>
          <td>1560</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Intel i5 10500K</td>
          <td>3</td>
          <td>250</th>
          <td>750</td>
        </tr>
  
        <tr>
          <td>5</td>
          <td>Ventilador 120mm</td>
          <td>7</td>
          <td>25</th>
          <td>175</td>
        </tr>
  
        <tr>
          <td>6</td>
          <td>Fuente Alimentacion 600W</td>
          <td>4</td>
          <td>120</th>
          <td>480</td>
        </tr>
  
      
        
  
        
      </table>
    </section>

</body>
</html>