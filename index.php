<?php

// Ustawienie zmiennej środowiskowej APP_ENV
// Można to ustawić w serwisie hostingowym lub w pliku .env
// pghro pass ef28009502d089f86f2be7e7c4dfd35d
// pghro username pghero-360cfb31

$env = getenv('APP_MODE') ?: 'dev'; // Domyślnie ustaw na 'development'

if ($env === 'prod') {
    $config = require 'config.production.php';
    $migration = new DatabaseMigration();
    $migration->createTasksTable();
} else {
    $config = require 'config.development.php';
}

// Przykładowe użycie
echo "Witamy w " . $config['app_name'];
