<?php

declare(strict_types=1);

return static function (\PDO $pdo): void {
    $pdo->exec('CREATE TABLE tasks (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title VARCHAR(120) NOT NULL,
        description TEXT NULL,
        completed INTEGER NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL,
        updated_at DATETIME NOT NULL
    )');
};
