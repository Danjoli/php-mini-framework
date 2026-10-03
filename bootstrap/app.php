<?php

declare(strict_types=1);

use Mini\Application;
use Mini\Container\Container;
use Mini\Http\Middleware\CorsMiddleware;
use Mini\Http\Middleware\ErrorHandlerMiddleware;
use Mini\Http\Middleware\JsonBodyMiddleware;
use Mini\Http\Middleware\RequestIdMiddleware;
use Mini\Http\MiddlewareDispatcher;
use Mini\Database\Database;
use Mini\Routing\Router;
use Mini\Support\Config;
use Mini\Support\Env;

require dirname(__DIR__).'/vendor/autoload.php';

Env::load(dirname(__DIR__).'/.env');
$container = new Container();
$container->instance(Container::class, $container);
$container->instance(Config::class, Config::fromDirectory(dirname(__DIR__).'/config'));
$container->singleton(Database::class, static function (Container $container): Database {
    $config = $container->get(Config::class);
    return new Database((string) $config->get('database.dsn'), $config->get('database.username'), $config->get('database.password'));
});
$router = new Router();
$container->instance(Router::class, $router);

require dirname(__DIR__).'/routes/web.php';

$application = new Application($container, $router);

return new MiddlewareDispatcher([
    new ErrorHandlerMiddleware((bool) $container->get(Config::class)->get('app.debug', false)),
    new RequestIdMiddleware(),
    new CorsMiddleware(),
    new JsonBodyMiddleware(),
], $application);
