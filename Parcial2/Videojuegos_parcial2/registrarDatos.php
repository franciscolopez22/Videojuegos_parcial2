<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Videojuego</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre del videojuego">
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="precio" placeholder="Teclea su precio">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Plataforma:</label>
                        <input type="text" class="form-control" name="plataforma" placeholder="Teclea la plataforma a la que pertenece">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Desarrolladores del videojuegos:</label>
                        <input type="text" class="form-control" name="desarrolladores" placeholder="Teclea sus desarrolladores">
                    </div>

                    <div class="form-group">
                        <label for="">Peso de almacenamiento que necesita:</label>
                        <input type="number" class="form-control" name="peso_almacenamiento" placeholder="Teclea su peso de almacenamiento">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarJuegos.php" class="btn btn-danger">Cancelar</a>
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