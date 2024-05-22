<!--Actualizar la base de datos-->
<?php

include("../crud-cliente/conexion.php");
$connect=conexion();

$id_cliente=$_POST['id_cliente'];
$nom_cliente=$_POST['nom_cliente'];
$contra_cliente=$_POST['contra_cliente'];
$tel_cliente=$_POST['tel_cliente'];
$dir_cliente=$_POST['dir_cliente'];


$sql="UPDATE cliente SET  nom_cliente='$nom_cliente',
contra_cliente='$contra_cliente', tel_cliente='$tel_cliente',dir_cliente='$dir_cliente' WHERE id_cliente ='$id_cliente'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../usuariocrud.php");
    }

?>







