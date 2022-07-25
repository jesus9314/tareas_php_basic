<?php
include("libraries/libraries.php");
if(isset($_POST['action'])){
    $action = intval($_POST['action']);
    if($_POST['action'] == 1 || $_POST['action'] == 2){
        $id = $_POST['id'];
    }
}else if(isset($_GET['action'])){
    $action = intval($_GET['action']);
    $id = $_GET['id'];
}
if(isset($_POST['productName'], $_POST['productPrice'],$_POST['productStock'], $_POST['catProducto'])){
    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $stock = $_POST['productStock'];
    $cat = $_POST['catProducto'];
}

switch ($action) {
    case 1:
        # Editar
        $sql = "update productos set productName='$name', productPrice='$price', productStock='$stock', idCat='$cat' where id='$id'";
        ejecutar($sql);
        header("location: productos.php");
        break;
    
    case 2:
        # Eliminar
        $sql = "update productos set productState=0 where id=$id";
        ejecutar($sql);
        header("location: productos.php");
        break;
    case 3:
        # nuevo
        $sql = "insert into productos (productName,productPrice,productStock,idCat) values ('$name',$price,$stock,$cat)";
        ejecutar($sql);
        header("location: productos.php");
        break;
}