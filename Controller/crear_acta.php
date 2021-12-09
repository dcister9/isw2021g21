<?php

require "../Model/conexion.php";

$titulo=$_POST['fname'];
$informacion=$_POST['informacion'];
$SQL = "INSERT INTO acta (ac_id, ac_titulO, ac_descrip) VALUES (1,'$titulo','$informacion')";
$ejecucion_consulta = $conexion -> query($SQL); 
   /*if ($ejecucion_consulta===TRUE) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $SQL . "<br>" . mysqli_error($conexion);
    }
    */
?>