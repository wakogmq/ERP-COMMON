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
<body class="clientes">
    <header>
        <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
              <img src="/ERP-Visual/images/casa (2).png" alt=""><a class="nav-link active" href="home.html">Home</a>
            </li>
            <li class="nav-item" id="clientes">
              <img src="/ERP-Visual/images/clientes.png" alt=""><a class="nav-link" href="clientes.html">Clientes</a>
            </li>
            <li class="nav-item">
              <img src="/ERP-Visual/images/ventas.png" alt=""><a class="nav-link" href="ventas.html">Ventas</a>
            </li>
            <li class="nav-item" >
                <img src="/ERP-Visual/images/envios.png" alt="">   <a class="nav-link disabled" href="envios.html">Envios</a>
            </li>
            <li class="nav-item">
                
                <img src="/ERP-Visual/images/compras.png" alt="">  <a class="nav-link disabled" href="compras.html">Compras</a>
              </li>
              <li class="nav-item">
                <img src="/ERP-Visual/images/almacen.png" alt=""><a class="nav-link disabled" href="almacen.html">Almacen</a>
              </li>
              <li class="nav-item">
               <img src="/ERP-Visual/images/proveedores.png" alt=""> <a class="nav-link disabled" href="proveedores.html">Proovedores</a>
              </li>
          </ul>
        </nav>
    </header>
   <section class="enviosh1">
    <h1>
      Agregar Clientes
    </h1>
   </section>
<div>
   <hr size="7px" color="#26736E" />
  </div>

  <div class="botones">
    <a href="clientes.html"><input type="button" value="Volver" id="volver"></a>
    <input type="button" value="Agregar" id="agregarcliente">
    
  </div>
    <section class="tabla">
    <table>
      <tr>
        <th>ID</th>
        <th>Indica nombre del cliente</th>
        <th>Selecciona Poblacion</th>
        <th>Indique codigo postal</th>
        <th>Escribe Email</th>
      </tr>    
      <tr>
        <th><input type="text"></th>
        <th><input type="text"></th>
        <th>
        <select name="" id="">
          <option value="value1">Selecciona las respectivas poblaciones</option>
          <option value="value2">Madrid</option>
          <option value="value2">Lugo</option>
          <option value="value2">Toledo</option>
          <option value="value2">Valencia</option>
          <option value="value2">Sevilla</option>
        </select></th>
        <th><input type="text"></th>
        <th><input type="text"></th>
      </tr>  
    </table>
  </section>


    
</head>
<body>
 

</body>
</html>