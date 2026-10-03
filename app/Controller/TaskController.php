<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\TaskRepository;
use Mini\Exception\NotFoundHttpException;
use Mini\Http\Response;
use Mini\Validation\Validator;
use Psr\Http\Message\ServerRequestInterface;

final class TaskController
{
    public function __construct(private readonly TaskRepository $tasks, private readonly Validator $validator) {}
    public function index(): Response { return Response::json(['data' => $this->tasks->all()]); }
    public function show(string $id): Response { return Response::json(['data' => $this->task((int) $id)]); }
    public function store(ServerRequestInterface $request): Response { $data = $this->body($request); $valid = $this->validator->validate($data, ['title' => 'required|string|min:3|max:120', 'description' => 'string|max:1000']); return Response::json(['data' => $this->tasks->create($valid)], 201); }
    public function update(ServerRequestInterface $request, string $id): Response { $data = $this->body($request); $valid = $this->validator->validate($data, ['title' => 'string|min:3|max:120', 'description' => 'string|max:1000', 'completed' => 'boolean']); $task = $this->tasks->update((int) $id, $valid); if ($task === null) { throw new NotFoundHttpException('Task not found.'); } return Response::json(['data' => $task]); }
    public function destroy(string $id): Response { $this->task((int) $id); $this->tasks->delete((int) $id); return new Response(204); }
    /** @return array<string, mixed> */
    private function task(int $id): array { $task = $this->tasks->find($id); if ($task === null) { throw new NotFoundHttpException('Task not found.'); } return $task; }
    /** @return array<string, mixed> */
    private function body(ServerRequestInterface $request): array { $body = $request->getParsedBody(); return is_array($body) ? $body : []; }
}
