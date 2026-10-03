<?php

declare(strict_types=1);

use Mini\Http\Response;
use Mini\Routing\Router;

/** @var Router $router */
$router->get('/', static fn (): Response => Response::json([
    'name' => 'Mini Framework PHP',
    'version' => '1.0.0-dev',
    'status' => 'ok',
]), 'home');
