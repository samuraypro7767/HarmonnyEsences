<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
    <title>Consulta</title>

</head>
<body class="fondo-clie"><section id="fondo_cate">
    <h1 class="titulo-h1">Busqueda</h1>
        <div class="buscardor"> 
       
               <button class="button0"> <a href="../usuariocrud.php">Ver Base De Datos</a></button>
         
        </div>
        

        <?php
include("../crud-cliente/conexion.php");
$connect=conexion();

$id_cliente=$_POST['id_cliente'];

if (mysqli_connect_errno())
{
echo "<br>";
echo "No pudo conectarse con la Base de Datos";
exit();
}

$consulta="SELECT  id_cliente,nom_cliente,contra_cliente,tel_cliente,dir_cliente FROM cliente where id_cliente='$id_cliente'";
$resultados=mysqli_query($connect, $consulta);
mysqli_set_charset($connect, "utf8");
?>
<table class="tabla-buscar">
        <thead>
        <tr>
 
                             <th>id</th>
                             <th>Nombre</th>
                              <th>contraseñas</th>
                             <th>Telefono</th>
                             <th>Direccion</th>
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
        <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?></td>
        <td><?php echo $filas ['tel_cliente'] ?></td>
        <td><?php echo $filas ['dir_cliente'] ?></td>
    
        <td> <a href="actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion">Editar</a></td>
        <td> <a href="delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion"> Eliminar</a></td>
    </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>
</section>
</body>
</html>


    



