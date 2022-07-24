<?php
isset($_GET['error']) ? $error = $_GET['error'] : $error = 0;
$msg = "";
if ($error == 1) {
    $msg = "<span class='alert alert-danger'>Usuario o contraseña Erróneo</span>";
}
session_start();
if (isset($_SESSION['email'])) {
    header('location:productos.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP básico || Proyecto Final</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <main class="card shadow login">
        <div class="card-header">
            <h1>Iniciar Sesión</h1>
        </div>
        <div class="card-body">
            <form method="post" action="login.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="pass" />
                </div>
        </div>
        <div class="card-footer">
            <?= $msg ?>
            <a href="" class="btn btn-secondary">Crear cuenta</a>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
        </form>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>