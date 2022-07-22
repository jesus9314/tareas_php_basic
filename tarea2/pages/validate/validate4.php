<?php
$q = $_POST['quantity'];
$salary = 0;
$horasExtras = 0;
$extraSalary = 0;
if($q <= 40)
{
    $salary = 16 * $q;
}else{
    $horasExtras = $q - 40;
    $baseSalary = 40 * 16;
    $extraSalary = $horasExtras * 20;
    $salary = $baseSalary + $extraSalary;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 || Resultado</title>
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
        <a href="../ejercicio4.php">Regresar al ejercicio 4</a>
        <h1>Ejercicio 4</h1>
        <p class="result">El salario total es de <strong>S/<?=$salary?></strong></p>
        <p class="result">Total de horas trabajadas son: <strong><?=$q?> hrs.</strong></p>
        <p class="result">El Salario por el tiempo extra adicional es de <strong>S/<?=$extraSalary?></strong> por <strong>S/<?=$horasExtras?> hrs.</strong></p>
    </main>
</body>

</html>