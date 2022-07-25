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
if(isset($_POST['cateName'])){
    $name = $_POST['cateName'];
}

switch ($action) {
    case 1:
        # Editar
        $sql = "update categorias set nameCate='$name' where id='$id'";
        ejecutar($sql);
        header("location: category.php");
        break;
    
    case 2:
        # Eliminar
        $sql = "update categorias set stateCate=0 where id=$id";
        ejecutar($sql);
        header("location: category.php");
        break;
    case 3:
        # nuevo
        $sql = "insert into categorias (nameCate) values ('$name')";
        ejecutar($sql);
        header("location: category.php");
        break;
}