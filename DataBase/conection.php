<?php

    $conexion = mysqli_connect("localhost","root","","login_register");

    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'No se ha podido con la base de datos';
    }

?>
