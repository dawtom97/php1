<?php
return [
    'app_name' => 'My Production App',
    'debug' => false,
    'database' => [
        'host' => 'dpg-csdk1sd6l47c73dcd3n0-a',
        'username' => 'dawid',
        'password' => getenv("PROD_DB_PASSWORD"),
        'dbname' => 'php1_db',
    ],
    'api_url' => 'https://api.production.com',
    'log_level' => 'error',
    'feature_flag' => [
        'new_feature' => false, // Wersja produkcyjna nie ma nowych funkcji
    ],
];
