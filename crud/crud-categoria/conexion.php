<?php

function conexion() {
$host = "localhost";
$user = "root";
$pass = "";
$db = "harmony";

$connect = mysqli_connect($host, $user, $pass, $db);

return $connect;
}
?>