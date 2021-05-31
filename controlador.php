<?php

$flujo=$_GET["flujo"];//recibe el parametro "nombre" de los datos enviados
$proceso=$_GET["proceso"];
$procesoSiguiente=$_GET["procesoSiguiente"];// del anterior form
$archivo = $_GET["archivo"];

include "conexion.inc.php";
include "controlador".$archivo;

if(isset($_GET["Anterior"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='$procesoSiguiente'";
	}

$resultado=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($resultado);
$procesoEnvia=$fila['proceso'];
$archivoEnvia="motor.php?flujo=".$flujo."&proceso=".$procesoEnvia;
header("Location:".$archivoEnvia);
?>
