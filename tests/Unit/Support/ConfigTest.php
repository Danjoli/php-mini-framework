<?php

declare(strict_types=1);

namespace Tests\Unit\Support;

use Mini\Support\Config;
use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    public function testItReadsNestedValuesAndDefaults(): void
    {
        $config = new Config(['app' => ['name' => 'Mini']]);

        self::assertSame('Mini', $config->get('app.name'));
        self::assertSame('fallback', $config->get('app.missing', 'fallback'));
    }
}
