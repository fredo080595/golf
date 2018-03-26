<?php

require_once "clases.php";



$datosCorreo = array();

$datosCorreo[0] = $_POST['nombre'];
$datosCorreo[1] = $_POST['correo'];
$datosCorreo[2] = $_POST['asunto'];
$datosCorreo[3] = $_POST['telefono'];
$datosCorreo[4] = $_POST['coment'];


$obj = new correo();

$obj->enviarCorreo($datosCorreo);

 ?>