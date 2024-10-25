<?php

// Ustawienie zmiennej środowiskowej APP_ENV
// Można to ustawić w serwisie hostingowym lub w pliku .env

$env = getenv('APP_MODE') ?: 'dev'; // Domyślnie ustaw na 'development'

if ($env === 'production') {
    $config = require 'config.production.php';
} else {
    $config = require 'config.development.php';
}

// Przykładowe użycie
echo "Witamy w " . $config['app_name'];
