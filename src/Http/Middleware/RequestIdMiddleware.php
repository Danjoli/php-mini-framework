<?php

declare(strict_types=1);

namespace Mini\Http\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class RequestIdMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $id = $request->getHeaderLine('X-Request-ID') ?: bin2hex(random_bytes(8));
        return $handler->handle($request->withAttribute('request_id', $id))->withHeader('X-Request-ID', $id);
    }
}
