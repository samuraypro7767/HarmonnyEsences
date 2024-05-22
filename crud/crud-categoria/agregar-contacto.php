

<?php
include "../crud-categoria/conexion.php";
$connect = conexion();

if (isset($_SESSION['nom_categoria'])) {
    header("Location: ../categoria.php");
}

if (isset($_POST["submit"])) {
   $cantidad_categoria=$_POST['cantidad_categoria'];
   $precio_categoria=$_POST['precio_categoria'];
   $nom_categoria=$_POST['nom_categoria'];
   $año_categoria=$_POST['año_categoria'];


     
         $sql="INSERT INTO categoria (cantidad_categoria,precio_categoria,nom_categoria,año_categoria) VALUES('$cantidad_categoria','$precio_categoria','$nom_categoria','$año_categoria')";
         $resultado= mysqli_query($connect,$sql);

         if($resultado){
            echo "La Información Ingresó correctamente a la Base de Datos";
            header("Location:../categoria.php");
         }else{
            echo "La Información NO Ingresó  a la Base de Datos";
            header("Location:../categoria.php");
         }
         

 
      }

?>

