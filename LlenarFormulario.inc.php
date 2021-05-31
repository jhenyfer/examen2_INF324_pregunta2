<?php
include "Header.php";
session_start();
include "conexion.inc.php";

$user = $_SESSION['ci_usuario'];
$flujo = $_GET['flujo'];
$proceso = $_GET['proceso'];
$tramite = "";
$fechaini = "2020-12-10";
$fechafin = "2020-12-11";

$sql="insert into seguimiento values ('$user','$flujo','$proceso','$tramite',$fechaini,$fechafin)";
$resultado=mysqli_query($conn,$sql);

?>
<center>
<h2>Formulario de Inscripcion.</h2>

<form action="inscripcion.inc.php" method="POST">

<h3>DATOS DEL ESTUDIANTE</h3> 
<div>
    <label for="name">Cedula de identidad: </label>
    <input type="text" name="ci">
</div>
<div>
    <label for="mail">Nombre completo: </label>
    <input type="text" name="nombre">

</div>
<div>
    <label for="mail">Fecha de nacimiento:</label>
    <input type="text" name="fechanacimiento">
</div>
<div>
    <label for="mail">Titulo academico:</label>
    <input type="text" name="tituloacademico">
</div>
<div>
    <label for="mail">Tipo bachiller:</label>
    <input type="text" name="tipobachiller">
</div>
<div>
    <label for="mail">Nacionalidad:</label>
    <input type="text" name="nacionalidad">
</div>
<div>
    <label for="mail">Departamento:</label>
    <input type="text" name="departamento">
</div>
<div>
    <label for="mail">Genero:</label>
    <input type="text" name="genero">
</div>
<div>
    <label for="mail">Correo electronico:</label>
    <input type="email" name="correo">
</div>
<div>
    <label for="mail">Celular:</label>
    <input type="text" name="celular">
</div>
<div>
    <label for="mail">Nro Diploma de bachiller:</label>
    <input type="text" name="numdiploma">
</div>
<div>
    <label for="mail">Direccion:</label>
    <input type="text" name="direccion">
</div>
<div>
    <label for="mail">Grupo sanguineo:</label>
    <input type="text" name="gruposanguineo">
</div>
<div>
    <label for="mail">Telefono fijo:</label>
    <input type="text" name="telefonofijo">
</div>
<br>
  <button type="submit" name = "enviardocumentos">Enviar</button>

</center>






