<?php

declare(strict_types=1);

namespace Mini\Database;

use InvalidArgumentException;
use PDO;

final class QueryBuilder
{
    /** @var list<array{column: string, operator: string, value: mixed}> */
    private array $wheres = [];
    private ?int $limit = null;
    public function __construct(private readonly PDO $pdo, private readonly string $table) { $this->identifier($table); }
    public function where(string $column, mixed $value, string $operator = '='): self { $this->identifier($column); if (!in_array($operator, ['=', '!=', '<', '<=', '>', '>=', 'LIKE'], true)) { throw new InvalidArgumentException('Unsupported operator.'); } $clone = clone $this; $clone->wheres[] = ['column' => $column, 'operator' => $operator, 'value' => $value]; return $clone; }
    public function limit(int $limit): self { if ($limit < 1) { throw new InvalidArgumentException('Limit must be positive.'); } $clone = clone $this; $clone->limit = $limit; return $clone; }
    /** @return list<array<string, mixed>> */
    public function get(): array { [$where, $parameters] = $this->compileWhere(); $sql = "SELECT * FROM {$this->table}{$where}".($this->limit !== null ? ' LIMIT '.$this->limit : ''); $statement = $this->pdo->prepare($sql); $statement->execute($parameters); return array_values($statement->fetchAll()); }
    /** @return array<string, mixed>|null */
    public function first(): ?array { $rows = $this->limit(1)->get(); return $rows[0] ?? null; }
    /** @param array<string, mixed> $data */
    public function insert(array $data): int|string { if ($data === []) { throw new InvalidArgumentException('Insert data cannot be empty.'); } $columns = array_keys($data); foreach ($columns as $column) { $this->identifier($column); } $placeholders = array_map(static fn (string $column): string => ':'.$column, $columns); $statement = $this->pdo->prepare("INSERT INTO {$this->table} (".implode(', ', $columns).') VALUES ('.implode(', ', $placeholders).')'); $statement->execute($data); $id = $this->pdo->lastInsertId(); if ($id === false) { throw new \RuntimeException('Unable to retrieve inserted identifier.'); } return ctype_digit($id) ? (int) $id : $id; }
    /** @param array<string, mixed> $data */
    public function update(array $data): int { if ($this->wheres === []) { throw new InvalidArgumentException('Unsafe update without a where clause.'); } $sets = []; $parameters = []; foreach ($data as $column => $value) { $this->identifier($column); $key = 'set_'.$column; $sets[] = "{$column} = :{$key}"; $parameters[$key] = $value; } [$where, $whereParameters] = $this->compileWhere(); $statement = $this->pdo->prepare("UPDATE {$this->table} SET ".implode(', ', $sets).$where); $statement->execute([...$parameters, ...$whereParameters]); return $statement->rowCount(); }
    public function delete(): int { if ($this->wheres === []) { throw new InvalidArgumentException('Unsafe delete without a where clause.'); } [$where, $parameters] = $this->compileWhere(); $statement = $this->pdo->prepare("DELETE FROM {$this->table}{$where}"); $statement->execute($parameters); return $statement->rowCount(); }
    /** @return array{string, array<string, mixed>} */
    private function compileWhere(): array { if ($this->wheres === []) { return ['', []]; } $clauses = []; $parameters = []; foreach ($this->wheres as $index => $where) { $key = 'where_'.$index; $clauses[] = $where['column'].' '.$where['operator'].' :'.$key; $parameters[$key] = $where['value']; } return [' WHERE '.implode(' AND ', $clauses), $parameters]; }
    private function identifier(string $value): void { if (preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $value) !== 1) { throw new InvalidArgumentException("Invalid SQL identifier: {$value}"); } }
}
