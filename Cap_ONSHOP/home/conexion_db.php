<?php

    $conexion = mysqli_connect("localhost", "root", "", "shop");

    if($conexion){
        echo 'Conexion exitosa con el servidor';
    }else{
        echo 'No se ha podido conectar con el servidor';
    }
    
?>