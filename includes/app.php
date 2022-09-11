<?php 
//ARCHIVO PRINCIPAL QUE MANDA LLAMAR FUNCIONES Y CLASES


require __DIR__ . '/../vendor/autoload.php';//Autoload de composer
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // cargar el archivo .env
$dotenv->safeLoad(); // en caso de que el archivo no exista, no va a marcar un error

require 'globales.php';
require 'funciones.php';//Funciones
require 'database.php';//Conexion de la BD


// Conectarnos a la base de datos
//ACTIVE RECORD ES LA CLASE PADRE, HEREDARÁ A TODAS LAS CLASES HIJAS LA CONEXION A LA BD
use Model\ActiveRecord;
ActiveRecord::setDB($db);