
<<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion.php");

	$usuario = $_POST["usuario"];
	$name = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$edad = $_POST["edad"];
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];



	try{
		$insert = "INSERT INTO usuario (user,nombre,apellidos,edad,correo,pass) VALUES('$usuario','$name','$apellidos',$edad,'$correo','$pass')";

		$query = $bd->prepare($insert);

		$query->execute();
		header("location:login.php");
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}

 ?>
