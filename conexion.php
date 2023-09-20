<?php

    $host = "localhost";
    $database = "bitak";
    $name = "root";
    $clave = "";

    error_reporting(1);

    $conexion = new mysqli($host, $name, $clave, $database);

    if ($conexion->errno) {
        echo "No se puede acceder a la base de datos";
        exit();
    }
?>