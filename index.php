<?php
require_once 'vendor/autoload.php'; // Upewnij się, że ścieżka jest poprawna

// Ustawienie zmiennej środowiskowej APP_ENV
// Można to ustawić w serwisie hostingowym lub w pliku .env
// pghro pass ef28009502d089f86f2be7e7c4dfd35d
// pghro username pghero-360cfb31

use App\Migrations\DatabaseMigration;

$env = getenv('APP_MODE') ?: 'dev'; // Domyślnie ustaw na 'development'
echo $env;
var_dump(get_include_path()); // Sprawdź, jakie są dostępne ścieżki
var_dump(class_exists('App\Migrations\DatabaseMigration')); // Sprawdź, czy klasa istnieje



if ($env === 'prod') {
    $config = require 'config.production.php';
    $migration = new DatabaseMigration();
    $migration->createTasksTable();
} else {
    $config = require 'config.development.php';
    $migration = new DatabaseMigration();
    $migration->createTasksTable();
}

// Przykładowe użycie
echo "Witamy w " . $config['app_name'];
