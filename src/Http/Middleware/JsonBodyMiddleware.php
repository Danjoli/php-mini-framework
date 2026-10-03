<?php

declare(strict_types=1);

namespace Mini\Http\Middleware;

use Mini\Exception\HttpException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class JsonBodyMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if (str_contains(strtolower($request->getHeaderLine('Content-Type')), 'application/json')) {
            try {
                $data = json_decode((string) $request->getBody(), true, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException) {
                throw new HttpException(400, 'Malformed JSON request body.');
            }
            if (!is_array($data)) {
                throw new HttpException(400, 'JSON request body must be an object.');
            }
            $request = $request->withParsedBody($data);
        }
        return $handler->handle($request);
    }
}
