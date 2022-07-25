<?php
include('libraries/libraries.php');
security();
$cat = "select * from categorias";
$categorias = consultar($cat);
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
            <h1>Nuevo Producto</h1>
        </div>
        <div class="card-body">
            <form action="actions.php" method="post">
                <input type="hidden" value="3" name="action">
            <div class="mb-3">
                <label for="productName" class="form-label">Producto</label>
                <input type="text" class="form-control" name="productName">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Precio</label>
                <input type="text" class="form-control" name="productPrice">
            </div>
            <div class="mb-3">
                <label for="productStock" class="form-label">Stock</label>
                <input type="text" class="form-control" name="productStock">
            </div>
            <div class="mb-3">
                <label for="catProducto" class="form-label">Categoría</label>
                <select name="catProducto" class="form-control">
                    <?php foreach ($categorias as $cat) { ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['nameCate'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square mx-2"></i>Agregar Producto</button>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>