<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
   
    
    <title >Consulta</title>

</head>
<body class="fondo-regi"><section id="fondo_cate">
    <h1 class="titulo-h1">Busqueda</h1>
       
        <div id="buscardor"> 
               <button class="button0"> <a href="../iniciocrud.php">Ver Base De Datos</a></button>
         
        </div>
        

        <?php
include("../crud-registro/conexion.php");
$connect=conexion();

$email_usuario=$_POST['id_usuario'];

if (mysqli_connect_errno())
{
echo "<br>";
echo "No pudo conectarse con la Base de Datos";
exit();
}

$consulta="SELECT  id_usuario,name_usuario,email_usuario,password_usuario FROM registro where id_usuario='$email_usuario'";
$resultados=mysqli_query($connect, $consulta);
mysqli_set_charset($connect, "utf8");
?>
<table class="tabla-buscar">
        <thead>
        <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Contraseña</th>
                                <th colspan="2">Acciones BD</th>
        </tr>        
        </thead>
        <tbody>
        <?php
                        //estructura de repetición para almacenar en el arreglo la información proporcionada por cada registro de la base de datos
                        while($filas=mysqli_fetch_assoc($resultados)){
                        ?>
                        <tr>
                                <!--Despliegue de la Información de cada registro de la BD en la Tabla HTML -->
                                <td><?php echo $filas['id_usuario'] ?></td>
                                <td><?php echo $filas['name_usuario'] ?></td>
                                <td><?php echo $filas['email_usuario'] ?></td>
                                <td><?php echo $filas['password_usuario'] ?></td>
                                <td><a href="actualizar-contacto.php?id_usuario=<?php echo $filas['id_usuario'] ?>"class="edicion">Editar</a></td>
                                <td><a href="delete-contacto.php?id_usuario=<?php echo $filas['id_usuario'] ?>"class="edicion">Eliminar</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>

</body>
</html>


    



