<?php
return [
    'app_name' => 'My Development App',
    'debug' => false,
    'database' => [
        'host' => 'prod-db-server',
        'username' => 'prod_user',
        'password' => 'secure_password',
        'dbname' => 'production_db',
    ],
    'api_url' => 'https://api.production.com',
    'log_level' => 'error',
    'feature_flag' => [
        'new_feature' => false, // Wersja produkcyjna nie ma nowych funkcji
    ],
];
