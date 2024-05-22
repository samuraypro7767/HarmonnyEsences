<!--Eliminar en la base de datos-->
<?php

include("../crud-categoria/conexion.php");
$connect=conexion();

$cod_categoria=$_GET['cod_categoria'];

$sql="DELETE FROM categoria WHERE cod_categoria='$cod_categoria'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../categoria.php");
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


