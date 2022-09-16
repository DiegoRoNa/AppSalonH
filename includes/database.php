<?php

//CONEXIÓN A LA BASE DE DATOS
$db = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_BD']);
//$db = mysqli_connect('localhost', 'root', '', 'app_salon');
//$db = mysqli_connect('localhost', 'diegoron_admin', 'passadmindb', 'diegoron_appsalon');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
