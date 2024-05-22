<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

   
    <title>Editar</title>
</head>
<body class="fondo-producto"><section id="fondo_cate">
        <!--Consultar la base de datos-->

        <?php 
           include("../crud-producto/conexion.php");
            $connect=conexion();

        $cod=$_GET['cod_prod'];
        $sql="SELECT * FROM producto WHERE cod_prod='$cod'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

       

        <form action="../crud-producto/update-contacto.php" method="POST" class="formulario">


 <h1>Editar Informacion Producto</h1>

<div class="contenedor">
    <div class="input-contenedor">

    <input type="number" name="cod_prod" value="<?php echo $filas['cod_prod']  ?>" placeholder="Codigo ">
    </div>

    <div class="input-contenedor">
        <input type="text" name="nom_prod" value="<?php echo $filas['nom_prod']  ?>" placeholder="Nombre Producto" >
    </div>

    <div class="input-contenedor">
        <input type="text" name="prec_prod" value="<?php echo $filas['prec_prod']  ?>" placeholder="Precio Del Producto" >
    </div>


    <div class="input-contenedor">
         
        <textarea id="desc_prod" name="desc_prod" rows="4" cols="38.6" value="<?php echo $filas['desc_prod']  ?>" placeholder="Descripcion del producto:"></textarea><br>
    </div>

    <div class="input-contenedor">
        <input type="number" name="descuento_prod" value="<?php echo $filas['descuento_prod']  ?>" placeholder="digite el porcentaje"  >
    </div>


    <button type="submit" value="Actualizar" class="button0">Actualizar</button>
  


</div>
</form>
</section>
</body>
</html>