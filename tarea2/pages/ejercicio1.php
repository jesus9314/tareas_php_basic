<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 || Curso de PHP</title>
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <main class="card">
        <a href="../">Regresar al Inicio</a>
        <h1>Ejercicio 1</h1>
        <p>Ingresar un numero y determinar si es par o impar.</p>
        <form action="validate/validate1.php" method="post" class="form">
            <input type="number" name="number" placeholder="Ingrese un número" required>
            <div class="button">
                <button type="reset">Limpiar</button>
                <button type="submit">Validar</button>
            </div>
        </form>
    </main>
</body>

</html>