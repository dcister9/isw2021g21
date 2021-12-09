<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="reunion_bd";

$conexion=mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){

echo 'no se pude conectar la base de datos:'.mysqli_connect_error();
}


?>