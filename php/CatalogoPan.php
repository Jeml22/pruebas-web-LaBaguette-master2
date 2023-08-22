<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['role'];
if ($varsesion==NULL || $varsesion='') {
    header("location: ../IniciarSesion.html");
    // session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/Default-Styles/Catalogs.css">
        <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
        <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
            crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/c34d8fffbe.js" crossorigin="anonymous"></script>
        <title>Productos | La Baguette</title>
    </head>


    <body>
        <div class="parent-container">
            <header>
                <div class="menu_encabezadop1">
                    <div class="conteiner">
                        <div class="social">
                            <ul>
                                <li>
                                    <a
                                        href="">
                                        <i class="fab fa-facebook-f icon"></i>
                                    </a>
                                </li>


                                <li>
                                  <a href="#">
                                  <i class="fa-brands fa-x-twitter"></i>
                                  </a>
                              </li>


                                <li>
                                    <a href="https://wa.me/+573154875304">
                                        <i class="fab fa-whatsapp icon"></i>
                                    </a>
                                </li>


                                <li>
                                    <a
                                        href="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>


                            <div class="user">


                                <a
                                    href="https://www.instagram.com/ronaldo07_rg/">
                                    <i class="fa fa-user"></i>
                                </a>
                                <a href="../php/CerrarSesion.php">
                                <span>Cerrar sesion</span>
                            </a>


                            </div>


                            <div class="shopping">
                              <i class="fa fa-shopping-cart" onclick="showCartMenu()"></i>
                              <div class="cart-menu" id="cartMenu">
                                <h2>Mi Carrito</h2>
                                <div class="direction">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <p>Direccion de Residencia</p>
                                </div>
                                <hr>
                                <button class="close" onclick="hideCartMenu()">X</button>
                                <div class="cart-items">
                                 
                                </div>
                                <div class="buttons">
                                  <button id="button1">Seleccionar metodo de pago</button>
                                  <div>
                                    <button class="button-option" id="button2" onclick="selectButton(this)">Domicilio</button>
                                    <button class="button-option" id="button3" onclick="selectButton(this)">Ir a la tienda</button>
                                  </div>
                                  <hr>
                                  <div class="cam">
                                   
                                    <button class="bott" id="subtotal">Pagar   Subtotal: $0.000</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="conteiner">


                    <div class="menuconteiner">


                        <div class="menu">


                            <nav>
                                <a href="iniciado.php"><p>INICIO</p></a>
                                <a href="#" class="has-submenu"><p>NOSOTROS</p></a>
                                <ul class="submenu">
                                  <li><a href="Nosotros.php">MISION Y VISION</a></li>
                                  <li><a href="Nosotros.php">QUIENES SOMOS</a></li>
                                </ul>
                            </nav>


                            <div class="logo">
                                <a
                                    href="iniciado.php"><img
                                        src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
                            </div>


                            <nav>
                                <a href="ContactosUsuario.php"><p>CONTACTOS</p></a>
                                <a href="Sucursales.php"><p>SUCURSALES</p></a>
                            </nav>


                        </div>
                    </div>
                </div>
            </header>


            <main>
              <div class="product-catalog" id="novedades">
                <div class="hero">
                    <div class="conteiner">
                        <div class="Nov">
                            <p>NOVEDADES</p>
                        </div>
                        <hr>
                    </div>
                    <div id="nav-menu">
                        <div class="conteiner" style="position: relative;">
                            <button id="menu-button"><i class="fa fa-bars"></i></button>
                            <nav id="menu">
                                <ul>
                                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="news" style="padding-top: 70px;">
                    <div class="conteiner">
                        <div class="row">
                            <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Baguette</h3>
                                  <p class="precio">$5000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true" >
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Baguette</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Pan elaborado con técnicas artesanales y preferentes (levaduras naturales), de crecimiento lento, con todos los beneficios de la harina de centeno.</p>
                                      <p><b>Peso:</b> 500 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de la abuela</h3>
                                  <p class="precio">$2000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de la abuela</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Es la preferencia de algunos clientes, la razon es por su sabor de queso exquisites  .</p>
                                      <p><b>Peso:</b> 400 gramos</p>
                                      <p><b>Cantidad disponible:</b> 40</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan con queso</h3>
                                  <p class="precio">$2000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan con queso</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>pan artesanal rellena de queso y una suavidad maravillosa.</p>
                                      <p><b>Peso:</b> 400 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de arequipe</h3>
                                  <p class="precio">$2000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de arequipe</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>pan relleno de arequipe dulce y la suavidad del pan es la mejor .</p>
                                      <p><b>Peso:</b> 450 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan con queso y jamón</h3>
                                  <p class="precio">$3000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan con queso y jamón</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>suavidad de pan hecha con harinas queso y mortadela de calidad .</p>
                                      <p><b>Peso:</b> 500 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Croissant</h3>
                                  <p class="precio">$1500</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Croissant</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Panecillo aceitoso de pasta de hojaldre, cocido al horno, con forma de media luna.</p>
                                      <p><b>Peso:</b> 200 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="button-pagination">
                          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('novedades')">1</a></button>
                          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('nuevos')">2</a></button>
                      </div>
                    </div>
                </div>
              </div>
              <div class="product-catalog" id="nuevos" style="display: none;">
                <div class="hero">
                    <div class="conteiner">
                        <div class="Nov">
                            <p>NOVEDADES
                            </p>
                        </div>
                        <hr>
                    </div>
                    <div id="nav-menu">
                        <div class="conteiner" style="position: relative;">
                            <button id="menu-button"><i class="fa fa-bars"></i></button>
                            <nav id="menu">
                                <ul>
                                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="news" style="padding-top: 70px;">
                    <div class="conteiner">
                        <div class="row">
                            <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Buñuelos</h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" >  
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Buñuelos</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>son buñuelos muy esponjosos ademas estan con buena cantidad de queso</p>
                                      <p><b>Peso:</b> 70 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Almojábanas </h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Almojábanas </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Su nombre deriva del árabe al-muyabbana, que podría traducirse como "la quesada" o "la que tiene queso", o como "torta".</p>
                                      <p><b>Peso:</b> 60 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Bizcocho de achira</h3>
                                  <p class="precio">$200</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Bizcocho de achira</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánicos de Perú y Colombia, al cual se le agrega cuajada fresca, mantequilla y yemas de huevo para, luego, hornearse.</p>
                                      <p><b>Peso:</b> 10 gramos</p>
                                      <p><b>Cantidad disponible:</b> 300</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Bizcocho de cuajada </h3>
                                  <p class="precio">$200</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Bizcocho de cuajada </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuajada.</p>
                                      <p><b>Peso:</b> 40 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de bono </h3>
                                  <p class="precio">$800</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de bono </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>pan con una contextura suave y a la vez dura, pan de queso.</p>
                                      <p><b>Peso:</b> 70 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de yuca</h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de yuca</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>se prepara con almidón o harina de yuca, queso, mantequilla y huevos.</p>
                                      <p><b>Peso:</b> 50 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="button-pagination">
                          <button id="menu-button" onclick="mostrarCatalogo('novedades')">1</button>
                          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('nuevos')">2</a></button>
                      </div>
                  </div>
          
              </div>
              <div class="product-catalog" id="galletas" style="display: none;">
                <div class="hero">
                    <div class="conteiner">
                        <div class="Nov">
                            <p>GALLETAS</p>
                        </div>
                        <hr>
                    </div>
                    <div id="nav-menu">
                        <div class="conteiner" style="position: relative;">
                            <button id="menu-button"><i class="fa fa-bars"></i></button>
                            <nav id="menu">
                                <ul>
                                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="news" style="padding-top: 70px;">
                    <div class="conteiner">
                        <div class="row">
                            <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Cucas</h3>
                                  <p class="precio">$500</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Cucas</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Galletas morenas endulzadas con melao de panela</p>
                                      <p><b>Peso:</b> 90 gramos</p>
                                      <p><b>Cantidad disponible:</b> 90</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Panderos</h3>
                                  <p class="precio">$500</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Panderos</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Los panderos tienen una textura crujiente y son ligeramente endulzados con un toque de sabor anís.</p>
                                      <p><b>Peso:</b> 20 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Merengos</h3>
                                  <p class="precio">$400</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Merengos</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Estos postres que producen suspiros al unirse con frutas y salsas los convierten en unos pequeños acompañantes de sabor exquisito.</p>
                                      <p><b>Peso:</b> 10 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Galletas De Chocolate</h3>
                                  <p class="precio">$500</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Galletas De Chocolate</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Receta de Galletas de mantequilla rellena con chocolate.</p>
                                      <p><b>Peso:</b> 500 gramos</p>
                                      <p><b>Cantidad disponible:</b> 40</p>
                                      <button class="add-to-cart">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Galletas De Leche</h3>
                                  <p class="precio">$3000</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Galletas De Leche</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Disfruta esta deliciosa y exquisita receta de galletas la vaquita.</p>
                                      <p><b>Peso:</b> 400 gramos</p>
                                      <p><b>Cantidad disponible:</b> 200</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Tostadas</h3>
                                  <p class="precio">$500</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Tostadas</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>tostadas son de contextura duro y rapidas de preparar.</p>
                                      <p><b>Peso:</b> 30 gramos</p>
                                      <p><b>Cantidad disponible:</b> 50</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="button-pagination">
                  <button id="menu-button"><a href="#" onclick="mostrarCatalogo('galletas')">1</a></button>
                  <button id="menu-button"><a href="#" onclick="mostrarCatalogo('dulces')">2</a></button>
              </div>
              </div>
            </div>
             <div class="product-catalog" id="dulces" style="display: none;">
                          <div class="hero">
                              <div class="conteiner">
                                  <div class="Nov">
                                      <p>GALLETAS
                                      </p>
                                  </div>
                                  <hr>
                              </div>
                              <div id="nav-menu">
                                  <div class="conteiner" style="position: relative;">
                                      <button id="menu-button"><i class="fa fa-bars"></i></button>
                                      <nav id="menu">
                                          <ul>
                                            <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                            <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                            <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                                          </ul>
                                      </nav>
                                  </div>
                              </div>
                          </div>
                     
                          <div class="news" style="padding-top: 70px;">
                              <div class="conteiner">
                                  <div class="row">
                                      <div class="col">
                                          <div class="slider">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Buñuelos</h3>
                                            <p class="precio">$700</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" >  
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Buñuelos</h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>son buñuelos muy esponjosos ademas estan con buena cantidad de queso</p>
                                                <p><b>Peso:</b> 70 gramos</p>
                                                <p><b>Cantidad disponible:</b> 100</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
          
          
                                        <div class="col">
                                          <div class="slider">
                                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Almojábanas </h3>
                                            <p class="precio">$700</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Almojábanas </h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>Su nombre deriva del árabe al-muyabbana, que podría traducirse como "la quesada" o "la que tiene queso", o como "torta".</p>
                                                <p><b>Peso:</b> 60 gramos</p>
                                                <p><b>Cantidad disponible:</b> 100</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="slider">
                                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Bizcocho de achira</h3>
                                            <p class="precio">$200</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Bizcocho de achira</h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánicos de Perú y Colombia, al cual se le agrega cuajada fresca, mantequilla y yemas de huevo para, luego, hornearse.</p>
                                                <p><b>Peso:</b> 10 gramos</p>
                                                <p><b>Cantidad disponible:</b> 300</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                   
                                        <div class="col">
                                          <div class="slider">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Bizcocho de cuajada </h3>
                                            <p class="precio">$200</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Bizcocho de cuajada </h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuajada.</p>
                                                <p><b>Peso:</b> 40 gramos</p>
                                                <p><b>Cantidad disponible:</b> 10</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="slider">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Pan de bono </h3>
                                            <p class="precio">$800</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Pan de bono </h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>pan con una contextura suave y a la vez dura, pan de queso.</p>
                                                <p><b>Peso:</b> 70 gramos</p>
                                                <p><b>Cantidad disponible:</b> 100</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="slider">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                                            <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                                          </div>
                                          <div class="product-info">
                                            <h3>Pan de yuca</h3>
                                            <p class="precio">$700</p>
                                            <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                          </div>
                                          <div class="popup">
                                            <div class="popup-content">
                                              <div class="product-image">
                                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                                              </div>
                                              <div class="product-details">
                                                <div class="product-header">
                                                  <h3>Pan de yuca</h3>
                                                  <button class="close"><i class="fas fa-times"></i></button>
                                                </div>
                                                <p>se prepara con almidón o harina de yuca, queso, mantequilla y huevos.</p>
                                                <p><b>Peso:</b> 50 gramos</p>
                                                <p><b>Cantidad disponible:</b> 100</p>
                                                <button class="add-to-cart1">Agregar al carrito</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                            </div>
          </div>
          <div class="product-catalog" id="dulces" style="display: none;">
            <div class="hero">
                <div class="conteiner">
                    <div class="Nov">
                        <p>GALLETAS
                        </p>
                    </div>
                    <hr>
                </div>
                <div id="nav-menu">
                    <div class="conteiner" style="position: relative;">
                        <button id="menu-button"><i class="fa fa-bars"></i></button>
                        <nav id="menu">
                            <ul>
                              <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                              <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                              <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
       
            <div class="news" style="padding-top: 70px;">
                <div class="conteiner">
                    <div class="row">
                        <div class="col">
                            <div class="slider">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Buñuelos</h3>
                              <p class="precio">$700</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" >  
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Buñuelos</h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>son buñuelos muy esponjosos ademas estan con buena cantidad de queso</p>
                                  <p><b>Peso:</b> 70 gramos</p>
                                  <p><b>Cantidad disponible:</b> 100</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col">
                            <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Almojábanas </h3>
                              <p class="precio">$700</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Almojábanas </h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>Su nombre deriva del árabe al-muyabbana, que podría traducirse como "la quesada" o "la que tiene queso", o como "torta".</p>
                                  <p><b>Peso:</b> 60 gramos</p>
                                  <p><b>Cantidad disponible:</b> 100</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Bizcocho de achira</h3>
                              <p class="precio">$200</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Bizcocho de achira</h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánicos de Perú y Colombia, al cual se le agrega cuajada fresca, mantequilla y yemas de huevo para, luego, hornearse.</p>
                                  <p><b>Peso:</b> 10 gramos</p>
                                  <p><b>Cantidad disponible:</b> 300</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>
                     
                          <div class="col">
                            <div class="slider">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Bizcocho de cuajada </h3>
                              <p class="precio">$200</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Bizcocho de cuajada </h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuajada.</p>
                                  <p><b>Peso:</b> 40 gramos</p>
                                  <p><b>Cantidad disponible:</b> 10</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="slider">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Pan de bono </h3>
                              <p class="precio">$800</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Pan de bono </h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>pan con una contextura suave y a la vez dura, pan de queso.</p>
                                  <p><b>Peso:</b> 70 gramos</p>
                                  <p><b>Cantidad disponible:</b> 100</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="slider">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                              <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                            </div>
                            <div class="product-info">
                              <h3>Pan de yuca</h3>
                              <p class="precio">$700</p>
                              <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                            </div>
                            <div class="popup">
                              <div class="popup-content">
                                <div class="product-image">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                                </div>
                                <div class="product-details">
                                  <div class="product-header">
                                    <h3>Pan de yuca</h3>
                                    <button class="close"><i class="fas fa-times"></i></button>
                                  </div>
                                  <p>se prepara con almidón o harina de yuca, queso, mantequilla y huevos.</p>
                                  <p><b>Peso:</b> 50 gramos</p>
                                  <p><b>Cantidad disponible:</b> 100</p>
                                  <button class="add-to-cart1">Agregar al carrito</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <div class="button-pagination">
                <button id="menu-button"><a href="#" onclick="mostrarCatalogo('galletas')">1</a></button>
                <button id="menu-button"><a href="#" onclick="mostrarCatalogo('dulces')">2</a></button>
            </div>
              </div>
              <div class="product-catalog" id="panesos" style="display: none;">
                <div class="hero">
                    <div class="conteiner">
                        <div class="Nov">
                            <p>PANES
                            </p>
                        </div>
                        <hr>
                    </div>
                    <div id="nav-menu">
                        <div class="conteiner" style="position: relative;">
                            <button id="menu-button"><i class="fa fa-bars"></i></button>
                            <nav id="menu">
                                <ul>
                                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                  <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="news" style="padding-top: 70px;">
                    <div class="conteiner">
                        <div class="row">
                            <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Buñuelos</h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" >  
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Buñuelos</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>son buñuelos muy esponjosos ademas estan con buena cantidad de queso</p>
                                      <p><b>Peso:</b> 70 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Almojábanas </h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Almojábanas </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Su nombre deriva del árabe al-muyabbana, que podría traducirse como "la quesada" o "la que tiene queso", o como "torta".</p>
                                      <p><b>Peso:</b> 60 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Bizcocho de achira</h3>
                                  <p class="precio">$200</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Bizcocho de achira</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánicos de Perú y Colombia, al cual se le agrega cuajada fresca, mantequilla y yemas de huevo para, luego, hornearse.</p>
                                      <p><b>Peso:</b> 10 gramos</p>
                                      <p><b>Cantidad disponible:</b> 300</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Bizcocho de cuajada </h3>
                                  <p class="precio">$200</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Bizcocho de cuajada </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuajada.</p>
                                      <p><b>Peso:</b> 40 gramos</p>
                                      <p><b>Cantidad disponible:</b> 10</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de bono </h3>
                                  <p class="precio">$800</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de bono </h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>pan con una contextura suave y a la vez dura, pan de queso.</p>
                                      <p><b>Peso:</b> 70 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                                </div>
                                <div class="product-info">
                                  <h3>Pan de yuca</h3>
                                  <p class="precio">$700</p>
                                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                                </div>
                                <div class="popup">
                                  <div class="popup-content">
                                    <div class="product-image">
                                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                                    </div>
                                    <div class="product-details">
                                      <div class="product-header">
                                        <h3>Pan de yuca</h3>
                                        <button class="close"><i class="fas fa-times"></i></button>
                                      </div>
                                      <p>se prepara con almidón o harina de yuca, queso, mantequilla y huevos.</p>
                                      <p><b>Peso:</b> 50 gramos</p>
                                      <p><b>Cantidad disponible:</b> 100</p>
                                      <button class="add-to-cart1">Agregar al carrito</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="button-pagination">
                    <button id="menu-button"><a href="#" onclick="mostrarCatalogo('panes')">1</a></button>
                    <button id="menu-button"><a href="#" onclick="mostrarCatalogo('panesos')">2</a></button>
                </div>
                </div>
                </div>
            </div>
            <div class="product-catalog" id="panes" style="display: none;">
              <div class="hero">
                  <div class="conteiner">
                      <div class="Nov">
                          <p>PANES</p>
                      </div>
                      <hr>
                  </div>
                  <div id="nav-menu">
                      <div class="conteiner" style="position: relative;">
                          <button id="menu-button"><i class="fa fa-bars"></i></button>
                          <nav id="menu">
                              <ul>
                                <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                                <li><a href="#" onclick="mostrarCatalogo('panes')">Panes</a></li>
                                <li><a href="#" onclick="mostrarCatalogo('galletas')">Galletas</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
         
              <div class="news" style="padding-top: 70px;">
                  <div class="conteiner">
                      <div class="row">
                          <div class="col">
                              <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Buñuelos</h3>
                                <p class="precio">$700</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true" >  
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Buñuelos</h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>son buñuelos muy esponjosos ademas estan con buena cantidad de queso</p>
                                    <p><b>Peso:</b> 70 gramos</p>
                                    <p><b>Cantidad disponible:</b> 100</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="col">
                              <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Almojábanas </h3>
                                <p class="precio">$700</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true">
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Almojábanas </h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>Su nombre deriva del árabe al-muyabbana, que podría traducirse como "la quesada" o "la que tiene queso", o como "torta".</p>
                                    <p><b>Peso:</b> 60 gramos</p>
                                    <p><b>Cantidad disponible:</b> 100</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="slider">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true" class="active">
                                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Bizcocho de achira</h3>
                                <p class="precio">$200</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true">
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Bizcocho de achira</h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánicos de Perú y Colombia, al cual se le agrega cuajada fresca, mantequilla y yemas de huevo para, luego, hornearse.</p>
                                    <p><b>Peso:</b> 10 gramos</p>
                                    <p><b>Cantidad disponible:</b> 300</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                       
                            <div class="col">
                              <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Bizcocho de cuajada </h3>
                                <p class="precio">$200</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true">
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Bizcocho de cuajada </h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuajada.</p>
                                    <p><b>Peso:</b> 40 gramos</p>
                                    <p><b>Cantidad disponible:</b> 10</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Pan de bono </h3>
                                <p class="precio">$800</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true">
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Pan de bono </h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>pan con una contextura suave y a la vez dura, pan de queso.</p>
                                    <p><b>Peso:</b> 70 gramos</p>
                                    <p><b>Cantidad disponible:</b> 100</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="slider">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true" class="active">
                                <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true">
                              </div>
                              <div class="product-info">
                                <h3>Pan de yuca</h3>
                                <p class="precio">$700</p>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                              </div>
                              <div class="popup">
                                <div class="popup-content">
                                  <div class="product-image">
                                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true">
                                  </div>
                                  <div class="product-details">
                                    <div class="product-header">
                                      <h3>Pan de yuca</h3>
                                      <button class="close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <p>se prepara con almidón o harina de yuca, queso, mantequilla y huevos.</p>
                                    <p><b>Peso:</b> 50 gramos</p>
                                    <p><b>Cantidad disponible:</b> 100</p>
                                    <button class="add-to-cart1">Agregar al carrito</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </div>
                  </div>
                  <div class="button-pagination">
                    <button id="menu-button"> <a href="#" onclick="mostrarCatalogo('panes')">1</a></button>
                    <button id="menu-button"><a href="#" onclick="mostrarCatalogo('panesos')">2</a></button>
                </div>
              </div>
              </div>
              </div>

            </main>
            <footer>
                <div class="conteiner">
                    <div class="header">
                        <div class="logo">
                            <span></span>
                        </div>
                    </div>
                    <hr>
                    <div class="section">
                        <div>
                            <h2>Empresa</h2>
                            <a href="Index.php">Inicio</a>
                            <a href="ContactosUsuario.php">Contactanos</a>
                            <a href="Nosotros.php">Nosotros</a>
                        </div>
                        <div>
                            <h2>Servicios</h2>
                            <a href="">Domicilios</a>
                            <a href="">Pedios Especiales</a>
                        </div>
                        <div>
                            <h2>Redes Sociales</h2>
                            <div class="shop-cart">
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/ronaldo.stiven52">
                                            <i class="fab fa-facebook-f icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                  <a href="#">
                                  <i class="fa-brands fa-x-twitter"></i>
                                  </a>
                              </li>
                                    <li>
                                        <a href="https://wa.me/+573154875304">
                                            <i class="fab fa-whatsapp icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.instagram.com/ronaldo07_rg/">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="Rights">
                        <p>Copyright©2023LaBaguette. All right reserved</p>
                        <p>Privacy Policy Terms and conditions</p>
                    </div>
                </div>
            </footer>
        </div>
        <div id="over"class="over">
          <div id="lay" class="lay">
              <h1>Factura</h1>
              <div class="logos">
                  <img class="imgs" src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
              </div class="colum">
              <div class="col1">
                  <div class="lum" >
                      <h1>Para</h1>
                      <p>Alberto Gustabo Perez</p>
                  </div>
                  <div class="lum">
                      <h1>N°factura</h1>
                      <p>2023-000001</p>
                  </div>
                  <div class="lum">
                      <h1>Fecha</h1>
                      <p>31/01/2023</p>
                  </div>
              </div>
              <div class="sol">
                <h1>Direccion de entrega</h1>
                <p>Cll XY # AB-CD B/ ""</p>
            </div>
            <div class="linea"></div>
              <div class="col2">
                  <div class="lum">
                      <h1>Cantidad</h1>
                      <p>03</p>
                      <p>05</p>
                  </div>
                  <div class="lum">
                      <h1>Articulo</h1>
                      <p>galletas</p>
                      <p>panes</p>
                  </div>
                  <div class="lum">
                      <h1>Producto</h1>
                      <p>cucas</p>
                      <p>pan de coco</p>
                  </div>
                  <div >
                      <h1>Total</h1>
                      <p>$1.500</p>
                      <p>$15.000</p>
                  </div>
              </div>
              <div class="linea"></div>
              <div class="col3">
                  <div class="domi">
                      <h1>Domicilo</h1>
                      <p>$2.000</p>
                  </div>
                  <div class="domi">
                      <h1>Subtotal</h1>
                      <p>$18.500</p>
                  </div>
              </div>
              <div>
                <button id="bon" class="bon">Volver al inicio</button>
              </div>
          </div>
      </div>
        </div>
    </body>
    <script src="../assets/js/mainCatalogo.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/botonSubtotal.js"></script>
</html>