<?php
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$disc = 0;

if($quantity <= 3){
    $disc = 10;
}else{
    $disc = 20;
}
$subprice = $price * $quantity;
$discount = ($disc * $subprice)/100;
$price = $subprice- $discount;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 || Resultado</title>
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
        <a href="../ejercicio3.php">Regresar al ejercicio 3</a>
        <h1>Ejercicio 3</h1>
        <p class="result">El precio total de  <strong><?=$quantity ?></strong> camisas es <strong>S/<?=$price ?></strong> con un descuento del <strong><?=$disc ?>%</strong> (S/<?=$discount?>)</p>
    </main>
</body>

</html>