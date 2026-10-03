<?php

declare(strict_types=1);

use Mini\Support\Env;

return [
    'env' => Env::get('APP_ENV', 'production'),
    'debug' => Env::get('APP_DEBUG', false),
    'url' => Env::get('APP_URL', 'http://localhost:8080'),
];
