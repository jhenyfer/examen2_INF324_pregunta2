<html>
<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
include "conexion.inc.php";
$sql="select * from flujoproceso where flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($resultado);
$procesoSiguiente=$fila['procesosiguiente'];

$archivo=$fila['formulario'];

?>
<body>
<h1>MOTOR DE FLUJO</h1>
<form action="controlador.php" method="GET" >
<?php
include $archivo;
?>
<br>
<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
<input type="hidden" value="<?php echo $procesoSiguiente;?>" name="procesoSiguiente"/>
<input type="hidden" value="<?php echo $archivo;?>" name="archivo"/>

<input type="submit" value="Anterior" name="Anterior"/>
<input type="submit" value="Siguiente" name="Siguiente"/>
</form>
</body>
</html>