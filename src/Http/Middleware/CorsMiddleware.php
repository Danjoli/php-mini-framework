<?php

declare(strict_types=1);

namespace Mini\Http\Middleware;

use Mini\Http\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class CorsMiddleware implements MiddlewareInterface
{
    public function __construct(private readonly string $origin = '*') {}
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $request->getMethod() === 'OPTIONS' ? new Response(204) : $handler->handle($request);
        return $response->withHeader('Access-Control-Allow-Origin', $this->origin)->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')->withHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Request-ID');
    }
}
