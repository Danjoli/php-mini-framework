<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Mini\Exception\NotFoundHttpException;
use Mini\Http\Middleware\ErrorHandlerMiddleware;
use Mini\Http\Middleware\JsonBodyMiddleware;
use Mini\Http\Middleware\RequestIdMiddleware;
use Mini\Http\MiddlewareDispatcher;
use Mini\Http\Response;
use Mini\Http\ServerRequest;
use Mini\Http\Stream;
use Mini\Http\Uri;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class MiddlewareTest extends TestCase
{
    public function testPipelineRunsInOrderAndParsesJson(): void
    {
        $fallback = new class implements RequestHandlerInterface {
            public function handle(ServerRequestInterface $request): ResponseInterface
            {
                $body = $request->getParsedBody();
                return Response::json(['name' => is_array($body) ? ($body['name'] ?? null) : null]);
            }
        };
        $pipeline = new MiddlewareDispatcher([new ErrorHandlerMiddleware(), new RequestIdMiddleware(), new JsonBodyMiddleware()], $fallback);
        $request = (new ServerRequest('POST', Uri::fromString('http://localhost/tasks'), ['Content-Type' => 'application/json'], Stream::fromString('{"name":"Mini"}')))->withHeader('X-Request-ID', 'test-id');
        $response = $pipeline->handle($request);
        self::assertSame('{"name":"Mini"}', (string) $response->getBody());
        self::assertSame('test-id', $response->getHeaderLine('X-Request-ID'));
    }

    public function testErrorHandlerConvertsExceptionsToJson(): void
    {
        $fallback = new class implements RequestHandlerInterface {
            public function handle(ServerRequestInterface $request): ResponseInterface
            {
                throw new NotFoundHttpException('Missing task.');
            }
        };
        $response = (new MiddlewareDispatcher([new ErrorHandlerMiddleware()], $fallback))->handle(new ServerRequest('GET', Uri::fromString('http://localhost/missing')));
        self::assertSame(404, $response->getStatusCode());
        self::assertStringContainsString('Missing task.', (string) $response->getBody());
    }
}
