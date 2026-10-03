<?php

declare(strict_types=1);

use Mini\Http\Response;
use Mini\Routing\Router;
use App\Controller\TaskController;

/** @var Router $router */
$router->get('/', static fn (): Response => Response::json([
    'name' => 'Mini Framework PHP',
    'version' => '1.0.0-dev',
    'status' => 'ok',
]), 'home');

$router->get('/api/tasks', [TaskController::class, 'index'], 'tasks.index');
$router->post('/api/tasks', [TaskController::class, 'store'], 'tasks.store');
$router->get('/api/tasks/{id:\\d+}', [TaskController::class, 'show'], 'tasks.show');
$router->put('/api/tasks/{id:\\d+}', [TaskController::class, 'update'], 'tasks.update');
$router->delete('/api/tasks/{id:\\d+}', [TaskController::class, 'destroy'], 'tasks.destroy');
