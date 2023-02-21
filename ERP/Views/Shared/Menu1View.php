<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/ERP-Visual/css/style.css">
    <script src="/ERP-Visual/js/erp.js"></script>
</head>
<body>
<header>
        <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
              <img src="/ERP/Assets/images/casa (2).png" alt=""><a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <img src="/ERP/Assets/images/clientes.png" alt=""><a class="nav-link" href="clientes.html">Clientes</a>
            </li>
            <li class="nav-item">
              <img src="/ERP/Assets/images/ventas.png" alt=""><a class="nav-link" href="ventas.html">Ventas</a>
            </li>
            <li class="nav-item" id="envios">
                <img src="/ERP/Assets/images/envios.png" alt="">   <a class="nav-link disabled" href="envios.html">Envios</a>
            </li>
            <li class="nav-item">
                
                <img src="/ERP/Assets/images/compras.png" alt="">  <a class="nav-link disabled" href="compras.html">Compras</a>
              </li>
              <li class="nav-item">
                <img src="/ERP/Assets/images/almacen.png" alt=""><a class="nav-link disabled" href="almacen.html">Almacen</a>
              </li>
              <li class="nav-item">
               <img src="/ERP/Assets/images/proveedores.png" alt=""> <a class="nav-link disabled" href="proveedores.html">Proovedores</a>
              </li>
          </ul>
        </nav>
    </header>


    <div class="topnav flex">
        <div class="center col-4"><a class="active" href="#erp"><h1>ERP</h1></a></div>  
        <div class="center col-4">
            <input type="search" name="Buscar..." id="buscar">
            <img class="lupa" src="/ERP-Visual/images/lupa.png" alt="">
        </div>
        <div class="right col-4 flex">
            <div class="col-4 center"><img src="/ERP-Visual/images/usuario.png" alt=""> 
            <div class="col-4 center username"><h3>Pedro Picapiedra</h3></div> 
            <div class="col-4 center imgdrop dropbtn dropdown " onclick="myFunction()">
                <!--
                <div id="myDropdown" class="dropdown-content">
                    <a href="#"><img src="/ERP-Visual/images/perfil.png" alt=""> Mi Perfil</a>
                    <a href="#"><img src="/ERP-Visual/images/preferencia.png" alt=""> Preferencias</a>
                    <a href="#"><img src="/ERP-Visual/images/log-out.png" alt=""> Cerrar sesión</a>
                </div>
                -->
            </div>
        </div>
    </div>
   
