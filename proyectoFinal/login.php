<?php
require_once("libraries/libraries.php");

$email = $_POST['email'];
$pass = $_POST['pass'];

login($email,$pass);
