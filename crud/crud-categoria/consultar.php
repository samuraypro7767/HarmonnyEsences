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
<body class="fondo-cate">
    <h1>Busqueda</h1>
        <div class="buscador"> 
            <div class="button">
                <a href="../categoria.php">Ver Base De Datos</a>
            </div>  
        </div>
        

    <?php
    include("../crud-categoria/conexion.php");
    $connect=conexion();

    $cod_categoria=$_POST['cod_categoria'];
    if (mysqli_connect_errno())
    {
        echo"</br>";
        echo "No pudo conectarse con la Base de Datos";
        exit();

    }

    $consulta="SELECT cod_categoria,cantidad_categoria,precio_categoria,nom_categoria,año_categoria FROM categoria Where cod_categoria='$cod_categoria'";
    $resultados=mysqli_query($connect,$consulta);
    mysqli_set_charset($connect,"utf8");
    ?> 
            
        
    <table>
             <thead>
                     
                            <th>id</th>
                            <th>Nombre</th>
                            <th>contraseñas</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                             <th colspan="2">Acciones BD</th>
             </thead> 
             <Tbody>
             <?php
    while($filas=mysqli_fetch_assoc($resultados)){
    ?>
   <tr>
        <td><?php echo $filas ['cod_categoria'] ?> </td>
        <td><?php echo $filas ['cantidad_categoria'] ?> </td>
        <td><?php echo $filas ['precio_categoria'] ?> </td>
        <td><?php echo $filas ['nom_categoria'] ?> </td>
        <td><?php echo $filas ['año_categoria'] ?> </td>
    
     
  
        <td> <a href="crud-categoria/actualizar-contacto.php?cod_categoria=<?php echo $filas['cod_categoria']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-categoria/delete-contacto.php?cod_categoria=<?php echo $filas['cod_categoria']?>"class="edicion"> Eliminar</a></td>
    </tr>


        <?php
    }
        ?>
            
            </tbody>
      


<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultados)){
    ?>
   <tr>
        <td><?php echo $filas ['cod_categoria'] ?> </td>
        <td><?php echo $filas ['cantidad_categoria'] ?> </td>
        <td><?php echo $filas ['precio_categoria'] ?> </td>
        <td><?php echo $filas ['nom_categoria'] ?> </td>
        <td><?php echo $filas ['año_categoria'] ?> </td>
    
     
  
        <td> <a href="crud-categoria/actualizar-contacto.php?cod_categoria=<?php echo $filas['cod_categoria']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-categoria/delete-contacto.php?cod_categoria=<?php echo $filas['cod_categoria']?>"class="edicion"> Eliminar</a></td>
    </tr>

        <?php
    }
        ?>
    </tbody>
</table>

</body>
</html>


    



