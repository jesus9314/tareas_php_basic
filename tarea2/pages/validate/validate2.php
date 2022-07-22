<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$o = $_POST['operation'];
$result = 0;
$operation = "";

switch ($o) {
    case '+':
        $result = $n1 + $n2;
        $operation = "Suma";
        break;
    case '-':
        $result = $n1 - $n2;
        $operation = "resta";
        break;
    case '*+':
        $result = $n1 * $n2;
        $operation = "Multiplicación";
        break;
    case '/':
        $result = $n1 / $n2;
        $operation = "División";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 || Resultado</title>
    <!-- Css Style -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <main class="card">
        <a href="../../">Regresar al Inicio</a>
        <a href="../ejercicio2.php">Regresar al ejercicio 2</a>
        <h1>Ejercicio 2</h1>
        <p class="result">El resultado de la <strong><?= $operation ?></strong> es <strong><?= $result ?></strong></p>
    </main>
</body>

</html>