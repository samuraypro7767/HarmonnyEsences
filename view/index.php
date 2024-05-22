 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/noso0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

    <title>Inicio de sesion</title>
</head>
<body class="fondop1">
    <header class="posision-menu">
       
        <nav id="navegacion-inicio">
            <ul class="menu-inicio">
                <li class="logo4"><img src="../img/logo.jpeg" alt=""width="80" height="70"><i id="color-logo1">Harmony</i><i id="color-logo3">Essences</i></li>
                <li><a href="inicio.php" class="textoinicio">Inicio</a></li> 
        </nav>
    </header>
    <div class="wrapper">
        <form action="" method="POST">
        <?php 
        include('../crud/validacion.php');
        ?>
            <h1>Iniciar sesion</h1>
                <div class="input-box">
                        <input type="text" name="email_usuario" id="name" placeholder="Correo Electronico" required>
                        <i class="icon-user-1"></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password_usuario" id="password" placeholder="Contraseña" required>
                    <i class="icon-lock"></i>
                </div>
                
            <div class="remember-forgot">
                <label><input type="checkbox">Recordar</label>
                <a href="#">¿Has olvidado la contraseña?</a>
            </div>
        
           
            <a href="./view/inicio.php"> <input type="submit" value="Iniciar Sesion" class="btn" name="boton"></a>
       
            <div class="register-link">
                <p> ¿No tienes una cuenta? <a href="./register.php">Registrarme</a></p>
            </div>
        </form>
        <!-- <form action="" method="POST" class="formulario1">   
        <?php 
        include('../crud/validacion.php');
        ?>
        <h1>Iniciar Sesion</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <img src="img/user.png" class="icon" alt="user" >
                <input type="email" name="email_usuario" id="name" placeholder="Correo Electronico" required>
            </div>

            <div class="input-contenedor">
                <img src="img/pasword.png" class="icon" alt="password" >
                <input type="password" name="password_usuario" id="password" placeholder="Contraseña" required>
            </div>

          <a href="./view/inicio.php"> <input type="submit" value="Iniciar Sesion" class="button" name="boton"></a> 
            <br>
            <br>
            <p>Al Iniciar Sesion acepta nuestras condiciones de uso y politica de privacidad.</p>
            <p>¿No tienes cuenta?<a class="link" href="view/register.php">Registrarme</a></p>
        </div>
    </form> -->
    </div>  <script src="./view/script.js"></script>
</body>
</html> 
