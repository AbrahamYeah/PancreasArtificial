<?php
function conexion(){
    $conexion = mysql_connect("localhost","root","") or die ('No se ha podido conectar al servidor');
    mysql_select_db('jiang') or die ('No se pudo seleccionar la base de datos');
}

function menu(){
    $url=""; //este es la url_raiz, ideal cuando tu web esta en otros niveles de carpetas
    function cargarmenu($id)
        {
        $query="select nombre,id,url from ji_secciones where idseccion='$id'";
        $result=mysql_query($query);

        while($fila=mysql_fetch_array($result)){
            $nombre=$fila['nombre'];
            $url=$fila['url'];

            $query2="select id from ji_secciones where idseccion='".$fila['id']."'";
            $result2=mysql_query($query2);

            if ($fila2=mysql_fetch_array($result2)){
                echo "<li><a href='$url'>$nombre</a>
                        <ul>   ";
                        cargarmenu($fila['id']);
               echo "</ul>
                     </li>";
            }else{
                echo "<li><a href='$url'>".$fila['nombre']."</a></li>";
                }
          }

       }
    echo "
<ul> ";
    cargarmenu(0);// Donde 0 es el Idseccion principal
    echo "</ul>";
}  
?>
