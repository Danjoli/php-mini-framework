<?php

declare(strict_types=1);

namespace Mini\Container;

use Closure;
use Psr\Container\ContainerInterface;
use ReflectionClass;
use ReflectionNamedType;

final class Container implements ContainerInterface
{
    /** @var array<string, string|object> */
    private array $bindings = [];

    /** @var array<string, object> */
    private array $instances = [];

    /** @var list<string> */
    private array $resolving = [];

    public function bind(string $id, string|object $concrete): self
    {
        $this->bindings[$id] = $concrete;

        return $this;
    }

    public function singleton(string $id, string|object $concrete): self
    {
        $this->bindings[$id] = function (self $container) use ($id, $concrete): object {
            if (isset($this->instances[$id])) {
                return $this->instances[$id];
            }

            if (is_string($concrete) && !class_exists($concrete)) {
                throw new NotFoundException("Class {$concrete} does not exist.");
            }
            $resolved = $concrete instanceof Closure
                ? $concrete($container)
                : (is_string($concrete) ? $container->build($concrete) : $concrete);

            if (!is_object($resolved)) {
                throw new ContainerException("Singleton {$id} must resolve to an object.");
            }

            return $this->instances[$id] = $resolved;
        };

        return $this;
    }

    public function instance(string $id, object $instance): self
    {
        $this->instances[$id] = $instance;

        return $this;
    }

    public function has(string $id): bool
    {
        return isset($this->bindings[$id], $this->instances[$id]) || class_exists($id);
    }

    public function get(string $id): mixed
    {
        if (isset($this->instances[$id])) {
            return $this->instances[$id];
        }

        if (in_array($id, $this->resolving, true)) {
            throw new ContainerException('Circular dependency detected: ' . implode(' -> ', [...$this->resolving, $id]));
        }

        $this->resolving[] = $id;
        try {
            if (isset($this->bindings[$id])) {
                $binding = $this->bindings[$id];

                if (is_string($binding) && !class_exists($binding)) {
                    throw new NotFoundException("Class {$binding} does not exist.");
                }

                return $binding instanceof Closure
                    ? $binding($this)
                    : (is_string($binding) ? $this->build($binding) : $binding);
            }

            if (!class_exists($id)) {
                throw new NotFoundException("No entry found for {$id}.");
            }

            return $this->build($id);
        } finally {
            array_pop($this->resolving);
        }
    }

    /** @param class-string $class */
    public function build(string $class): object
    {
        $reflection = new ReflectionClass($class);

        if (!$reflection->isInstantiable()) {
            throw new ContainerException("Class {$class} is not instantiable.");
        }

        $constructor = $reflection->getConstructor();
        if ($constructor === null) {
            return $reflection->newInstance();
        }

        $arguments = [];
        foreach ($constructor->getParameters() as $parameter) {
            $type = $parameter->getType();
            if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
                $arguments[] = $this->get($type->getName());
            } elseif ($parameter->isDefaultValueAvailable()) {
                $arguments[] = $parameter->getDefaultValue();
            } else {
                throw new ContainerException("Cannot resolve parameter \${$parameter->getName()} of {$class}.");
            }
        }

        return $reflection->newInstanceArgs($arguments);
    }

    /** @param array<string, mixed> $parameters
     */
    public function call(callable $callable, array $parameters = []): mixed
    {
        $reflection = is_array($callable)
            ? new \ReflectionMethod($callable[0], $callable[1])
            : new \ReflectionFunction(Closure::fromCallable($callable));

        $arguments = [];
        foreach ($reflection->getParameters() as $parameter) {
            if (array_key_exists($parameter->getName(), $parameters)) {
                $arguments[] = $parameters[$parameter->getName()];
                continue;
            }
            $type = $parameter->getType();
            if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
                $arguments[] = $this->get($type->getName());
                continue;
            }
            if ($parameter->isDefaultValueAvailable()) {
                $arguments[] = $parameter->getDefaultValue();
                continue;
            }
            throw new ContainerException("Cannot resolve callable parameter \${$parameter->getName()}.");
        }

        return call_user_func_array($callable, $arguments);
    }
}
