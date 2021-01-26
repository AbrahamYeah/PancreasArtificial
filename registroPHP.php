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

    </div>			<h1>Registrate en la comunidad</h1>
			<br>
			<br>
		<dir class="registro">
		<center>
		<form method="POST" onSubmit="return validar_contraseña()" action="registro.php" >
			<table>
			<tr>
				<td>
					Nombre de Usuario:
				</td>
				<td>
					<input class="acceso" id = "user" type="text" name="usuario" maxlength=15 required>
				</td>
			</tr>
			<tr>
				<td>
					Nombre:
				</td>
				<td>
					<input class="acceso" id = "name" type="text" name="nombre" maxlength=15 required>
				</td>
			</tr>
				<tr>
					<td>
					Apellidos:
					</td>
					<td>
						<input class="acceso" id = "apll" type="text" name="apellidos" maxlength=35 required>
					</td>
				</tr>
				<tr>
					 <td>
					Edad:
					</td>
					<td>
						<input class="acceso" id = "edad" type="number" name="edad" maxlength="2" required>
					</td>
				</tr>
				<tr>
					<td>
					Correo:
					</td>
					<td>
						<input class="acceso" id = "correo" type="e-mail" name="correo" maxlength=60 required>
					</td>
				</tr>

				<tr>
					<td>
					Contraseña:
					</td>
					<td>
						<input class="acceso" type="password" id="pass" name="pass" maxlength=12 required>
					</td>
				</tr>
				<tr>
					<td>
					Confirmar contraseña:
					</td>
					<td>
						<input class="acceso" type="password" id="pass1" maxlength=12 name="pass1">
					</td>
				</tr>

			</table>
			<br>
			<br>
			<button class="btnportada" onclick="validar_contrasena()">Enviar</button>
			</form>
		</center>
		</dir>

<!-- Fin de Condtenido -->

	<!-- footer -->
	<footer class="container-fluid bg-inverse text-center text-white py-5">
		<p>Sitio web desarrollado por y para estudiantes con el fin de compartir el conocimiento</p>
	</footer>
</body>
<script type="text/javascript">

	function validar_contraseña() {
	var caract_invalido = " ";
	var caract_longitud = 6;
	var cla1 = document.getElementById('pass').value;
	var cla2 = document.getElementById('pass1').value;

		if (document.getElementById('pass').value.length < caract_longitud) {
			alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
			return false;
		}
		if (document.getElementById('pass').value.indexOf(caract_invalido) > -1) {
			alert("Las claves no pueden contener espacios");
			return false;
		}
		else {
			if (cla1 != cla2) {
				alert ("Las claves introducidas no son iguales");
				return false;
			}
			else {
				alert('Contraeña correcta');
				return true;
      		}

	}
}
</script>
<!-- Scripts de bootstrap y jquery y los propios -->
<script type="text/javascript" src="js/jquery-1.12.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</html>
