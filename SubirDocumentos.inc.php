<?php
include "Header.php";
include "conexion.inc.php";
session_start();
?>
<h3>Felicidades, estas a un paso de completar tu inscripcion.</h3>
<p>Ahora escanea tus documentos para completar. Presiona enviar y luego siguiente.</p>

<?php

if(isset($_POST['subir'])){
    $cedulaidentidad = "";

    if(is_uploaded_file($_FILES['CedulaIdentidad']['tmp_name'])){
        $cedulaidentidad = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['CedulaIdentidad']['tmp_name'], "documentos/".$cedulaidentidad);
    }
    $certificadonacimiento = "";

    if(is_uploaded_file($_FILES['CertificadoNacimiento']['tmp_name'])){
        $certificadonacimiento = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['CertificadoNacimiento']['tmp_name'], "documentos/".$certificadonacimiento);
    }
    $titulobachiller = "";

    if(is_uploaded_file($_FILES['TituloBachiller']['tmp_name'])){
        $titulobachiller = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['TituloBachiller']['tmp_name'], "documentos/".$titulobachiller);
    }
    $sintesis = "";

    if(is_uploaded_file($_FILES['PagoMatricula']['tmp_name'])){
        $sintesis = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['PagoMatricula']['tmp_name'], "documentos/".$sintesis);
    }
    $formulariofirmado = "";

    if(is_uploaded_file($_FILES['FormularioFirmado']['tmp_name'])){
        $formulariofirmado  = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['FormularioFirmado']['tmp_name'], "documentos/".$formulariofirmado);
    }
    $cartacompromiso = "";

    if(is_uploaded_file($_FILES['CartaCompromiso']['tmp_name'])){
        $cartacompromiso = date("His").rand(0,1000).".png";
        move_uploaded_file($_FILES['CartaCompromiso']['tmp_name'], "documentos/".$cartacompromiso);
    }

    $ci = $_SESSION['ci_usuario'];
    
    $query = "INSERT INTO documentos VALUES ('$ci','$cedulaidentidad','$certificadonacimiento', '$titulobachiller', '$sintesis','$formulariofirmado','$cartacompromiso'";
    $resultado = mysqli_query($conn,$query);

}
?>
<br>
<div>
<form method = "post" action = "">
    <div class = "form-group">
        <label for="">CEDULA DE IDENTIDAD    </label>
        <input type = "file" class = "form-control" name = "CedulaIdentidad" title = "Subir" required/>
</div>

    <div class = "form-group">
        <label for="">CERTIFICADO DE NACIMIENTO</label>
        <input type = "file" class = "form-control" name = "CertificadoNacimiento" title = "Subir" required/>
</div>
<div class = "form-group">
        <label for="">TITULO DE BACHILLER</label>
        <input type = "file" class = "form-control" name = "TituloBachiller" title = "Subir" required/>
</div>

    <div class = "form-group">
        <label for="">SINTESIS PAGO DE MATRICULA</label>
        <input type = "file" class = "form-control" name = "PagoMatricula" title = "Subir" required/>
</div>
<div class = "form-group">
        <label for="">FORMULARIO FIRMADO</label>
        <input type = "file" class = "form-control" name = "FormularioFirmado" title = "Subir" required/>
</div>
<div class = "form-group">
        <label for="">CARTA DE COMPROMISO</label>
        <input type = "file" class = "form-control" name = "CartaCompromiso" title = "Subir" required/>
</div>

<div class = "form-element">
    <br>
<button name = "subir" type = "submit">Subir</button>
</div>

</form>

</div>


