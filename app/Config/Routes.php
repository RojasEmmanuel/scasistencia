<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('estudiantes', 'Estudiantes::index');
$routes->get('detalles', 'DetallesEvt::index');
$routes->get('historial', 'Historial::index');
$routes->get('principal', 'Principal::index');
$routes->get('formatos', 'Formatos::index');
$routes->get('docentes', 'Docentes::index');
$routes->get('proximos', 'Proximos::index');
$routes->get('importar', 'Importar::index');
$routes->post('importar/estudiantes', 'Importar::estudiantes');
$routes->post('importar/docentes', 'Importar::docentes');
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::validar');