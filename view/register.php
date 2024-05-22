<?php
include "../crud/crud-registro/conexion.php";
$connect = conexion();

if (isset($_SESSION['name_usuario'])) {
    header("Location: ./view/index.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name_usuario"];
    $email = $_POST["email_usuario"];
    $password = $_POST["password_usuario"];
    $cpassword = $_POST["cpassword_usuario"];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM registro WHERE email_usuario='$email'";
        $result = mysqli_query($connect, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO registro (name_usuario,email_usuario, password_usuario) VALUES ('$name','$email', '$password')";
            $result = mysqli_query($connect, $sql);

            if ($result) {header('location: ./index.php');
                echo "<script>alert('registro exitoso,debes iniciar sesion.')</script>";
                $name = "";
                $email = "";
                $_POST['password_usuario'] = "";
                $_POST['cpassword_usuario'] = "";
                
            } else {
                echo "<script>alert('Algo salió mal. Inténtalo de nuevo.')</script>";
            }
        } else {
            echo "<script>alert('Algo salió mal,El correo ya existe.')</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/noso0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

    <title>Registrarme</title>
</head>
<body class="fondop2">

    <header class="posision-menu">
       
        <nav id="navegacion-inicio">
            <ul class="menu-inicio">
                <li class="logo4"><img src="../img/logo.jpeg" alt=""width="80" height="70"><i id="color-logo1">Harmony</i><i id="color-logo3">Essences</i></li>
                <li><a href="inicio.php">Inicio</a></li> 
            </ul>
        </nav>
    </header>
    <div class="wrapper1">
        <form action="" method="post">
            <h1>Registrarme</h1>
                <div class="input-box">
                            <input type="text" name="name_usuario" id="name" placeholder="Nombre Completo" required>
                            <i class="icon-user-1"></i>
                </div>

                <div class="input-box">
                    <input type="email" name="email_usuario" id="email" placeholder="Correo Electronico" required>
                    <img src="../img/email.png" class="iconeye" id="eye">
                </div>
                <div class="input-box">
                    <input type="password"  name="password_usuario" id="password" class="passw" placeholder="contraseña" required>
                    <img src="../img/eye.png" class="iconeye" id="eye">

                </div>
                <div class="input-box">
                    <input type="password"  name="cpassword_usuario" id="password" class="passw" placeholder="confirmar contraseña" required>
                    <img src="../img/eye.png" class="iconeye" id="eye">

                </div>
                <script src="./view/script.js"></script>
 
            <button type="submit" class="btn"  name="submit" >Registrarme</button>
            <div class="register-link">
                <p> ¿Ya estas Registrado? <a href="./index.php">Iniciar Sesion</a></p>
            </div>
            
        </form>
        
    </div>
</body>
</html>