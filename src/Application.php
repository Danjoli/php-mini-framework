<?php

declare(strict_types=1);

namespace Mini;

use Mini\Container\Container;
use Mini\Http\Response;
use Mini\Routing\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use RuntimeException;

final class Application implements RequestHandlerInterface
{
    public function __construct(private readonly Container $container, private readonly Router $router) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $match = $this->router->match($request->getMethod(), $request->getUri()->getPath());
        foreach ($match->parameters as $name => $value) { $request = $request->withAttribute($name, $value); }
        $handler = $match->route->handler;
        if (is_array($handler) && is_string($handler[0])) { $handler = [$this->container->get($handler[0]), $handler[1]]; }
        if (!is_callable($handler)) { throw new RuntimeException('Route handler is not callable.'); }
        $result = $this->container->call($handler, ['request' => $request, ...$match->parameters]);
        if ($result instanceof ResponseInterface) { return $result; }
        if (is_array($result) || is_object($result)) { return Response::json($result); }
        if (is_string($result)) { return Response::html($result); }
        throw new RuntimeException('Route handlers must return a response, array, object or string.');
    }
}
