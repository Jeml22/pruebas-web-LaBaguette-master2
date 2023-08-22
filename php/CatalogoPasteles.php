<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['role'];
if ($varsesion == NULL || $varsesion = '') {
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
  <link rel="stylesheet" href="../assets/css/Default-Styles/PagarCarrito.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Catalogs.css">
  <link rel="stylesheet" href="../assets/css/Default-Styles/Footer-and-Header.css">
  <link rel="icon" href="https://raw.githubusercontent.com/Ronaldo07rgr/Repositorio_LaBaguette/master/assets/Icon/LaBaguette.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                <a href="">
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
                <a href="">
                  <i class="fab fa-instagram icon"></i>
                </a>
              </li>
            </ul>

            <div class="user">

              <a href="/baguette/usuario.html">
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
                  <div class="cam">

                    <button class="bott" id="subtotal">Pagar Subtotal: $10.000</button>
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
              <a href="iniciado.php">
                <p>INICIO</p>
              </a>
              <a href="#" class="has-submenu">
                <p>NOSOTROS</p>
              </a>
              <ul class="submenu">
                <li><a href="Nosotros.php">MISION Y VISION</a></li>
                <li><a href="Nosotros.php">QUIENES SOMOS</a></li>
              </ul>
            </nav>


            <div class="logo">
              <a href="iniciado.php"><img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Encabezado%20y%20pie%20de%20pagina/LaBaguette-Encabezado.png?raw=true"></a>
            </div>


            <nav>
              <a href="ContactosUsuario.php">
                <p>CONTACTOS</p>
              </a>
              <a href="Sucursales.php">
                <p>SUCURSALES</p>
              </a>
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
                  <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de nuez </h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de nuez </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>esta novedad es una de las tortas mas deliciosas pedidas por los clientes ya sea por su
                        esponjosidad y su gran sabor a nuez y chocolate.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Postre de maracuyá </h3>
                  <p class="precio">$4.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Postre de maracuyá </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>70 g de mantequilla sin sal a temperatura ambiente · 75 g de aceite de canola o vegetal · 740 g
                        de azúcar blanca · 6 huevos · 210 ml de jugo de maracuyá.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Red velvet cake</h3>
                  <p class="precio">$5.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Red velvet cake</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Tres sabores fuertes se mezclan para darle al Red Velvet Cake ese gusto particular: la vainilla
                        de base, una insinuación de chocolate y el lustre de queso crema.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta aliñada casera </h3>
                  <p class="precio">$2.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta aliñada casera </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>cremar mantequilla, azúcar y la ralladura de naranja hasta que observemos que la mantequilla
                        tomó un tono más claro.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Brownie</h3>
                  <p class="precio">$3.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Brownie</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Al quedarse compacto, crujiente por fuera y tierno por dentro, el brownie presenta un color
                        marrón oscuro que hace que este nombre le venga como anillo al dedo.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 30</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Cupcakes </h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Cupcakes </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>ingredientes para conseguir el sabor y color que mejor complementa al bizcocho preparado. Aquí
                        no puede faltar el chocolate, la fresa, la canela o el limón. En primer lugar, hablamos del
                        frosting.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination">
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('novedades')">1</a></button>
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('noticia')">2</a></button>
        </div>
      </div>
      <div class="product-catalog" id="noticia" style="display: none;">
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
                  <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de nuez </h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de nuez </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>esta novedad es una de las tortas mas deliciosas pedidas por los clientes ya sea por su
                        esponjosidad y su gran sabor a nuez y chocolate.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Postre de maracuyá </h3>
                  <p class="precio">$4.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Postre de maracuyá </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>70 g de mantequilla sin sal a temperatura ambiente · 75 g de aceite de canola o vegetal · 740 g
                        de azúcar blanca · 6 huevos · 210 ml de jugo de maracuyá.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Red velvet cake</h3>
                  <p class="precio">$5.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Red velvet cake</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Tres sabores fuertes se mezclan para darle al Red Velvet Cake ese gusto particular: la vainilla
                        de base, una insinuación de chocolate y el lustre de queso crema.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta aliñada casera </h3>
                  <p class="precio">$2.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta aliñada casera </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>cremar mantequilla, azúcar y la ralladura de naranja hasta que observemos que la mantequilla
                        tomó un tono más claro.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Brownie</h3>
                  <p class="precio">$3.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Brownie</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Al quedarse compacto, crujiente por fuera y tierno por dentro, el brownie presenta un color
                        marrón oscuro que hace que este nombre le venga como anillo al dedo.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 30</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Cupcakes </h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Cupcakes </h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>ingredientes para conseguir el sabor y color que mejor complementa al bizcocho preparado. Aquí
                        no puede faltar el chocolate, la fresa, la canela o el limón. En primer lugar, hablamos del
                        frosting.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination">
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('novedades')">1</a></button>
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('noticia')">2</a></button>
        </div>
      </div>
      <div class="product-catalog" id="fermentados" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>PASTELES FERMENTADOS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de banano</h3>
                  <p class="precio">$500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de banano</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>torta esponjosa basada en en babano y con pedacitos de queso.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Choco frambuesa</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Choco frambuesa</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>su propio nombre deleita lo delicioso que es ya que lleva chocolate con frambuesas en la arriba
                        del pastel.</p>
                      <p><b>Peso:</b> 250 gramos</p>
                      <p><b>Cantidad disponible:</b> 5/p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de café</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de café</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>esta torta es una de las mas vendidas ya sea por su delicioso sabor a café .</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 35</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta auyama</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta auyama</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>LLa torta de auyama tipo pudín, en esta torta les ofrecemos con pedacitos de queso para más
                        sabor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de coco</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de coco</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Las esponjosas capas de pastel se cubren de un sabroso glaseado de coco y trozos de coco para
                        crear lo que será la torta más codiciada de la temporada.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Pastel de mantequilla</h3>
                  <p class="precio">$2.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Pastel de mantequilla</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>La tarta dulce consiste en un relleno de mantequilla, azúcar, almíbar y huevo, horneados en una
                        masa de hojaldre hasta que el relleno esté semisólido con una parte superior crujiente.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination">
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('fermentados')">1</a></button>
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('fermentos')">2</a></button>
        </div>
      </div>
      <div class="product-catalog" id="fermentos" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>PASTELES FERMENTADOS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de banano</h3>
                  <p class="precio">$500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de banano</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>torta esponjosa basada en en babano y con pedacitos de queso.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Choco frambuesa</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Choco frambuesa</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>su propio nombre deleita lo delicioso que es ya que lleva chocolate con frambuesas en la arriba
                        del pastel.</p>
                      <p><b>Peso:</b> 250 gramos</p>
                      <p><b>Cantidad disponible:</b> 5/p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de café</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de café</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>esta torta es una de las mas vendidas ya sea por su delicioso sabor a café .</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 35</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta auyama</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta auyama</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>LLa torta de auyama tipo pudín, en esta torta les ofrecemos con pedacitos de queso para más
                        sabor.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta de coco</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta de coco</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Las esponjosas capas de pastel se cubren de un sabroso glaseado de coco y trozos de coco para
                        crear lo que será la torta más codiciada de la temporada.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 20</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Pastel de mantequilla</h3>
                  <p class="precio">$2.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Pastel de mantequilla</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>La tarta dulce consiste en un relleno de mantequilla, azúcar, almíbar y huevo, horneados en una
                        masa de hojaldre hasta que el relleno esté semisólido con una parte superior crujiente.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination">
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('fermentados')">1</a></button>
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('fermentos')">2</a></button>
        </div>
      </div>
      <div class="product-catalog" id="esponjosos" style="display: none;">
        <div class="hero">
          <div class="conteiner">
            <div class="Nov">
              <p>PASTELES ESPONJOSOS</p>
            </div>
            <hr>
          </div>
          <div id="nav-menu">
            <div class="conteiner" style="position: relative;">
              <button id="menu-button"><i class="fa fa-bars"></i></button>
              <nav id="menu">
                <ul>
                  <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                  <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Ponqué tradicional</h3>
                  <p class="precio">$4.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Ponqué tradicional</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>El Ponqué Ramo Tradicional es la semilla con la que inició la historia de la compañía y el
                        origen de las caras de ponqué de los colombianos.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 30</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>postre de limón</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>postre de limón</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Este delicioso postre está hecho con zumo natural de limón, crema de leche, galletas caseras y
                        leche condensada.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Torta húmeda de chocolate</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Torta húmeda de chocolate</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>pastel tradicionalmente redondo compuesto de una o más capas de masa dulce cocida al horno,
                        rellenadas y decoradas con crema pastelera, chocolate, fruta u otros ingredientes..</p>
                      <p><b>Peso:</b> 280 gramos</p>
                      <p><b>Cantidad disponible:</b> 15</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Pastel de queso japones</h3>
                  <p class="precio">$1.000</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Pastel de queso japones</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>astel suave y esponjoso que recuerda al algodón y es uno de los postres típicos de los
                        restaurantes y cafeterías japonesas.</p>
                      <p><b>Peso:</b> 150 gramos</p>
                      <p><b>Cantidad disponible:</b> 6</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Donas</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Donas</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>pan dulce que se hornea o se fríe. Algunas donas se hacen en forma de aro, mientras que otras
                        se ven más como bollos y están llenas de crema o mermelada.</p>
                      <p><b>Peso:</b> 100 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="slider">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(1).webp?raw=true" class="active">
                  <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(2).webp?raw=true">
                </div>
                <div class="product-info">
                  <h3>Pastel de plátano esponjoso</h3>
                  <p class="precio">$1.500</p>
                  <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                </div>
                <div class="popup">
                  <div class="popup-content">
                    <div class="product-image">
                      <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(1).webp?raw=true">
                    </div>
                    <div class="product-details">
                      <div class="product-header">
                        <h3>Pastel de plátano esponjoso</h3>
                        <button class="close"><i class="fas fa-times"></i></button>
                      </div>
                      <p>Este banana bread o pan de plátano es un auténtico festival de sabores.</p>
                      <p><b>Peso:</b> 200 gramos</p>
                      <p><b>Cantidad disponible:</b> 10</p>
                      <button class="add-to-cart1">Agregar al carrito</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-pagination">
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('esponjosos')">1</a></button>
          <button id="menu-button"><a href="#" onclick="mostrarCatalogo('blando')">2</a></button>
        </div>
        <div class="product-catalog" id="blando" style="display: none;">
          <div class="hero">
            <div class="conteiner">
              <div class="Nov">
                <p>PASTELES ESPONJOSOS</p>
              </div>
              <hr>
            </div>
            <div id="nav-menu">
              <div class="conteiner" style="position: relative;">
                <button id="menu-button"><i class="fa fa-bars"></i></button>
                <nav id="menu">
                  <ul>
                    <li><a href="#" onclick="mostrarCatalogo('novedades')">Novedades</a></li>
                    <li><a href="#" onclick="mostrarCatalogo('fermentados')">P.Fermentados</a></li>
                    <li><a href="#" onclick="mostrarCatalogo('esponjosos')">P.Esponjosos</a></li>
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
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>Ponqué tradicional</h3>
                    <p class="precio">$4.500</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>Ponqué tradicional</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>El Ponqué Ramo Tradicional es la semilla con la que inició la historia de la compañía y el
                          origen de las caras de ponqué de los colombianos.</p>
                        <p><b>Peso:</b> 100 gramos</p>
                        <p><b>Cantidad disponible:</b> 30</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col">
                  <div class="slider">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>postre de limón</h3>
                    <p class="precio">$1.000</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>postre de limón</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>Este delicioso postre está hecho con zumo natural de limón, crema de leche, galletas caseras y
                          leche condensada.</p>
                        <p><b>Peso:</b> 100 gramos</p>
                        <p><b>Cantidad disponible:</b> 10</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="slider">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>Torta húmeda de chocolate</h3>
                    <p class="precio">$1.500</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>Torta húmeda de chocolate</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>pastel tradicionalmente redondo compuesto de una o más capas de masa dulce cocida al horno,
                          rellenadas y decoradas con crema pastelera, chocolate, fruta u otros ingredientes..</p>
                        <p><b>Peso:</b> 280 gramos</p>
                        <p><b>Cantidad disponible:</b> 15</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="slider">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>Pastel de queso japones</h3>
                    <p class="precio">$1.000</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>Pastel de queso japones</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>astel suave y esponjoso que recuerda al algodón y es uno de los postres típicos de los
                          restaurantes y cafeterías japonesas.</p>
                        <p><b>Peso:</b> 150 gramos</p>
                        <p><b>Cantidad disponible:</b> 6</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="slider">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>Donas</h3>
                    <p class="precio">$1.500</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>Donas</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>pan dulce que se hornea o se fríe. Algunas donas se hacen en forma de aro, mientras que otras
                          se ven más como bollos y están llenas de crema o mermelada.</p>
                        <p><b>Peso:</b> 100 gramos</p>
                        <p><b>Cantidad disponible:</b> 10</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="slider">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(1).webp?raw=true" class="active">
                    <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(2).webp?raw=true">
                  </div>
                  <div class="product-info">
                    <h3>Pastel de plátano esponjoso</h3>
                    <p class="precio">$1.500</p>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i><span>Agregar</span></button>
                  </div>
                  <div class="popup">
                    <div class="popup-content">
                      <div class="product-image">
                        <img src="https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(1).webp?raw=true">
                      </div>
                      <div class="product-details">
                        <div class="product-header">
                          <h3>Pastel de plátano esponjoso</h3>
                          <button class="close"><i class="fas fa-times"></i></button>
                        </div>
                        <p>Este banana bread o pan de plátano es un auténtico festival de sabores.</p>
                        <p><b>Peso:</b> 200 gramos</p>
                        <p><b>Cantidad disponible:</b> 10</p>
                        <button class="add-to-cart1">Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="button-pagination">
            <button id="menu-button"><a href="#" onclick="mostrarCatalogo('esponjosos')">1</a></button>
            <button id="menu-button"><a href="#" onclick="mostrarCatalogo('blando')">2</a></button>
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
            <a href="#">Domicilios</a>
            <a href="#">Pedios Especiales</a>
          </div>
          <div>
            <h2>Redes Sociales</h2>
            <div class="shop-cart">
              <ul>
                <li>
                  <a href="https://www.facebook.com/ronaldo.stiven52">
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
                  <a href="https://www.instagram.com/ronaldo07_rg/">
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

</body>
<script src="../assets/js/mainCatalogo.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/botonSubtotal.js"></script>

</html>