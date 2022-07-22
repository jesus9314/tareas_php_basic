<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 || Curso de PHP</title>
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
        <h1>Ejercicio 3</h1>
        <p> Prepare un módulo que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10%.</p>
        <form action="validate/validate3.php" method="post" class="form">
            <input type="number" name="quantity" placeholder="Ingresa la cantidad de camisas que deseas comprar " min="1" required>
            <input type="number" name="price" placeholder="Ingrese el precio de las camisas" min="1" required>
            <div class="button">
                <button type="reset">Limpiar</button>
                <button type="submit">Calcular</button>
            </div>
        </form>

    </main>
</body>

</html>