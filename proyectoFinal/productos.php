<?php
include("libraries/libraries.php");
security();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="cerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
    <main class="card">
        <div class="card-header">
            <h1>Bienvenido <?= $_SESSION['name']?></h1>
        </div>
        <div class="card-body">

        </div>
        <div class="card-footer">

        </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>