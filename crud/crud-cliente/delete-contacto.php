<!--Eliminar en la base de datos-->
<?php

include("../crud-cliente/conexion.php");
$connect=conexion();

$id=$_GET['id_cliente'];

$sql="DELETE FROM cliente WHERE id_cliente='$id'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../usuariocrud.php");
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


