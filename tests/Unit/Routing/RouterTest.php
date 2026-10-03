<?php

declare(strict_types=1);

namespace Tests\Unit\Routing;

use Mini\Exception\MethodNotAllowedHttpException;
use Mini\Exception\NotFoundHttpException;
use Mini\Routing\Router;
use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    public function testItMatchesDynamicParameters(): void
    {
        $router = new Router();
        $router->get('/tasks/{id:\\d+}', static fn(): string => 'ok');
        $match = $router->match('GET', '/tasks/42');
        self::assertSame('42', $match->parameters['id']);
    }
    public function testItRejectsUnknownRoutes(): void
    {
        $this->expectException(NotFoundHttpException::class);
        (new Router())->match('GET', '/missing');
    }
    public function testItReportsDisallowedMethods(): void
    {
        $router = new Router();
        $router->get('/tasks', static fn(): string => 'ok');
        $this->expectException(MethodNotAllowedHttpException::class);
        $router->match('POST', '/tasks');
    }
}
