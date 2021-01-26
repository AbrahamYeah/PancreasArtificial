<!DOCTYPE html>
<?php
include("sesion.php");
include("conexion.php");
?>
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
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <li class="nav-item">
            <a class="nav-link" href="planos.php">Planos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Componentes</a>
          </li>

        </ul>
      </div>
    </nav>

  </div>
  <!-- Fin de la navegación -->

  <!-- Contenido -->

  <div class="py-5">
    <!-- Sección 1: precios -->
    <div class="container-fluid bg-warning py-5">
      <div class="container">
        <div class="row">

          <!-- Primer articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">950</span><span>MX</span>
                </div>
                <p class="h1 py-1">Raspberry PI</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>

          <!-- Segundo articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">250</span><span>MX</span>
                </div>
                <p class="h1 py-1">Monitor de glucosa continuo</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>

          <!-- Tercer articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">129</span><span>MX</span>
                </div>
                <p class="h1 py-1">Medtronic CareLink USB</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- Fin de la sección 1 -->

    <!-- Sección 2: precios -->
    <div class="container-fluid bg-warning py-5">
      <div class="container">
        <div class="row">

          <!-- Primer articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">250</span><span>MX</span>
                </div>
                <p class="h1 py-1">Bateria</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>

          <!-- Segundo articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">550</span><span>MX</span>
                </div>
                <p class="h1 py-1">Contenedor de Insulina</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>

          <!-- Tercer articulo -->
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-block">
                <div class="py-3">
                  <span class="h1">$</span><span class="display-1 align-middle">129</span><span>MX</span>
                </div>
                <p class="h1 py-1">Medtronic CareLink USB</p>
                <h4 class="card-title">Precio especial</h4>
                <p class="card-text">Puede variar con los gastos de envio e importación.</p>
                <a href="#" class="btn btn-primary">¡Adquierelo ya!</a>
              </div>
              <div class="card-footer text-muted">
                Hace 2 días
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- Fin de la sección 2 -->

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