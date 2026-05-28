<?php
$query = require 'Core/bootstrap.php';


$routes = require 'routes.php';

// Trim funciona para limpiar los caracteres que le indiquemos, en este caso el '/' del inicio y el final de la url, para que quede solo el nombre de la ruta, por ejemplo 'about' en lugar de '/about/'.

$url = Request::url();

$router = new Router;
$router->register($routes);
require $router->handle($url);

