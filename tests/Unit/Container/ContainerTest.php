<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Mini\Container\Container;
use Mini\Container\ContainerException;
use Mini\Container\NotFoundException;
use PHPUnit\Framework\TestCase;
use stdClass;

final class ContainerTest extends TestCase
{
    public function testItResolvesBindingsAndAutowiresDependencies(): void
    {
        $container = new Container();
        $container->bind(Greeting::class, fn (): Greeting => new Greeting('Hello'));

        $service = $container->get(Greeter::class);

        self::assertInstanceOf(Greeter::class, $service);
        self::assertSame('Hello Mini', $service->greet('Mini'));
    }

    public function testSingletonReturnsTheSameInstance(): void
    {
        $container = new Container();
        $container->singleton(stdClass::class, stdClass::class);

        self::assertSame($container->get(stdClass::class), $container->get(stdClass::class));
    }

    public function testItThrowsForUnknownEntries(): void
    {
        $this->expectException(NotFoundException::class);

        (new Container())->get('UnknownService');
    }

    public function testItDetectsCircularDependencies(): void
    {
        $container = new Container();
        $container->bind('a', fn (Container $container): mixed => $container->get('b'));
        $container->bind('b', fn (Container $container): mixed => $container->get('a'));

        $this->expectException(ContainerException::class);
        $container->get('a');
    }

    public function testItInjectsCallableArguments(): void
    {
        $result = (new Container())->call(
            static fn (stdClass $service, string $name): string => $name.' '.get_class($service),
            ['name' => 'uses'],
        );

        self::assertSame('uses stdClass', $result);
    }
}

final class Greeting
{
    public function __construct(private readonly string $prefix) {}

    public function message(): string
    {
        return $this->prefix;
    }
}

final class Greeter
{
    public function __construct(private readonly Greeting $greeting) {}

    public function greet(string $name): string
    {
        return $this->greeting->message().' '.$name;
    }
}
