<?php
    $conexion = mysqli_connect(
        "localhost","root","","empleados");
    if(mysqli_connect_errno()){
        die("Error: ".mysqli_connect_error());
    }
    else{
        /*echo "Conexion realizada correctamente";*/
    }
?>