<!--Eliminar en la base de datos-->
<?php

include("../crud-registro/conexion.php");
$connect=conexion();

$id=$_GET['id_usuario'];

$sql="DELETE FROM registro WHERE id_usuario='$id'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../iniciocrud.php");
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


