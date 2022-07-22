<?php
    $n = $_POST['number'];
    $message = "";
    if($n % 2 == 0){
        $message = "Par";
    }else{
        $message = "Impar";
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
        <a href="../ejercicio1.php">Regresar al ejercicio 1</a>
        <h1>Ejercicio 1</h1>
        <p class="result">El número <strong><?=$n ?></strong> es <strong><?=$message ?></strong></p>
    </main>
</body>

</html>