<?php

declare(strict_types=1);

namespace Mini\Database;

use PDO;
use Throwable;

final class Database
{
    private readonly PDO $pdo;
    public function __construct(string $dsn, ?string $username = null, ?string $password = null)
    {
        $this->pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false]);
    }
    public function pdo(): PDO { return $this->pdo; }
    public function table(string $table): QueryBuilder { return new QueryBuilder($this->pdo, $table); }
    public function transaction(callable $callback): mixed { $this->pdo->beginTransaction(); try { $result = $callback($this); $this->pdo->commit(); return $result; } catch (Throwable $exception) { if ($this->pdo->inTransaction()) { $this->pdo->rollBack(); } throw $exception; } }
}
