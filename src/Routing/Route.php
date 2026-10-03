<?php

declare(strict_types=1);

namespace Mini\Routing;

final class Route
{
    /** @param list<string> $methods
     *  @param callable|array{class-string, string} $handler
     */
    public function __construct(public readonly array $methods, public readonly string $path, public readonly mixed $handler, public readonly ?string $name = null) {}

    /** @return array<string, string>|null */
    public function match(string $path): ?array
    {
        $pattern = preg_replace_callback('/\{([A-Za-z_][A-Za-z0-9_]*)(?::([^}]+))?\}/', static function (array $matches): string { return '(?P<'.$matches[1].'>'.($matches[2] ?? '[^/]+').')'; }, $this->path);
        if ($pattern === null || preg_match('#^'.$pattern.'$#', $path, $matches) !== 1) { return null; }
        return array_filter($matches, static fn (string|int $key): bool => is_string($key), ARRAY_FILTER_USE_KEY);
    }
}
