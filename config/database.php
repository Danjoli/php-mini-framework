<?php

declare(strict_types=1);

use Mini\Support\Env;

return [
    'dsn' => Env::get('DB_DSN', 'sqlite:storage/database.sqlite'),
    'username' => Env::get('DB_USERNAME'),
    'password' => Env::get('DB_PASSWORD'),
];
