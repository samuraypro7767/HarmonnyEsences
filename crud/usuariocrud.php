<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilosii.css">
    <link rel="stylesheet" href="./css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
    <title>Usuario</title>

</head>
<body class="fondo-clie"><section id="fondo_cate">
<?php
 //Iniciamos Sesión en el Servidor
 session_start();
 //Se valida si el usuario inicia sesión para permitir el ingreso al CRUD

 if(empty($_SESSION["email_usuario"])){
        header("location: ../view/index.php");
 } 
 ?> 
<header>
       
       <nav id="navegacionPrincipal">
           <ul class="menuNavP">
               <li class="logo"><img src="../img/logo.jpeg" alt=""width="80" height="70"><i id="color-logo">Harmony</i><i id="color-logo2">Essences</i></li>
               <li> <a href="./cerrarsesion.php" class="textomenu">Salir</a></li>
               <li><a href="../view/inicio.php" class="textomenu">Inicio</a></li>
               <li><a href="#" class="textomenu"><img src="./img/menu-hamburguesa.png" alt="" width="35"></a>
                   <ul class="Submenu2">
                       <li><a href="./categoria.php">Categoria</a></li>
                       <li><a href="./iniciocrud.php">Registro</a></li>
                       <li><a href="./producto.php">Producto</a></li>
                       <li><a href="./proveedor.php">Proveedor</a></li>
                       <li><a href="./usuariocrud.php">Cliente</a></li>
                   </ul>
                  
           </li>
       </nav>
   </header>
   <div class="titulocrud">
   <h1 id="titulocrud">Clientes</h1>
   </div>
       
         <!--Botón de Enlace al Formulario para agregar un Contacto -->
         <div id="buscardor">

                
               <button class="button0"> <a href="crud-cliente/formulario-agregar-contacto.php">Agregar Contacto</a></button>
                
                
                <div id="buscador">
                        <form action="crud-cliente/consultar-contacto.php" method="POST" class="formulario-inicio">
                        <input type="text" id="navegador-bus"  name="id_cliente" placeholder="Digite  id">
                        <button type="submit" class="button0" value="Consultar">Consultar </button>
                        <button type="reset" class="button0" value="Limpiar">Limpiar    </button>                  
                        </form>
                                        
                                        
                </div>
        </div>

     
    <table>
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
             <Tbody>
                      </tr>

                      </tr>        
            </tbody>
      
      
     



 </body>
</html>
<?php
    include("crud-cliente/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM cliente";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
    
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
      
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="edicion"> Eliminar</a></td>
    </tr>
        <?php
    }
        ?>
</tbody>
</table>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-cliente REGISTRO</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">


   
    
    
</head>
<body>


    </section>
</body>
</html>


    



