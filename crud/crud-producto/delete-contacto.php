<!--Eliminar en la base de datos-->
<?php

include("../crud-producto/conexion.php");
$connect=conexion();

$cod_prod=$_GET['cod_prod'];

$sql="DELETE FROM producto WHERE cod_prod='$cod_prod'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../producto.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando Datos</title>
    
</head>
<body>


