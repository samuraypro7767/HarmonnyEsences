<!--Actualizar la base de datos-->
<?php

include("../crud-registro/conexion.php");
$connect=conexion();

$id_usuario=$_POST['id_usuario'];
$name_usuario=$_POST['name_usuario'];
$email_usuario=$_POST['email_usuario'];
$password_usuario=$_POST['password_usuario'];

$sql="UPDATE registro SET  name_usuario='$name_usuario',email_usuario='$email_usuario',
password_usuario='$password_usuario' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../iniciocrud.php");
    }
    else{
        echo "no se pudo";
    }
?>