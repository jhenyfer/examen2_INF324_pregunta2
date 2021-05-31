<?php
include "conexion.inc.php";
session_start();
 
 if(isset($_POST['enviardocumentos'])){
   
     $ci = $_SESSION['ci_usuario'];
     $nombre = $_POST['nombre'];
     $fechanacimiento = $_POST['fechanacimiento'];
     $tituloacademico = $_POST['tituloacademico'];
     $tipobachiller = $_POST['tipobachiller'];
     $nacionalidad = $_POST['nacionalidad'];
     $departamento = $_POST['departamento'];
     $genero = $_POST['genero'];
     $correo = $_POST['correo'];
     $celular = $_POST['celular'];
     $numdiploma = $_POST['numdiploma'];
     $direccion = $_POST['direccion'];
     $gruposanguineo = $_POST['gruposanguineo'];
     $telefonofijo = $_POST['telefonofijo'];
 }
?>
<table>
    <th scope="col">DATOS DE ESTUDIANTE</th>
    <br>
  </tr>

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


<?php
     $query = "INSERT INTO estudiante VALUES ('$ci','$nombre','$fechanacimiento','$tituloacademico','$tipobachiller','$nacionalidad','$departamento','$genero','$correo','$celular','$numdiploma','$direccion','$gruposanguineo','$telefonofijo')";
     $resultado = mysqli_query($conn, $query);
?>

