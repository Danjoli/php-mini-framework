<?php

declare(strict_types=1);

use Mini\Application;
use Mini\Container\Container;
use Mini\Routing\Router;
use Mini\Support\Config;
use Mini\Support\Env;

require dirname(__DIR__).'/vendor/autoload.php';

Env::load(dirname(__DIR__).'/.env');
$container = new Container();
$container->instance(Container::class, $container);
$container->instance(Config::class, Config::fromDirectory(dirname(__DIR__).'/config'));
$router = new Router();
$container->instance(Router::class, $router);

require dirname(__DIR__).'/routes/web.php';

return new Application($container, $router);
