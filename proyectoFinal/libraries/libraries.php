<?php
const HOST = "localhost";
const USER = "root";
const PASS = "";
const DB = "sisuni_basic";

function conectar()
{
    try {
        global $con;
        $con = mysqli_connect(HOST, USER, PASS, DB, 3306);
        mysqli_query($con, 'set names utf8');
    } catch (Exception $e) {
        echo $e->getMessage();
        die;
    }
}
function desconectar()
{
    global $con;
    mysqli_close($con);
}
function consultar($sql)
{
    global $con;
    conectar();
    $caja = mysqli_query($con, $sql);
    $datos = array();
    while ($f = mysqli_fetch_assoc($caja)) {
        $datos[] = $f;
    }
    desconectar();
    return $datos;
}
function ejecutar($sql)
{
    global $con;
    conectar();
    $exito = mysqli_query($con, $sql);
    desconectar();
    if ($exito) {
        return 1;
    } else {
        return 0;
    }
}
function login($email, $pass)
{
    $sql = "select * from usuarios where userEmail='$email' and userPass='$pass'";
    $datos = consultar($sql);
    if (count($datos) == 1) {
        session_start();
        $_SESSION['email'] = $datos[0]['userEmail'];
        $_SESSION['name'] = $datos[0]['userName'];
        header("location: productos.php");
    } else {
        header("location: index.php?error=1");
    }
}
function logout()
{
    session_start();
    session_destroy();
    header("location:index.php");
}
function security()
{
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
}
