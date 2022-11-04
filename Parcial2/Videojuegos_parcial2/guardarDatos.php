<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $plataforma = $_POST["plataforma"];
    $descripcion = $_POST["descripcion"];
    $desarrolladores = $_POST["desarrolladores"];
    $peso_almacenamiento = $_POST["peso_almacenamiento"];

    $sql = "INSERT INTO juegos (nombre, plataforma, precio, descripcion, desarrolladores, peso_almacenamiento)". 
    "VALUES ('".$nombre."', '".$plataforma."', ".$precio.", '".$descripcion."', '".$desarrolladores."', ".$peso_almacenamiento.")";
    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarJuegos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarJuegos.php'>Regresar</a>";
    }

    $conexion->close();
?>