<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">

    <title>Agregar</title>
</head>
<body class="fondo-cate"><section id="fondo_cate">
 

    <form action="agregar-contacto.php" method="POST" class="formulario">


    <h1>Agregar</h1>

   <div class="contenedor">
    

     
      <div class="input-contenedor">
         <input type="number" name="cantidad_categoria" id="cantidad_categoria"  placeholder="Cantidad" >
      </div>

      <div class="input-contenedor">
         <input type="number" name="precio_categoria"  id="precio_categoria"  placeholder="Precio" >
      </div>


      <div class="input-contenedor">
         <input type="text" name="nom_categoria" id="nom_categoria"  placeholder="Nombre De La Categoria"  >
      </div>

      <div class="input-contenedor">
         <input type="date" name="año_categoria" id="año_categoria" placeholder="Año categoria"  >
      </div>


      <button type="submit" value="Actualizar"  name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
    </section>
   </body>
</html>