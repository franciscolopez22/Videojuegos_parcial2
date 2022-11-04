<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';

    ?>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="consultarJuegos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from juegos WHERE nombre LIKE '%" . $_GET["termino"] . "%'";
        $juegos = $conexion->query($sql);
        if($juegos->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
            echo "<a href='consultarJuegos.php'>Regresar</a>";
        } else {
    ?>
    <br>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Desarrolladores</th>
                            <th scope="col">Espacio de almacenamiento</th>
                            <th scope="col">Opciones</th>
                        </thead>
                        <tbody>
                            <?php while($row = $juegos->fetch_assoc()) { ?>
                                <tr>
                                    <td scope="row"><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["precio"]; ?></td>
                                    <td><?php echo $row["plataforma"]; ?></td>
                                    <td><?php echo $row["descripcion"]; ?></td>
                                    <td><?php echo $row["desarrolladores"]; ?></td>
                                    <td><?php echo $row["peso_almacenamiento"]; ?></td>
                                    <td>
                                        <a href="actualizarJuegos.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                                        <a href="eliminarJuego.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


    <?php } } ?>
                </div></div></div>
    <script src="js/bootstrap.js"></script>
</body>
</html>