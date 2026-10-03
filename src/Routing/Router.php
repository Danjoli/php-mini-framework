<?php

declare(strict_types=1);

namespace Mini\Routing;

use Mini\Exception\MethodNotAllowedHttpException;
use Mini\Exception\NotFoundHttpException;

final class Router
{
    /** @var list<Route> */
    private array $routes = [];

    /** @param list<string>|string $methods
     *  @param callable|array{class-string, string} $handler
     */
    public function add(array|string $methods, string $path, callable|array $handler, ?string $name = null): self
    {
        $methods = array_values(array_map('strtoupper', (array) $methods));
        $this->routes[] = new Route($methods, '/' . trim($path, '/'), $handler, $name);
        return $this;
    }
    /** @param callable|array{class-string, string} $handler */
    public function get(string $path, callable|array $handler, ?string $name = null): self
    {
        return $this->add('GET', $path, $handler, $name);
    }
    /** @param callable|array{class-string, string} $handler */
    public function post(string $path, callable|array $handler, ?string $name = null): self
    {
        return $this->add('POST', $path, $handler, $name);
    }
    /** @param callable|array{class-string, string} $handler */
    public function put(string $path, callable|array $handler, ?string $name = null): self
    {
        return $this->add(['PUT', 'PATCH'], $path, $handler, $name);
    }
    /** @param callable|array{class-string, string} $handler */
    public function delete(string $path, callable|array $handler, ?string $name = null): self
    {
        return $this->add('DELETE', $path, $handler, $name);
    }

    public function match(string $method, string $path): RouteMatch
    {
        $allowed = [];
        foreach ($this->routes as $route) {
            $parameters = $route->match('/' . trim($path, '/'));
            if ($parameters === null) {
                continue;
            }
            if (in_array(strtoupper($method), $route->methods, true) || ($method === 'HEAD' && in_array('GET', $route->methods, true))) {
                return new RouteMatch($route, $parameters);
            }
            $allowed = [...$allowed, ...$route->methods];
        }
        if ($allowed !== []) {
            throw new MethodNotAllowedHttpException(array_values(array_unique($allowed)));
        }
        throw new NotFoundHttpException();
    }

    /** @return list<Route> */
    public function routes(): array
    {
        return $this->routes;
    }
}
