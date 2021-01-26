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
        <li class="nav-item active">
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

      <!-- Menu responsivo -->
      <div class="col-sm-12 hidden-md-up" >
        <nav id="menu_scroll" class="container-fluid navbar-inverse navbar navbar-light navbar-collapse">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#fat">@fat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#mdo">@mdo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#one">one</a>
                <a class="dropdown-item" href="#two">two</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#three">three</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    <!--Fin Menu responsivo -->

<!-- Condtenido -->

<div class="container py-5">

  <div class="row py-5">
    <!-- Menu normal -->
    <div class="col-xl-3">
      <nav id="menu_scroll" class="navbar navbar-light bg-light flex-column">
        <a class="navbar-brand" href="#">Índice</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link active" href="#item-1">Introducción</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ml-3 my-1" href="#item-1-1">¿Qué es la Deabetes?</a>
            <a class="nav-link ml-3 my-1" href="#item-1-2">¿Que organo es el afectado?</a>
          </nav>
          <a class="nav-link" href="#item-2">Objetivo</a>
          <a class="nav-link" href="#item-3">Desarrollo</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ml-3 my-1" href="#item-3-1">Metas del Pancreas Artificial</a>
            <a class="nav-link ml-3 my-1" href="#item-3-2">Fisiologia del Pancreas</a>
            <a class="nav-link ml-3 my-1" href="#item-3-3">Terapia de insulina</a>
            <a class="nav-link ml-3 my-1" href="#item-3-4">Terapia de insulina</a>
          </nav>
        </nav>
    </div>
<!--Fin Menu normal -->


<!-- Contenido del Scrollspy -->
    <div class="col-md-9">
      <div data-spy="scroll" data-target="#menu_scroll" >
        <h4 id="item-1">Introducción</h4>

        <p class="text-justify">El páncreas artificial es una tecnología en desarrollo para ayudar a las personas con diabetes a controlar automáticamente sus niveles de glucosa en la sangre proporcionándoles un substituto endócrino con las funciones de un páncreas saludable.
Hay varias funciones importantes exocrinas (sistema digestivo) y endócrinas (hormonas) en el páncreas, pero es la falta de producción de insulina lo que motiva a crear un substituto. Mientras el estado actual de las terapias para remplazar la insulina sea apreciada por su capacidad de salvar vidas, la tarea de regular los niveles de azúcar en la sangre con solo insulina es difícil e inadecuada.
</p>
<div class="text-center" style="padding-bottom:2em;">
  <img src="img/ImgIntro.jpg" alt="Intro" class="img-fluid">
</div>

        <h5 id="item-1-1">¿Qué es la Deabetes?</h5>
        <p class="text-justify">La diabetes mellitus es una enfermedad metabólica caracterizada por niveles de azúcar (glucosa) en sangre elevados.
A la glucosa que circula por la sangre se le llama glucemia.
El aumento de glucemia es el resultado de defectos en la secreción de insulina, en su acción o en ambas. La insulina es una hormona que fabrica el páncreas y que permite que las células utilicen la glucosa de la sangre como fuente de energía.
Un fallo de la producción de insulina, de la acción de la misma, o de ambas cosas, genera un aumento de los niveles de glucosa en la sangre (hiperglucemia). De no controlarse adecuadamente, a largo plazo, la presencia continua de glucosa alta en la sangre puede provocar alteraciones en la función de diversos órganos, especialmente los ojos, los riñones, los nervios, el corazón y los vasos sanguíneos.</p>
        <h5 id="item-1-2">¿Qué organo es el más afectado?</h5>
        <p class="text-justify">Uno de los primeros órganos que se daña a causa de la diabetes es la vista. La retinopatía diabética es una de las primeras manifestaciones de este daño. El paciente experimenta una disminución en su calidad de visión y este problema presenta diferentes grados, pero la visión ya se afectó y es un daño importante”, indica Godínez Zambrano.<br />

El riñón es otro órgano que se complica, y para regular el problema es necesario someter al paciente a diversos estudios.<br />

“También los pacientes llegan con problema de exceso de orina. Esto comienza a darse porque el azúcar tan alto ataca directamente el riñón. Cuando se identifica esto hay que mandar a hacer estudios como la depuración de creatinina para saber la capacidad de trabajo del riñón y así podemos saber en qué estado del daño se encuentra el paciente, el nivel de daño de su riñón, dependiendo del tiempo y la intensidad con que la diabetes lo ha atacado”, asevera.<br />

Sin embargo, una de las principales consecuencias de la diabetes, y de la que más se habla en tratados e investigaciones, es la del llamado pie diabético.<br />

“Éste es el más común de los daños colaterales, y es muy cruel porque incapacita de por vida a una persona; la obliga a pasar por un proceso demasiado doloroso, que es la amputación; a esto hay que agregarle el verse relegado por la sociedad. Quien sufre de pie diabético es una persona difícilmente laborable y la complicación se le triplica, tanto médica, como emocional y físicamente, porque paga el costo de la diabetes, el costo de la complicación si es que hubo operación, y las terapias”, enfatiza.<br />

No obstante, debe haber una manera de evitar esta clase de complicaciones.<br>

“Todas las complicaciones son prevenibles. Cuando nuestros pacientes llegan con nosotros los valoramos, pero sí les hacemos hincapié en que deben acepar el proceso de su enfermedad. Un paciente que acepta que es diabético ya tiene un paso delante de la enfermedad. Está comprometido con él mismo para cuidarse. El paciente que se respeta sale adelante. De esa manera podemos evitar estas complicaciones tan tristes y dolorosas”, finaliza.<br>

*Dr. Sergio Godínez Zambrano <br>
Especialista en diabetes <br>
Miembro de la Asociación Mexicana de Diabetes <br>
Educador en diabetes</p>
        <h4 id="item-2">Objetivos</h4>
        <ul class="text-justify">
          <li>
            Mejorar las terapias de remplazo de insulina hasta que el control glicémico sea prácticamente normal y tan obvio por haber evitado las complicaciones/prognosis de la diabetes mellitus causada por hiperglicemia.
          </li>

          <br>
          <li>
            Para facilitar la carga de la terapia para los pacientes con insulina-dependencia.
          </li>

        </ul>



        <h4 id="item-3">Item 3</h4>
        <p>...</p>
        <h5 id="item-3-1">Item 3-1</h5>
        <p>...</p>
        <h5 id="item-3-2">Item 3-2</h5>
        <p>...</p>
        <h5 id="item-3-3">Item 3-2</h5>
        <p>...</p>
      </div>
    </div>
    <!-- Fin Contenido Scrollspy -->

  </div>
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
