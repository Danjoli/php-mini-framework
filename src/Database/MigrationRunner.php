<?php

declare(strict_types=1);

namespace Mini\Database;

final class MigrationRunner
{
    public function __construct(private readonly Database $database) {}
    public function migrate(string $directory): int
    {
        $pdo = $this->database->pdo();
        $pdo->exec('CREATE TABLE IF NOT EXISTS migrations (migration VARCHAR(255) PRIMARY KEY, executed_at DATETIME NOT NULL)');
        $statement = $pdo->query('SELECT migration FROM migrations');
        if ($statement === false) { throw new \RuntimeException('Unable to read applied migrations.'); }
        $applied = $statement->fetchAll(\PDO::FETCH_COLUMN);
        $count = 0;
        foreach (glob(rtrim($directory, '/\\').'/*.php') ?: [] as $file) {
            $name = basename($file);
            if (in_array($name, $applied, true)) { continue; }
            $migration = require $file;
            if (!is_callable($migration)) { throw new \RuntimeException("Migration {$name} must return a callable."); }
            $this->database->transaction(function (Database $database) use ($migration, $name): void { $migration($database->pdo()); $database->table('migrations')->insert(['migration' => $name, 'executed_at' => date('Y-m-d H:i:s')]); });
            ++$count;
        }
        return $count;
    }
}
