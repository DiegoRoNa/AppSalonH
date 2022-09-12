<?php 

/*ESTE ARCHIVO SE ENCARGA DE EJECUTAR INTERNAMENTE LOS CONTROLADORES, MODELOS Y VISTAS
A TRAVÉS DEL ROUTER QUE CONTIENE LAS RUTAS DE LA WEB */

//INCLUIR BD, AUTOLOAD, FUNCIONES Y HERLPERS
require_once __DIR__ . '/../includes/app.php';

use Controllers\ServicioController;
use Controllers\AdminController;
use Controllers\ApiController;
use Controllers\LoginController;
use Controllers\CitaController;
use MVC\Router;
$router = new Router();

//RUTAS
//Iniciar sesion
$router->get('/appsalonH/', [LoginController::class, 'login']);
$router->post('/appsalonH/', [LoginController::class, 'login']);
$router->get('/appsalonH/logout', [LoginController::class, 'logout']);

//Recuperar contraseña
$router->get('/appsalonH/olvide', [LoginController::class, 'olvide']);
$router->post('/appsalonH/olvide', [LoginController::class, 'olvide']);
$router->get('/appsalonH/recuperar', [LoginController::class, 'recuperar']);
$router->post('/appsalonH/recuperar', [LoginController::class, 'recuperar']);

//Crear cuenta
$router->get('/appsalonH/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/appsalonH/crear-cuenta', [LoginController::class, 'crear']);

//Confirmar cuenta
$router->get('/appsalonH/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/appsalonH/mensaje', [LoginController::class, 'mensaje']);

//AREA PRIVADA (autenticacion)
$router->get('/appsalonH/cita', [CitaController::class, 'index']);
$router->get('/appsalonH/admin', [AdminController::class, 'index']);

//API de citas
$router->get('/appsalonH/api/servicios', [APIController::class, 'index']);
$router->post('/appsalonH/api/citas', [APIController::class, 'guardar']);
$router->post('/appsalonH/api/eliminar', [APIController::class, 'eliminar']);

//Crud de servicios
$router->get('/appsalonH/servicios', [ServicioController::class, 'index']);
$router->get('/appsalonH/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/appsalonH/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/appsalonH/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/appsalonH/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/appsalonH/servicios/eliminar', [ServicioController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();