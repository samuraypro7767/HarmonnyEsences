<?php
//Iniciamos Sesión en el Servidor
session_start();
//Verificamos si el usuario y contraseña ingresados para iniciar sesión se encuentran en la tabla registro en la BD.
if (!empty($_POST["boton"])) {
//Se verifica si se ingresaron datos en el formulario, si no tiene campos vacios
    if(!empty($_POST["email_usuario"]) and !empty($_POST["password_usuario"])){
        $email_usuario=$_POST["email_usuario"]; //Si el formulario no tiene campos vacios se reciben los datos del usuario y contraseña y se almacenan.
        $password_usuario=$_POST["password_usuario"];
//Solicitud de conexión a la base de datos
        include("../crud/crud-registro/conexion.php");
        $connect=conexion();
//Se realiza consulta a la base de datos
//Se seleccionan el usuario y la contraseña de la tabla de registro que correspondan con el usuario y contraseña digitados en el formulario
        $sql="SELECT * FROM registro WHERE email_usuario='$email_usuario' and password_usuario='$password_usuario'";
        $resultado=mysqli_query($connect,$sql);
        $filas=mysqli_fetch_assoc($resultado);
//si existe el registro del administrador, se almacena el codigo de identificación y el correo del usuario en la variable de sesión
        if($filas){
            $_SESSION["id_usuario"]=$filas["id_usuario"];
            $_SESSION["email_usuario"]=$filas["email_usuario"];
//se redirecciona a la página de inicio del Crud      
            header("Location: ../crud/iniciocrud.php");
         }else{
//S i no se inicia sesión con los datos correctos se informa que se ha denegado el acceso al Crud
            echo "</br><h2>Acceso Denegado</h2>";
         }
    }else{ //Se informa que no se ingresaron datos al formulario de inicio de sesión.
        echo "</br><h2>¡Campos Vacios!</h2>";
         }
    }
            ?>