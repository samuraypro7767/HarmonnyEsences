<!--Actualizar la base de datos-->
<?php

include("../crud-producto/conexion.php");
$connect=conexion();

$cod_prod=$_POST['cod_prod'];
$nom_prod=$_POST['nom_prod'];
$prec_prod=$_POST['prec_prod'];
$desc_prod=$_POST['desc_prod'];
$descuento_prod=$_POST['descuento_prod'];


$sql="UPDATE producto SET  nom_prod='$nom_prod',
prec_prod='$prec_prod', desc_prod='$desc_prod',descuento_prod='$descuento_prod' WHERE cod_prod='$cod_prod'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../producto.php");
    }
    else{
        echo "no se pudo";
    }
?>