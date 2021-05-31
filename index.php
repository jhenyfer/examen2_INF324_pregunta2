<?php
include "Header.php";
include "conexion.inc.php";
session_start();
?>
<center>
        <div class="fila">
            <section class="contenido">
                <article class="art">
                    <h1>Bienvenido</h1>
                    <p>
                        Introduzca su cedula de identidad, si esta aprobado se habilita su inscripcion. 
                    </p>
                </article>
            </section>
           
        </div>
        <center>

        <form method = "GET" action="motor.php">
        
        <div>
        <div class = "form-element">
        <input type = "ci" placeholder = "Cedula de identidad" name = "ci"/>
        </div>
        
        <div class = "form-element">
            <br>
        <input type="text" name="F1">
        <input type="text" name="p1">
       
        </div>
        
        </div>
        </form>

        <form method = "GET" action="motor.php">
        
        <input type="hidden" value="F1" name="flujo"/>
	    <input type="hidden" value="P1" name="proceso"/>

        <button type = "submit">Ingresar</button>
    
        </form>

        </center>
        <?php
        
        if(isset($_POST['ingresarnuevo'])){
            $ci = $_POST['ci'];
            $query = "SELECT * from usuario WHERE ci='$ci'";
            $query = mysqli_query($conn, $query);
            $result = mysqli_fetch_array($query);

            if (!$result) {
                echo '<p class ="error"> Usted no se encuentra en la lista de aprobados.</p>';
            }
            else {
                $_SESSION['ci_usuario'] = $result['ci'];
                $_SESSION['nota'] = $result['nota'];
                header('Location:LlenarFormulario.inc.php');
            }
        }
        
        
        ?>
        
        <form method = "post" action="">
        
        <div>
        <label><h2>Si ya esta inscrito inicie sesion</h2></label>
        
        <div class = "form-element">
        <br>
        <input type = "text" placeholder = "Usuario" name = "usuario"/>
        </div>
        
        <div class = "form-element">
        <br>
        <input type = "password" placeholder = "Password" name = "password"/>
        </div>
        
        <div class = "form-element">
            <br>
        <select name = "roles">
                    <option value = "">Seleccione rol</option>
                    <option value = "1">ESTUDIANTE</option>
                    <option value = "2">KARDIXTA</option>
        
        </select>
        </div>
        
        <div class = "form-element">
            <br>
        <button name = "ingresarinscrito" type = "submit">Ingresar</button>
        </div>
        
        </div>
        </form>
        
        
        <?php
        include('conexion.inc.php');
        if (isset($_POST['ingresarinscrito'])) {
            $username = $_POST['usuario'];
            $password = $_POST['password'];
            $rol = $_POST['roles'];
        
            $query = "SELECT * from inscrito WHERE usuario='$username'";
            $query = mysqli_query($conn, $query);
            $result = mysqli_fetch_array($query);

            if (!$result) {
                echo '<p class="error">Datos incorrectos!</p>';
            }
            else {
            if ($password == $result['password']) {
                $_SESSION['usuario'] = $result['usuario'];
                $_SESSION['user_id'] = $result['ci'];
                $_SESSION['rol'] = $result['rol'];
        
                switch ($rol) {
                    case "1":
                        header('Location:revisarInformacion.inc.php');
                        exit;
                        break;
                    case "2":
                        header('Location:bandeja.php');
                        exit;
                        break;      
                }
            }   
             else {
                echo '<p class="error">Datos erroneos!</p>';
        
                }
        
            }
        }
?>
</center>