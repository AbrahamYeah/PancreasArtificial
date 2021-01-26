<?php


$us = $_POST["usuario"];
$ps = $_POST["contrasena"];
echo "usuario:" .$us;
echo "<br>";
echo "password: ".$ps;

include("conexion.php");

//$consulta = "SELECT * FROM usuarios";
$consulta = "SELECT * FROM usuario WHERE user = '$us' AND pass = '$ps'";

echo "<br>".$consulta;
//1
$query = $bd->prepare($consulta);
//2
$query->execute();
//3
$rs = $query->fetchAll();

//imprime de forma de arreglo
echo "<pre>";//con pre todo se acomoda, sin el se vera todo de corrido
print_r($rs);


//contar filas
$filas = count($rs);


session_start();
$_SESSION["ses_nombre"] = $rs[0]["user"];
$_SESSION["ses_correo"] = $rs[0]["correo"];
$_SESSION["ses_id"] = $rs[0]["id_user"];



echo "<br>filas: ".$filas;
echo "<br>";
echo "<br>";

if($filas==1){

	//al ingresar nos manda a esta pagina
	header("location:Componentes.php");
}else  {
	echo "Invalido";
	//nos regresa a la misma pagina
	header("location:login.php?error=1");


}
?>
