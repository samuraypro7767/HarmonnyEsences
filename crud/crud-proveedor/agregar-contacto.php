

<?php
include "../crud-proveedor/conexion.php";
$connect = conexion();

if (isset($_SESSION['nom_prov'])) {
    header("Location: ../proveedor.php");
}

if (isset($_POST["submit"])) {
   $id_prov=$_POST['id_prov'];
   $nom_prov=$_POST['nom_prov'];
   $dir_prov=$_POST['dir_prov'];
   $tel_prov=$_POST['tel_prov'];
   $sumi_prov=$_POST['sumi_prov'];
   $nit=$_POST['nit'];
   $nom_producto=$_POST['nom_producto'];


     
         $sql="INSERT INTO proveedor (id_prov,nom_prov,dir_prov,tel_prov,sumi_prov,nit,nom_producto) VALUES('$id_prov','$nom_prov','$dir_prov','$tel_prov','$sumi_prov','$nit','$nom_producto')";
         $resultado= mysqli_query($connect,$sql);

         if($resultado){
            echo "La Información Ingresó correctamente a la Base de Datos";
            header("Location:../proveedor.php");
         }else{
            echo "La Información NO Ingresó  a la Base de Datos";
            header("Location:../proveedor.php");
         }
         

 
      }

?>

