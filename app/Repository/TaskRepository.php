<?php

declare(strict_types=1);

namespace App\Repository;

use Mini\Database\Database;

final class TaskRepository
{
    public function __construct(private readonly Database $database) {}
    /** @return list<array<string, mixed>> */
    public function all(): array { return $this->database->table('tasks')->get(); }
    /** @return array<string, mixed>|null */
    public function find(int $id): ?array { return $this->database->table('tasks')->where('id', $id)->first(); }
    /** @param array<string, mixed> $data
     *  @return array<string, mixed>
     */
    public function create(array $data): array { $id = $this->database->table('tasks')->insert(['title' => $data['title'], 'description' => $data['description'] ?? null, 'completed' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]); return $this->find((int) $id) ?? []; }
    /** @param array<string, mixed> $data
     *  @return array<string, mixed>|null
     */
    public function update(int $id, array $data): ?array { $task = $this->find($id); if ($task === null) { return null; } $allowed = array_intersect_key($data, array_flip(['title', 'description', 'completed'])); if (isset($allowed['completed'])) { $allowed['completed'] = (int) (bool) $allowed['completed']; } $allowed['updated_at'] = date('Y-m-d H:i:s'); $this->database->table('tasks')->where('id', $id)->update($allowed); return $this->find($id); }
    public function delete(int $id): bool { return $this->database->table('tasks')->where('id', $id)->delete() === 1; }
}
