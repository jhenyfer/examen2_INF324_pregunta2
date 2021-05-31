<?php
session_start();
include "Header.php";
include "conexion.inc.php";

if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
    exit;
}

if($_SESSION['rol'] == "estudiante"){

    $ci = $_SESSION['user_id'];
    $query = "SELECT * from estudiante where ci = '$ci'";
    $resultado = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($resultado);
    
    $nombre = $result['nombre'];
    $fechanacimiento = $result['fechanacimiento'];
    $tituloacademico = $result['tituloacademico'];
    $tipobachiller = $result['tipobachiller'];
    $nacionalidad = $result['nacionalidad'];
    $departamento = $result['departamento'];
    $genero = $result['genero'];
    $correo = $result['correo'];
    $celular = $result['celular'];
    $numdiploma = $result['numdiploma'];
    $direccion = $result['direccion'];
    $gruposanguineo = $result['gruposanguineo'];
    $telefonofijo = $result['telefonofijo'];
}

?>
<center>
    <h2>DATOS DE ESTUDIANTE</h2>
<table>
  <tr>
    <td>Cedula de identidad: </td>
    <td><?php echo $ci; ?></td>
  </tr>

  <tr>
    <td>Nombre completo: </td>
    <td><?php echo $nombre;?></td>
  </tr>
  <tr>
    <td>Fecha de nacimiento: </td>
    <td><?php echo $fechanacimiento; ?></td>
  </tr>
  <tr>
    <td>Titulo academico: </td>
    <td><?php echo $tituloacademico; ?></td>
  </tr>
  <tr>
    <td>tipo bachiller: </td>
    <td><?php echo $tipobachiller; ?></td>
  </tr>
  <tr>
    <td>Nacionalidad: </td>
    <td><?php echo $nacionalidad; ?></td>
  </tr>
  <tr>
    <td>Departamento: </td>
    <td><?php echo $departamento; ?></td>
  </tr>
  <tr>
    <td>Genero: </td>
    <td><?php echo $genero; ?></td>
  </tr>
  <tr>
    <td>Correo electronico: </td>
    <td><?php echo $correo; ?></td>
  </tr>
  <tr>
    <td>Celular: </td>
    <td><?php echo $celular; ?></td>
  </tr>
  <tr>
    <td>Nro de diploma: </td>
    <td><?php echo $numdiploma; ?></td>
  </tr>
  <tr>
    <td>Direccion: </td>
    <td><?php echo $direccion; ?></td>
  </tr>
  <tr>
    <td>Grupo sanguineo: </td>
    <td><?php echo $gruposanguineo; ?></td>
  </tr>
  <tr>
    <td>Telefono fijo: </td>
    <td><?php echo $telefonofijo; ?></td>
  </tr>
</table>

<h2>DETALLES DE INSCRIPCION</h2>
<p>Paralelo: </p>
<p>Nota de ingreso: </p>

<h2>DETALLES DE ACCESO</h2>
<p>Usuario: </p>
<p>Password: </p>
<br>

<button type = "button" onclick="window.location.href='salir.php';">Salir</button>


</center>
