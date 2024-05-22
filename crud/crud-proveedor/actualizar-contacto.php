<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

   
    <title>Editar</title>
</head>
<body class="fondo-provee"><section id="fondo_cate">
        <!--Consultar la base de datos-->

        <?php 
           include("../crud-proveedor/conexion.php");
            $connect=conexion();

        $id=$_GET['id_prov'];
        $sql="SELECT * FROM proveedor WHERE id_prov='$id'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

       

        <form action="../crud-proveedor/update-contacto.php" method="POST" class="formulario">


 <h1>Editar Informacion Proveedor</h1>

<div class="contenedor">


    <div class="input-contenedor">
        <input type="text" name="nom_prov" value="<?php echo $filas['nom_prov']  ?>" placeholder="Nombre" >
    </div>

    <div class="input-contenedor">
        <input type="text" name="dir_prov" value="<?php echo $filas['dir_prov']  ?>" placeholder="Direccion" >
    </div>


    <div class="input-contenedor">
        <input type="number" name="tel_prov" value="<?php echo $filas['tel_prov']  ?>" placeholder="Numero telefonico"  >
    </div>

    <div class="input-contenedor">
        <input type="number" name="sumi_prov" value="<?php echo $filas['sumi_prov']  ?>" placeholder="cantidad de suministros"  >
    </div>
    <div class="input-contenedor">
        <input type="number" name="nit" value="<?php echo $filas['nit']  ?>" placeholder="nit"  >
    </div>
    <div class="input-contenedor">
        <input type="text" name="nom_producto" value="<?php echo $filas['nom_producto']  ?>" placeholder="nombre del producto"  >
    </div>


    <button type="submit" value="Actualizar" class="button0">Actualizar</button>
  


</div>
</form>
    </section>
</body>
</html>