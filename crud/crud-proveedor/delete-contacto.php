<!--Eliminar en la base de datos-->
<?php

include("../crud-proveedor/conexion.php");
$connect=conexion();

$id=$_GET['id_prov'];

$sql="DELETE FROM proveedor WHERE id_prov='$id'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../proveedor.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Datos</title>
    
</head>
<body>


