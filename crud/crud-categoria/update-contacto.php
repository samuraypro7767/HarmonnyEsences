<!--Actualizar la base de datos-->
<?php


include("../crud-categoria/conexion.php");
$connect=conexion();

$cod_categoria=$_POST['cod_categoria'];
$cantidad_categoria=$_POST['cantidad_categoria'];
$precio_categoria=$_POST['precio_categoria'];
$nom_categoria=$_POST['nom_categoria'];
$año_categoria=$_POST['año_categoria'];


$sql="UPDATE categoria SET  cantidad_categoria='$cantidad_categoria',
precio_categoria='$precio_categoria', nom_categoria='$nom_categoria',año_categoria='$año_categoria' WHERE cod_categoria ='$cod_categoria'";
$query=mysqli_query($connect,$sql);

    if($query){
        Header("Location: ../categoria.php");
    }
 
?>
