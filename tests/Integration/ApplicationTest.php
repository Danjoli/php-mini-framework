<?php

declare(strict_types=1);

namespace Tests\Integration;

use Mini\Application;
use Mini\Container\Container;
use Mini\Http\ServerRequest;
use Mini\Http\Uri;
use Mini\Routing\Router;
use PHPUnit\Framework\TestCase;

final class ApplicationTest extends TestCase
{
    public function testItDispatchesAControllerWithRouteParameters(): void
    {
        $container = new Container();
        $router = new Router();
        $router->get('/hello/{name}', [HelloController::class, 'show']);
        $response = (new Application($container, $router))->handle(new ServerRequest('GET', Uri::fromString('http://localhost/hello/Mini')));
        self::assertSame(200, $response->getStatusCode());
        self::assertSame('{"message":"Hello Mini"}', (string) $response->getBody());
    }
}

final class HelloController
{
    /** @return array{message: string} */
    public function show(string $name): array
    {
        return ['message' => 'Hello ' . $name];
    }
}
