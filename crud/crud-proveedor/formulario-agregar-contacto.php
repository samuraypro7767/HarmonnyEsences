<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud0.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Agregar</title>
</head>
<body class="fondo-provee"><section id="fondo_cate">
 

    <form action="agregar-contacto.php" method="POST" class="formulario">


    <h1>Agregar</h1>

   <div class="contenedor">
    

   <div class="input-contenedor">
         <input type="text" name="id_prov" id="id_prov" placeholder="Id" >
      </div>
      <div class="input-contenedor">
         <input type="text" name="nom_prov" id="nom_prov"  placeholder="Nombre" >
      </div>

      <div class="input-contenedor">
         <input type="text" name="dir_prov"  id="dir_prov"  placeholder="Direccion" >
      </div>


      <div class="input-contenedor">
         <input type="number" name="tel_prov" id="tel_prov"  placeholder="Numero telefonico"  >
      </div>

      <div class="input-contenedor">
         <input type="number" name="sumi_prov" id="sumi_prov" placeholder="Cantidad Suministros"  >
      </div>
      <div class="input-contenedor">
         <input type="number" name="nit" id="sumi_prov" placeholder="nit"  >
      </div>
      <div class="input-contenedor">
         <input type="text" name="nom_producto" id="sumi_prov" placeholder="nombre del producto"  >
      </div>

      <button type="submit" value="Actualizar"  name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
   </body>
</html>