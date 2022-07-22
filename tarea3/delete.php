<?php
$archivo = "productos.txt";
unlink($archivo);
header("location:index.php");