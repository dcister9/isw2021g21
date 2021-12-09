<?php

$db_host="146.83.198.35";
$db_user="G21ingsoftware";
$db_pass="G21ingsoftware20$21";
$db_name="G21ingsoftware_bd";

$conexion=mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){

echo 'no se pude conectar la base de datos:'.mysqli_connect_error();
}


?>