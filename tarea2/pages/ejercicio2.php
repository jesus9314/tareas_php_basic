<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 || Curso de PHP</title>
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
        <h1>Ejercicio 2</h1>
        <p>Preparar una calculadora para 2 números, con las operaciones aritméticas.</p>
        <form action="validate/validate2.php" method="post" class="form">
            <input type="number" name="n1" placeholder="Ingrese un número" required>
            <input type="number" name="n2" placeholder="Ingrese un número" required>
            <select name="operation">
                <option disabled selected>Seleccione la operación que desea realizar</option>
                <option value="+">Sumar</option>
                <option value="-">Restar</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
            <div class="button">
                <button type="reset">Limpiar</button>
                <button type="submit">Calcular</button>
            </div>
        </form>
        
    </main>
</body>

</html>