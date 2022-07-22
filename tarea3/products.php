<?php
$name = $_POST['name'];
$date = $_POST['date'];
$price = $_POST['price'];
$count = 1;

$linea = "$name|$date|$price" . PHP_EOL;
$archivo = "productos.txt";
if (file_exists($archivo)) {
    $f = fopen($archivo, "a+");
    $count = $count + 1;
} else {
    $f = fopen($archivo, "w+");
}
fwrite($f, $linea, strlen($linea));
fclose($f);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <main class="card">
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Producto Registrado con éxito</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <a href="/" class="btn btn-primary">Regresar</a>
            </figcaption>
        </figure>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>