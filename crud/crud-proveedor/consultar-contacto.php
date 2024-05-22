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
<body class="fondo-provee"><section id="fondo_cate">
    <h1 class="titulo-h1">Busqueda</h1>
        <div class="buscardor"> 
       
               <button class="button0"> <a href="../proveedor.php">Ver Base De Datos</a></button>
         
        </div>
        

        <?php
include("../crud-proveedor/conexion.php");
$connect=conexion();


$id_prov=$_POST['id_prov'];

if (mysqli_connect_errno())
{
echo "<br>";
echo "No pudo conectarse con la Base de Datos";
exit();
}

$consulta="SELECT  id_prov,nom_prov,dir_prov,tel_prov,sumi_prov,nit,nom_producto FROM proveedor where id_prov='$id_prov'";
$resultados=mysqli_query($connect, $consulta);
mysqli_set_charset($connect, "utf8");
?>
<table class="tabla-buscar">
        <thead>
        <tr>
 
                        <th>Id</th>
                        <th>Nombre Proveedor</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Suministros</th>
                        <th>nit</th>
                             <th>producto</th>
                        <th colspan="2">Acciones BD</th>
                           
                             
        </tr>        
        </thead>
        <tbody>
        <?php
                        //estructura de repetición para almacenar en el arreglo la información proporcionada por cada registro de la base de datos
                        while($filas=mysqli_fetch_assoc($resultados)){
                        ?>
                       <tr>
        <td><?php echo $filas ['id_prov'] ?> </td>
        <td><?php echo $filas ['nom_prov'] ?> </td>
        <td><?php echo $filas ['dir_prov'] ?> </td>
        <td><?php echo $filas ['tel_prov'] ?> </td>
        <td><?php echo $filas ['sumi_prov'] ?> </td>
        <td><?php echo $filas ['nit'] ?> </td>
        <td><?php echo $filas ['nom_producto'] ?> </td>
    
     
  
        <td> <a href="crud-proveedor/actualizar-contacto.php?id_prov=<?php echo $filas['id_prov']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-proveedor/delete-contacto.php?id_prov=<?php echo $filas['id_prov']?>"class="edicion"> Eliminar</a></td>
    </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>
</section>
</body>
</html>


    



