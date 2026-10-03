<?php

declare(strict_types=1);

namespace Mini\Support;

use RuntimeException;

final class Config
{
    /** @param array<string, mixed> $items */
    public function __construct(private readonly array $items)
    {
    }

    public static function fromDirectory(string $directory): self
    {
        $items = [];
        foreach (glob(rtrim($directory, '/\\').'/*.php') ?: [] as $file) {
            $value = require $file;
            if (!is_array($value)) {
                throw new RuntimeException("Configuration file must return an array: {$file}");
            }
            $items[pathinfo($file, PATHINFO_FILENAME)] = $value;
        }

        return new self($items);
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $value = $this->items;
        foreach (explode('.', $key) as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return $default;
            }
            $value = $value[$segment];
        }

        return $value;
    }
}
