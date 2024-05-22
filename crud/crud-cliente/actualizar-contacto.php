<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

   
    <title>Editar</title>
</head>
<body class="fondo-clie"><section id="fondo_cate">
        <!--Consultar la base de datos-->

        <?php 
           include("../crud-cliente/conexion.php");
            $connect=conexion();

        $id=$_GET['id_cliente'];
        $sql="SELECT * FROM cliente WHERE id_cliente='$id'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

       

        <form action="../crud-cliente/update-contacto.php" method="POST" class="formulario">


 <h1>Editar Informacion Cliente</h1>

<div class="contenedor">
    <div class="input-contenedor">

    <input type="number" name="id_cliente" value="<?php echo $filas['id_cliente']  ?>" placeholder="Nº Identificacion ">
    </div>

    <div class="input-contenedor">
        <input type="text" name="nom_cliente" value="<?php echo $filas['nom_cliente']  ?>" placeholder="Nombre" >
    </div>

    <div class="input-contenedor">
        <input type="text" name="contra_cliente" value="<?php echo $filas['contra_cliente']  ?>" placeholder="Contraseña" >
    </div>


    <div class="input-contenedor">
        <input type="number" name="tel_cliente" value="<?php echo $filas['tel_cliente']  ?>" placeholder="Numero telefonico"  >
    </div>

    <div class="input-contenedor">
        <input type="text" name="dir_cliente" value="<?php echo $filas['dir_cliente']  ?>" placeholder="Direccion"  >
    </div>


    <button type="submit" value="Actualizar" class="button0">Actualizar</button>
  


</div>
</form>
</section>
    
</body>
</html>