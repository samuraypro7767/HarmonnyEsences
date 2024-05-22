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
<body class="fondo-sobrenosotros">
    <h1>Busqueda</h1>
        <div class="buscador"> 
            <div class="button">
                <a href="../iniciocrud.php">Ver Base De Datos</a>
            </div>  
        </div>
        

    <?php
    include("../crud-producto/conexion.php");
    $connect=conexion();

    $cod_prod=$_POST['cod_prod'];
    if (mysqli_connect_errno())
    {
        echo"</br>";
        echo "No pudo conectarse con la Base de Datos";
        exit();

    }

    $consulta="SELECT cod_prod,nom_prod,prec_prod,desc_prod,descuento_prod FROM producto Where cod_prod='$cod_prod'";
    $resultados=mysqli_query($connect,$consulta);
    mysqli_set_charset($connect,"utf8");
    ?> 
            
        
    <table>
             <thead>
                      <tr>
                            <th>Codigo</th>
                            <th>Nombre Producto</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Descuento</th>
                             
                             <th colspan="2">Acciones BD</th>
                             
                      </tr>
             </thead> 
             <Tbody>
             <?php
    while($filas=mysqli_fetch_assoc($resultados)){
    ?>
    <tr>
            <td><?php echo $filas ['cod_prod'] ?> </td>
            <td><?php echo $filas ['nom_prod'] ?> </td>
            <td><?php echo $filas ['prec_prod'] ?> </td>
            <td><?php echo $filas ['desc_prod'] ?> </td>
            <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion"> Eliminar</a></td>
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
   
    <td><?php echo $filas ['cod_prod'] ?> </td>
            <td><?php echo $filas ['nom_prod'] ?> </td>
            <td><?php echo $filas ['prec_prod'] ?> </td>
            <td><?php echo $filas ['desc_prod'] ?> </td>
            <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="edicion"> Eliminar</a></td>
    </tr>
        <?php
    }
        ?>
    </tbody>
</table>

</body>
</html>


    



