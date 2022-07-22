<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 || Curso de PHP</title>
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
        <h1>Ejercicio 4</h1>
        <p> Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
            Si trabaja 40 horas o menos se le paga $16 por hora
            Si trabaja mas de 40 horas se le paga $16 por cada una de las primeras 40 horas y $20 por cada hora extra.
        </p>
        <form action="validate/validate4.php" method="post" class="form">
            <input type="number" name="quantity" placeholder="Ingresa la cantidad de horas trabajadas" min="1" required>
            <div class="button">
                <button type="reset">Limpiar</button>
                <button type="submit">Calcular</button>
            </div>
        </form>

    </main>
</body>

</html>