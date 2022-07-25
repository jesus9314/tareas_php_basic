<?php
include('libraries/libraries.php');
$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];

$sql = "insert into usuarios (userEmail,userPass,userName) values ('$email','$pass','$name')";
ejecutar($sql);
header("location:index.php");
