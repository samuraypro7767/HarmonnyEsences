

<?php
include "../crud-producto/conexion.php";
$connect = conexion();

if (isset($_SESSION['cod_prod'])) {
    header("Location: ../producto.php");
}

if (isset($_POST["submit"])) {
   $cod_prod=$_POST['cod_prod'];
   $nom_prod=$_POST['nom_prod'];
   $prec_prod=$_POST['prec_prod'];
   $desc_prod=$_POST['desc_prod'];
   $descuento_prod=$_POST['descuento_prod'];


     
         $sql="INSERT INTO producto (nom_prod,prec_prod,desc_prod,descuento_prod) VALUES('$nom_prod','$prec_prod','$desc_prod','$descuento_prod')";
         $resultado= mysqli_query($connect,$sql);

         if($resultado){
            echo "La Información Ingresó correctamente a la Base de Datos";
            header("Location:../producto.php");
         }else{
            echo "La Información NO Ingresó  a la Base de Datos";
            header("Location:../producto.php");
         }
         

 
      }

?>

