<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $plataforma = $_POST["plataforma"];
    $descripcion = $_POST["descripcion"];
    $desarrolladores = $_POST["desarrolladores"];
    $peso_almacenamiento = $_POST["peso_almacenamiento"];

    $sql = "UPDATE juegos_proximos SET nombre='".$nombre."' , precio= ".$precio.",". 
    "plataforma = '".$plataforma."', descripcion = '".$descripcion."', desarrolladores ='".$desarrolladores."', peso_almacenamiento = '".$peso_almacenamiento."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarJuegosProximos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarJuegosProximos.php'>Regresar</a>";

    }

    $conexion->close();

?>