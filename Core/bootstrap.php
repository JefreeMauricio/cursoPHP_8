<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/Router.php';
require 'Core/database/Request.php';
require 'Core/database/app.php';
require 'Models/Task.php';
require 'functions.php';

App::set('config', require 'config.php');
$config = App::get('config');
App::set('database', new QueryBuilder(
    Connection::start(App::get('config')['database'])
));



if (App::get('config')['error_handling']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}










?>