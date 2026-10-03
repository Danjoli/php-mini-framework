<?php

declare(strict_types=1);

namespace Mini\Http\Middleware;

use Mini\Exception\HttpException;
use Mini\Http\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Throwable;

final class ErrorHandlerMiddleware implements MiddlewareInterface
{
    public function __construct(private readonly bool $debug = false) {}
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try { return $handler->handle($request); } catch (Throwable $exception) {
            $status = $exception instanceof HttpException ? $exception->statusCode : 500;
            $message = $exception instanceof HttpException || $this->debug ? $exception->getMessage() : 'Internal server error.';
            $headers = $exception instanceof HttpException ? $exception->headers : [];
            return Response::json(['error' => ['status' => $status, 'message' => $message, 'request_id' => $request->getAttribute('request_id')]], $status, $headers);
        }
    }
}
