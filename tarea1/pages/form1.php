<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1 || Curso de PHP</title>
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <a href="../">Regresar al Inicio</a>
        <h1>Formulario 1</h1>
        <form action="validate1.php" method="post" class="form">
            <div class="content">
                <label for="name">Nombre:</label>
                <input type="text" name="name" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="content">
                <label for="age">Edad:</label>
                <input type="number" name="age" placeholder="Ingresa tu edad" required>
            </div>
            <div class="content">
                <label for="lastName">Apellido</label>
                <input type="text" name="lastName" placeholder="Ingresa tu Apellido" required>
            </div>
            <div class="content">
                <label for="email">Correo:</label>
                <input type="email" name="email" placeholder="Ingresa tu Correo" required>
            </div>
            <div class="content">
                <label for="address">Dirección:</label>
                <input type="text" name="address" placeholder="Ingresa tu Dirección" required>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>