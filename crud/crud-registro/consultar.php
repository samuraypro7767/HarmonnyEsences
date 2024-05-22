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
<body class="fondo-regi">
    <h2 class="h2">Busqueda</h2>
        <div class="buscador"> 
            <div class="button">
                <a href="../iniciocrud.php">Ver Base De Datos</a>
            </div>  
        </div>
        

    <?php
    include("../crud-registro/conexion.php");
    $connect=conexion();

    $email_=$_POST['id_usuario'];
    if (mysqli_connect_errno())
    {
        echo"</br>";
        echo "No pudo conectarse con la Base de Datos";
        exit();

    }

    $consulta="SELECT id_usuario,name_usuario,email_usuario,password_usuario,tel_usuario FROM registro Where id_usuario='$email_'";
    $resultados=mysqli_query($connect,$consulta);
    mysqli_set_charset($connect,"utf8");
    ?> 
            
        
    <table>
             <thead>
                      <tr>
                             <th>id</th>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>contraseñas</th>
                             <th>Telefono</th>
                             
                             <th colspan="2">Acciones BD</th>
                             
                      </tr>
             </thead> 
             <Tbody>
             <?php
    while($filas=mysqli_fetch_assoc($resultados)){
    ?>
    <tr>
        <td><?php echo $filas ['id_usuario'] ?> </td>
        <td><?php echo $filas ['name_usuario'] ?> </td>
        <td><?php echo $filas ['email_usuario'] ?> </td>
        <td><?php echo $filas ['password_usuario'] ?> </td>
        <td><?php echo $filas ['tel_usuario'] ?> </td>
        <td> <a href="actualizar-contacto.php?id=<?php echo $filas['id_usuario']?>"class="edicion">Editar</a></td>
        <td> <a href="delete-contacto.php?id=<?php echo $filas['id_usuario']?>"class="delete">Eliminar</a></td>
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
    <td><?php echo $filas ['id_usuario'] ?> </td>
        <td><?php echo $filas ['name_usuario'] ?> </td>
        <td><?php echo $filas ['email_usuario'] ?> </td>
        <td><?php echo $filas ['password_usuario'] ?> </td>
        <td><?php echo $filas ['tel_usuario'] ?> </td>
        <td> <a href="actualizar-contacto.php?id=<?php echo $filas['id_usuario']?>"class="edicion">Editar</a></td>
        <td> <a href="delete-contacto.php?id=<?php echo $filas['id_usuario']?>"class="edicion">Eliminar</a></td>
    </tr>
        <?php
    }
        ?>
    </tbody>
</table>

</body>
</html>


    



