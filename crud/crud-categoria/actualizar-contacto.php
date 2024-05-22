
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
    <title>ACTUALIZAR CATEGORIA</title>
</head>
<body class="fondo-cate">
        <?php 
             include("../crud-categoria/conexion.php");
             $connect=conexion();

        $cod_categoria=$_GET['cod_categoria'];
        $sql="SELECT * FROM categoria WHERE cod_categoria='$cod_categoria'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    


  <form action="../crud-categoria/update-contacto.php" method="POST" class="formulario">


<h1>Editar Informacion Categoria</h1>

<div class="contenedor">
   <div class="input-contenedor">
   <input type="hidden" name="cod_categoria" value="<?php echo $filas['cod_categoria']  ?>" placeholder="Id">
   </div>
   <div class="input-contenedor">
       <input type="number" name="cantidad_categoria" value="<?php echo $filas['cantidad_categoria']  ?>" placeholder="Cantidad" >
   </div>
   <div class="input-contenedor">
       <input type="number" name="precio_categoria" value="<?php echo $filas['precio_categoria']  ?>" placeholder="Precio" >
   </div>
   <div class="input-contenedor">
       <input type="text" name="nom_categoria" value="<?php echo $filas['nom_categoria']  ?>" placeholder="Nombre"  >
   </div>
   <div class="input-contenedor">
       <input type="date" name="año_categoria" value="<?php echo $filas['año_categoria']  ?>" placeholder="Fecha"  >
   </div>
   <button type="submit" value="Actualizar" class="button0">Actualizar</button>
 


</div>
</form>

</body>
</html>