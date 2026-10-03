<?php

declare(strict_types=1);

namespace Mini\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class MiddlewareDispatcher implements RequestHandlerInterface
{
    /** @param list<MiddlewareInterface> $middleware */
    public function __construct(private readonly array $middleware, private readonly RequestHandlerInterface $fallback) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->dispatch(0, $request);
    }

    private function dispatch(int $index, ServerRequestInterface $request): ResponseInterface
    {
        if (!isset($this->middleware[$index])) {
            return $this->fallback->handle($request);
        }
        $next = new class ($this, $index + 1) implements RequestHandlerInterface {
            public function __construct(private readonly MiddlewareDispatcher $dispatcher, private readonly int $index) {}
            public function handle(ServerRequestInterface $request): ResponseInterface
            {
                return $this->dispatcher->dispatchFrom($this->index, $request);
            }
        };
        return $this->middleware[$index]->process($request, $next);
    }

    public function dispatchFrom(int $index, ServerRequestInterface $request): ResponseInterface
    {
        return $this->dispatch($index, $request);
    }
}
