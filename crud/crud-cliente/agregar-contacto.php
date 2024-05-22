

<?php
include "../crud-cliente/conexion.php";
$connect = conexion();

if (isset($_SESSION['nom_cliente'])) {
    header("Location: ../usuariocrud.php");
}

if (isset($_POST["submit"])) {
   $nom_cliente=$_POST['nom_cliente'];
   $contra_cliente=$_POST['contra_cliente'];
   $tel_cliente=$_POST['tel_cliente'];
   $dir_cliente=$_POST['dir_cliente'];


     
         $sql="INSERT INTO cliente (nom_cliente,contra_cliente,tel_cliente,dir_cliente) VALUES('$nom_cliente','$contra_cliente','$tel_cliente','$dir_cliente')";
         $resultado= mysqli_query($connect,$sql);

         if($resultado){
            echo "La Información Ingresó correctamente a la Base de Datos";
            header("Location:../usuariocrud.php");
         }else{
            echo "La Información NO Ingresó  a la Base de Datos";
            header("Location:../usuariocrud.php");
         }
         

 
      }

?>

