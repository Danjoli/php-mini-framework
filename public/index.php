<?php

declare(strict_types=1);

use Mini\Http\ResponseEmitter;
use Mini\Http\ServerRequest;

$application = require dirname(__DIR__) . '/bootstrap/app.php';

(new ResponseEmitter())->emit($application->handle(ServerRequest::fromGlobals()));
