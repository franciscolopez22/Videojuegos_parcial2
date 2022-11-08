<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM juegos_proximos WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>
                <form method="post" action="guardarRegistroProximos.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input value="<?php echo $registro["precio"]; ?>" type="number" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>

                    <div class="form-group">
                        <label for="">Plataforma:</label>
                        <input value="<?php echo $registro["plataforma"]; ?>" type="text" class="form-control" name="plataforma" placeholder="Teclea la plataforma a la que pertenece">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"><?php echo $registro["descripcion"] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Desarrolladores:</label>
                        <input value="<?php echo $registro["desarrolladores"]; ?>" type="text" class="form-control" name="desarrolladores" placeholder="Teclea sus desarrolladores">
                    </div>

                    <div class="form-group">
                        <label for="">Peso de almacenamiento que necesita:</label>
                        <input value="<?php echo $registro["peso_almacenamiento"]; ?>" type="text" class="form-control" name="peso_almacenamiento" placeholder="Teclea su peso de almacenamiento">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarJuegosProximos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
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