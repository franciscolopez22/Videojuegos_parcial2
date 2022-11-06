<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from juegos";
      $datos = $conexion->query($sql);

    ?>

    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Desarrolladores</th>
                            <th scope="col">Espacio de almacenamiento</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td scope="row"><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td>$<?php echo $row["precio"]; ?></td>
                            <td><?php echo $row["plataforma"]; ?></td>
                            <td><?php echo $row["descripcion"]; ?></td>
                            <td><?php echo $row["desarrolladores"]; ?></td>
                            <td><?php echo $row["peso_almacenamiento"]; ?>GB</td>
                            <td>
                                <a href="actualizarJuegos.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a><br>
                                <a href="eliminarJuego.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>