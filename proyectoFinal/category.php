<?php
include("libraries/libraries.php");
security();
$sql = "select * from categorias where stateCate=1";
$datos = consultar($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/53bf961a31.js" crossorigin="anonymous"></script>
</head>

<body>
    <a href="productos.php" class="btn btn-primary">Regresar</a>
    <main class="card">
        <div class="card-header">
            <h1>Bienvenido <?= $_SESSION['name'] ?></h1>
        </div>
        <div class="card-body">
            <h2>Productos</h2>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($datos as $line) { ?>
                        <tr>
                            <td><?= $line['nameCate'] ?></td>
                            <td>
                                <a href="editCate.php?id=<?= $line['id'] ?>" title="Editar" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="actionsCat.php?id=<?= $line['id'] ?>&action=2" title="Eliminar" class="btn btn-danger" onclick="return confirm('Seguro de borrar <?= $line['nameCate'] ?>?')"><i class="fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="newCate.php" class="btn btn-info"><i class="fa-solid fa-circle-plus mx-2"></i>Agregar Categoría</a>
        </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>