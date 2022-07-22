<?php
$archivo = "productos.txt";
$msg = "";
if(file_exists($archivo)){
	$contenido = file($archivo);
	foreach($contenido as $linea){
		$datos[] = explode("|",$linea);
	}
}else{
		$datos = [];
		$msg = "Aún no hay registros";
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tarea 3 || Curso de PHP</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<main class="card shadow">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Fecha de vencimiento</th>
						<th>Precio de venta</th>
					</tr>
				</thead>
				<tbody>
				<?= $msg ?>
					<?php foreach($datos as $registro){
						?>
					<tr>
						<td><?= ucfirst($registro[0])?></td>
						<td><?= $registro[1]?></td>
						<td>S/.<?= $registro[2]?></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
            <div class="card-footer">
                <h2>Registrar Nuevo producto</h2>
                <form action="products.php" method="post">
                    <div class="mb-3">
                      <label for="name" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="name" placeholder="Nombre del producto">
                    </div>
                    <div class="mb-3">
                      <label for="date" class="form-label">Fecha de vencimiento</label>
                      <input type="date" class="form-control" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="price" placeholder="S/." min="1">
                      </div>
					  <div class="row gap-3 d-flex px-2">
						  <button type="reset" class="btn btn-secondary">Limpiar</button>
						  <button type="submit" class="btn btn-primary">Registrar</button>
						  <a href="delete.php" class="btn btn-danger">Eliminar archivo</a>
					  </div>
                  </form>
            </div>
		</main>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
