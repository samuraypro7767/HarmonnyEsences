<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

    <title>Agregar</title>
</head>
<body class="fondo-producto">
 

    <form action="agregar-contacto.php" method="POST" class="formulario">


    <h1>Agregar</h1>

   <div class="contenedor">
    

     
      <div class="input-contenedor">
         <input type="text" name="nom_prod" id="nom_prod" placeholder="Nombre Producto" >
      </div>

      <div class="input-contenedor">
         <input type="number" name="prec_prod"  id="prec_prod"  placeholder="Precio Producto" >
      </div>

      <div class="input-contenedor">
    <label for="desc_prod">Descripción:</label><br>
        <textarea id="desc_prod" name="desc_prod" rows="4" cols="38" ></textarea><br>
    </div>

      <div class="input-contenedor">
         <input type="number" name="descuento_prod" id="descuento_prod" placeholder="Descuento Producto"  >
      </div>


      <button type="submit" value="Actualizar"  name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
   </body>
</html>