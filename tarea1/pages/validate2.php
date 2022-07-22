<?php
    $datos[1]=$_GET['name'];
    $datos[2]=$_GET['age'];
    $datos[3]=$_GET['course'];
    $datos[4]=$_GET['gender'];
    $datos[5]=$_GET['birthday'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de  <?= $datos[1] ?>|| Curso de PHP</title>
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <a href="../">Regresar al inicio</a>
        <a href="form2.php">Regresar a Formulario 2</a>
        <h1>Datos del usuario</h1>
        <div class="content">
                <label for="name">Nombre:</label>
                <input type="text" name="name" value="<?= $datos[1] ?>" disabled placeholder="Ingresa tu nombre" require>
            </div>
            <div class="content">
                <label for="age">Edad:</label>
                <input type="number" name="age" value="<?= $datos[2] ?>" disabled placeholder="Ingresa tu nombre" require>
            </div>
            <div class="content">
                <label for="lastName">Curso a matricularse:</label>
                <input type="text" name="lastName" value="<?= $datos[3] ?>" disabled placeholder="Ingresa tu nombre" require>
            </div>
            <div class="content">
                <label for="email">Género:</label>
                <input type="email" name="email" value="<?= $datos[4] ?>" disabled placeholder="Ingresa tu nombre" require>
            </div>
            <div class="content">
                <label for="address">Fecha de nacimiento:</label>
                <input type="text" name="address" value="<?= $datos[5] ?>" disabled placeholder="Ingresa tu nombre" require>
            </div>
    </div>
</body>
</html>