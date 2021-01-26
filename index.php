<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pancreas Artificial</title>
  <!-- Estilos de bootstrap y los propios -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="WhoWeAre.php">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Documentacion.php">Documentación</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="planos.php">Planos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Componentes.php">Componentes</a>
          </li>

        </ul>
      </div>
    </nav>

  </div>
  <!-- Fin de la barra de navegación -->

  <!-- Banner -->
  <div class="">
    <div id="BannerPortada">

      <div class="text-center container d-flex flex-column justify-content-center h-100 align-items-center">
        <h1 class="text-white " style="position: relative; text-shadow: 2px 2px 2px #000;  ">
          Desarrollo tecnologico de calidad.
        </h1>

        <p class="lead text-white py-2" style=" position: relative; text-shadow: 3px 3px 3px #000;">
          <span class="h4">Solo las personas que trabajan en este proyecto <br>
            se esfuerzan día a dia en el desarrollo <br>
            y crecimiento de la tecnologia <br>
            en pro de la salud.</span>
        </p>

        <button class="btn btn-default btn-danger" onclick="conocenos()">Conocenos</button>
      </div>

    </div>
  </div>

  <!-- Primera sección -->
  <div class="container py-5">
    <div class="row align-items-center text-right">
      <div class="col-md-6 col-sm-12">
        <h2>¿Que proposito tiene este proyecto?</h2>
        <p><b>
            Promover proyectos de este tipo en pro de la sociendad
          </b></p>
        <p>
          Teniendo en cuenta el apogeo de las enfermedades
          como en este caso es la deabetes, se debe usar
          la tecnológia en marcha para innovar las soluciones
          y mejorar la calidad de vida de la comunidad.
        </p>
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="http://gallardovela.com/wp-content/uploads/2013/05/01_medicina.jpg" class="img-fluid" alt="Tecnologia Medica">
      </div>
    </div>
  </div>

  <!-- Sección 2 -->
  <div class="container-fluid py-5 bg-danger text-center text-white">
    <div class="">
      <h2>Conocimiento al alcance de un click</h2>
      <h3>Lo que necesitas saber es más facil de lo que piensas</h3>
      <div class="display-4">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <i class="fa fa-plus-square" aria-hidden="true"></i>
        <i class="fa fa-file-code-o" aria-hidden="true"></i>
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <!-- Sección 3: precios -->
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

  <!-- Sección 4 Contacto simple -->
  <div class="container py-5">
    <div class="text-center">
      <h2>Contactanos</h2>
      <h4 class="py-4">
        Para conocer más acerca de este proyecto o sobre dudas de uso e intalación
        contactanos para asegurarnos de el mayor y mejor aprovechamiento de esta
        tecnológia.
      </h4>
    </div>
    <form class="row justify-content-center" action="#" method="post">
      <div class="form-group col-md-3">
        <input type="text" name="nombre" placeholder="Nombre completo" class="form-control" required>
      </div>
      <div class="form-group col-md-3">
        <input type="email" name="correo" placeholder="E-mail" class="form-control" required>
      </div>
      <div class="form-group col-md-3">
        <input type="number" name="numero" placeholder="Telefono celular" class="form-control">
      </div>
      <div class="col-md-12 py-4">
        <div class="row justify-content-center">
          <button class="btn btn-primary col-md-2" type="button" name="button">Enviar</button>
        </div>
      </div>
    </form>
  </div>

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