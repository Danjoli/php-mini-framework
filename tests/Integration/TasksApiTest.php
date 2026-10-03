<?php

declare(strict_types=1);

namespace Tests\Integration;

use App\Controller\TaskController;
use App\Repository\TaskRepository;
use Mini\Application;
use Mini\Container\Container;
use Mini\Database\Database;
use Mini\Http\Middleware\ErrorHandlerMiddleware;
use Mini\Http\Middleware\JsonBodyMiddleware;
use Mini\Http\MiddlewareDispatcher;
use Mini\Http\ServerRequest;
use Mini\Http\Stream;
use Mini\Http\Uri;
use Mini\Routing\Router;
use Mini\Validation\Validator;
use PHPUnit\Framework\TestCase;

final class TasksApiTest extends TestCase
{
    private MiddlewareDispatcher $application;
    protected function setUp(): void
    {
        $database = new Database('sqlite::memory:');
        $database->pdo()->exec('CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title VARCHAR(120) NOT NULL, description TEXT NULL, completed INTEGER NOT NULL DEFAULT 0, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL)');
        $container = new Container();
        $container->instance(Database::class, $database)->instance(Validator::class, new Validator())->instance(TaskRepository::class, new TaskRepository($database));
        $router = new Router();
        $router->get('/api/tasks', [TaskController::class, 'index']);
        $router->post('/api/tasks', [TaskController::class, 'store']);
        $router->get('/api/tasks/{id:\\d+}', [TaskController::class, 'show']);
        $this->application = new MiddlewareDispatcher([new ErrorHandlerMiddleware(true), new JsonBodyMiddleware()], new Application($container, $router));
    }
    public function testTaskLifecycle(): void
    {
        $created = $this->request('POST', '/api/tasks', ['title' => 'Build framework']);
        self::assertSame(201, $created->getStatusCode());
        self::assertStringContainsString('Build framework', (string) $created->getBody());
        $shown = $this->request('GET', '/api/tasks/1');
        self::assertSame(200, $shown->getStatusCode());
        self::assertStringContainsString('Build framework', (string) $shown->getBody());
    }
    public function testValidationErrorsAreStructured(): void
    {
        $response = $this->request('POST', '/api/tasks', ['title' => 'x']);
        self::assertSame(422, $response->getStatusCode());
        self::assertStringContainsString('details', (string) $response->getBody());
    }
    /** @param array<string, mixed>|null $body */
    private function request(string $method, string $path, ?array $body = null): \Psr\Http\Message\ResponseInterface
    {
        $headers = $body === null ? [] : ['Content-Type' => 'application/json'];
        $stream = Stream::fromString($body === null ? '' : json_encode($body, JSON_THROW_ON_ERROR));
        return $this->application->handle(new ServerRequest($method, Uri::fromString('http://localhost'.$path), $headers, $stream));
    }
}
