<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Estilos de bootstrap y los propios -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <style media="screen">
        body {
        position: relative;
        }
    </style>
    <title>Pancreas Artificial</title>
  </head>
  </head>
  <body>
    <!-- Barra de navegación -->
    <div class="container-fluid navbar-inverse">
      <nav class="navbar navbar-toggleable-md navbar-light bg-primary fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Titulo de la barra de navegación  -->
    <a class="navbar-brand" href="#">Pancreas Artificial</a>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="WhoWeAre.php">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Documentacion.php">Documentación</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Componentes.php">Componentes</a>
        </li>

      </ul>
    </div>
  </nav>

    </div>
      <!-- Fin de la barra de navegación -->

      <!-- Comienzo de contenido -->
      <!-- Encabezado -->
      <div class="container-fluid py-5 text-center">
        <p class="h1">
          Planos del Pancreas Artificial
        </p>
        <img src="img/BombINs.jpg" alt="Pancreas Artificial" class="img-fluid">
      </div>
      <!--Fin Encabezado -->

      <div class="container py-3 text-center">
        <p class="h1">
          Planos
        </p>
        <img src="img/pancreas.png" alt="planos" class="img-fluid">
        <br>
        <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/skrpZBU0VIs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <p class="text-center">
          Referencia: <span> <a href="https://www.youtube.com/watch?v=skrpZBU0VIs"> Video en Youtube por: Jez Whitworth</a> </span>
        </p>

      </div>
      <div class="container">
        <p class = "h1">
          Codigo de Rasphery Pi
        </p>
        <p>
          El codigo del Rasphery Pi esta en la plataforma de GitHub, puesto a disposición de quien lo requiera
          se puede acceder a el por medio de la siguiente liga:
          <span>
            <a href="https://github.com/bewest/insulaudit">Proyecto de GitHub aquí</a>
          </span>
          <br>
          <br>
          <img src="img/carpetaGit.jpg" alt="carpeta de GitHub" class="img-fluid">
        </p>
      </div>




      <!-- Fin de Condtenido -->

        <!-- footer -->
        <footer class="container-fluid bg-inverse text-center text-white py-5">
          <p>Sitio web desarrollado por y para estudiantes con el fin de compartir el conocimiento</p>
        </footer>
      </body>
      <!-- Scripts de bootstrap y jquery y los propios -->
      <script type="text/javascript" src="js/jquery-1.12.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
</html>
