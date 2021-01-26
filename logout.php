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

    <style media="screen">
    a{
      color: white;
      font-family: Verdana;
    }
    </style>

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
        <li class="nav-item">
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

      <!-- Fin de la barra de navegación -->
      <div class="container text-center py-5">
        <h1>Pancreas Artificial</h1>
      	<h3>Inicie sesión antes de empezar</h3>

          <div class="row">
            <div class="login col-md-4">
          		<form method="POST" action="validarUsuario.php">
          			<div class="tdlogin">

                      <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon1">@</span>
                      <input type="text" name="usuario" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="sizing-addon1">
                    </div>
                      <div class="input-group input-group-lg">
                      <input type="password" name="contrasena" class="form-control" placeholder="" aria-label="" aria-describedby="sizing-addon1">
                    </div>
          						<br><br>
          						<a href="">¿Olvidaste tu contraseña?</a>
          						<br>
          						<br>
          						<a href="registroPHP.php">¿Aún no estas suscrito? ¡Suscribete aqui!</a>
          						<br>
          						<br>
          						<center style="padding-right: 150px;">
                        <button class="btn btn-default btn-warning btn-lg btn-block">Entrar</button>
                      </center>
                    </form>
                    </div>
                  </div>

          				<div class="login col-md-4">
          					<h3 class="text-white">¡Unete a la comunidad!</h3>
          					<img class="img-fluid" src="img/user.png">
          				</div>
          </div>

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
