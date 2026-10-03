<?php

declare(strict_types=1);

namespace Tests\Unit\Database;

use Mini\Database\Database;
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{
    public function testQueryBuilderUsesParameterizedCrudOperations(): void
    {
        $database = new Database('sqlite::memory:');
        $database->pdo()->exec('CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)');
        $id = $database->table('tasks')->insert(['title' => 'Build framework', 'done' => 0]);
        $task = $database->table('tasks')->where('id', $id)->first();
        self::assertNotNull($task);
        self::assertSame('Build framework', $task['title']);
        self::assertSame(1, $database->table('tasks')->where('id', $id)->update(['done' => 1]));
        self::assertSame(1, $database->table('tasks')->where('id', $id)->delete());
        self::assertSame([], $database->table('tasks')->get());
    }

    public function testTransactionRollsBackFailures(): void
    {
        $database = new Database('sqlite::memory:');
        $database->pdo()->exec('CREATE TABLE records (id INTEGER PRIMARY KEY)');
        try { $database->transaction(function (Database $database): void { $database->table('records')->insert(['id' => 1]); throw new \RuntimeException('fail'); }); } catch (\RuntimeException) {}
        self::assertSame([], $database->table('records')->get());
    }
}
