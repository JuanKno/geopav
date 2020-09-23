<!doctype html>
<html class="no-js" lang="">

<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="./vista/css/normalize.css">
  <link rel="stylesheet" href="./vista/css/all.min.css">
  <link rel="icon" href="./vista/img/icon.png" type="image/gif">

  <?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
  if ($pagina == 'index' || $pagina == 'invitados') {
    echo '<link rel="stylesheet" href="./vista/css/colorbox.css">';
  } else if ($pagina == 'conferencia') {
    echo '  <link rel="stylesheet" href="./vista/css/lightbox.css">';
  }

  ?>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <link rel="stylesheet" href="./vista/css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">
  
  <div class="barra">
    <div class="contenedor clearfix">

      <div class="logo">
        <a href="index.php">
          <img src="./vista/img/logo.png" alt="Logo">
        </a>
      </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal">
        <a href="quienes_somos.php">Quienes Somos</a>
        <a href="conferencia.php">Galeria</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Lideres</a>
        <a href="registro.php">Reservaciones</a>
        <a href="vista/admin/login.php">Login</a>
      </nav>

    </div>
    <!--Contenedor-->
  </div>
  <!--Barra-->

  <header class="site-header">
    <div class="hero">

      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-pinterest-p"></i></a>
          <a href=""><i class="fab fa-youtube"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
        </nav>

        <div class="informacion-evento">

          <div class="clearfix">
            <p class="fecha"><i class="far fa-handshake"></i> Ayuda social</p>
            <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Medellín Col</p>
          </div>

          <h1 class="nombre-sitio">GOEPAV</h1>
          <p class="slogan">Trabajo humanitario</p>
        </div>
        <!--Informacion evento-->

      </div>

    </div>
    <!--Hero-->
  </header>